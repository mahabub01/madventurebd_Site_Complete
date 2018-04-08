var SKY=SKY||{};SKY.Utils={touchSupport:null,canvasSupport:null,transformation2dSupport:null,transformation3dSupport:null,transitionSupport:null,prefixedProps:[],hasTouchSupport:function(){return null===this.touchSupport&&(this.touchSupport=Modernizr.touch),this.touchSupport},hasCanvasSupport:function(){return null===this.canvasSupport&&(this.canvasSupport=Modernizr.canvas),this.canvasSupport},has2dTransformationSupport:function(){return null===this.transformation2dSupport&&(this.transformation2dSupport=Modernizr.csstransforms),this.transformation2dSupport},has3dTransformationSupport:function(){return null===this.transformation3dSupport&&(this.transformation3dSupport=Modernizr.csstransforms3d),this.transformation3dSupport},hasTransitionSupport:function(){return null===this.transitionSupport&&(this.transitionSupport=Modernizr.csstransitions),this.transitionSupport},getPrefixedProperty:function(t){return void 0===this.prefixedProps[t]&&(this.prefixedProps[t]=Modernizr.prefixed(t)),this.prefixedProps[t]},setCursor:function(t){switch(t){case"openhand":$("body").css("cursor","url(images/sc-graphics/openhand.cur), auto");break;case"closedhand":$("body").css("cursor","url(images/sc-graphics/closedhand.cur), auto");break;default:$("body").css("cursor",t)}},hexToRGB:function(t){if("#"===t[0]&&(t=t.substr(1)),3==t.length){var e=/^([a-f\d])([a-f\d])([a-f\d])$/i.exec(t).slice(1);t="";for(var i=0;3>i;i++)t+=e[i]+e[i]}return e=/^([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(t).slice(1),{r:parseInt(e[0],16),g:parseInt(e[1],16),b:parseInt(e[2],16)}}},window.requestAnimFrame=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(t){window.setTimeout(t,1e3/60)}}(),SKY.ImageLoader=function(t){this.subscribers=[],this.img=t,this.fired=!1},SKY.ImageLoader.prototype={subscribe:function(t){this.subscribers.push(t)},unsubscribe:function(t){for(var e=0;e<this.subscribers.length;e++)this.subscribers[e]===t&&delete this.subscribers[e]},publish:function(){if(!this.fired){this.fired=!0;for(var t=0;t<this.subscribers.length;t++)"function"==typeof this.subscribers[t]&&this.subscribers[t]()}},load:function(){var t=this;if(this.img.addEventListener?this.img.addEventListener("load",function(e){t.onLoad(e)},!1):this.img.attachEvent&&this.img.attachEvent("onload",function(e){t.onLoad(e)}),this.img.complete||void 0===this.img.complete||"loading"===this.img.readyState){var e=this.img.src;this.img.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==",this.img.src=e}},onLoad:function(t){1<this.img.height&&this.publish()}},SKY.Timer=function(t,e){this.delay=t||2e3,this.repeatCount=e||0,this.currentCount=0,this.intervalID=null,this.running=!1,this.subscribers=[]},SKY.Timer.prototype={subscribe:function(t){this.subscribers.push(t)},unsubscribe:function(t){for(var e=0;e<this.subscribers.length;e++)this.subscribers[e]===t&&delete this.subscribers[e]},publish:function(t){for(var e=0;e<this.subscribers.length;e++)"function"==typeof this.subscribers[e]&&this.subscribers[e](t)},reset:function(){this.currentCount=0},start:function(){var t=this;this.running||(this.intervalID=setInterval(function(){t.tick()},this.delay),this.running=!0)},stop:function(){this.running&&(clearInterval(this.intervalID),this.running=!1)},tick:function(){++this.currentCount,this.publish("timer"),this.currentCount==this.repeatCount&&(this.reset(),this.stop(),this.publish("timercomplete"))}},SKY.CarouselItem=function(t,e){this.element=t,this.carousel=e,this.actualWidth=e.settings.itemWidth,this.actualHeight=e.settings.itemHeight,this.scaledY=this.scaledX=this.y=this.x=0,this.alpha=this.scale=1,this.width=this.actualWidth,this.height=this.actualHeight,this.zIndex=this.baseOffset=0,this.distance=-1,this.extraImageSize=this.extraItemSize=0,this.url=t.children("a"),this.imageElement=t.find("img"),this.image=this.imageElement.get(0),this.content=t.children(".sc-content"),this.subscribers={load:[]},this.loaded=!1,this.reflection=null,this.init()},SKY.CarouselItem.prototype={init:function(){if(0==$.support.leadingWhitespace){var t=2*parseInt(this.imageElement.css("padding-left")),e=2*parseInt(this.imageElement.css("border-left-width")),i=2*parseInt(this.element.css("padding-left")),s=2*parseInt(this.element.css("border-left-width"));this.extraImageSize=t+e,this.extraItemSize=i+s}this.updateBaseOffset()},load:function(){var t=this;if(!this.loaded){var e=new SKY.ImageLoader(this.image);e.subscribe(function(){t.onImageLoaded()}),e.load()}},subscribe:function(t,e){this.subscribers[t].push(e)},unsubscribe:function(t,e){for(var i=0;i<this.subscribers[t].length;i++)this.subscribers[t][i]===e&&delete this.subscribers[t][i]},publish:function(t,e){for(var i=0;i<this.subscribers[t].length;i++)"function"==typeof this.subscribers[t][i]&&this.subscribers[t][i](e)},index:function(){return this.element.index()},onImageLoaded:function(){var t=this.carousel.settings;this.carousel.settings.reflectionVisible&&(this.reflection=SKY.CarouselItem.createReflection(this.imageElement,t.reflectionSize,t.reflectionAlpha),this.reflection.css({"float":"left",clear:"both","margin-top":t.reflectionDistance+"px"}),this.element.append(this.reflection),this.update()),this.loaded=!0,this.publish("load",this)},setAlpha:function(t){t!=this.alpha&&(this.alpha=t,this.update())},setX:function(t){t!=this.x&&(this.scaledX+=t-this.x,this.x=t,this.update())},setY:function(t){t!=this.y&&(this.scaledY+=t-this.y,this.y=t,this.update())},setXY:function(t,e){t!=this.x&&e!=this.y&&(this.scaledX+=t-this.x,this.scaledY+=e-this.y,this.x=t,this.y=e,this.update())},setScale:function(t){t!=this.scale&&(this.scale=t,this.update())},setDistance:function(t){this.distance=t},setZIndex:function(t){t!=this.zIndex&&(this.zIndex=t,this.element.css("z-index",t))},getBaseOffset:function(){return this.baseOffset},updateBaseOffset:function(){var t=this.carousel.settings;this.baseOffset=this.index()*(t.itemWidth*t.unselectedItemZoomFactor+t.distance)},update:function(){var t=this.carousel.settings;if(SKY.Utils.has2dTransformationSupport())t="translate("+this.x+"px, "+this.y+"px) scale("+this.scale+")",SKY.Utils.has3dTransformationSupport()&&(t+=" translateZ(0)"),this.element.css(SKY.Utils.getPrefixedProperty("transform"),t),this.element.css("opacity",this.alpha);else{var e=this.actualWidth*this.scale,i=this.actualHeight*this.scale;this.scaledX=this.x+(this.actualWidth-e)/2,this.scaledY=this.y+(this.actualHeight-i)/2,this.width=e,this.height=i,e={left:this.scaledX,top:this.scaledY,width:this.width-this.extraItemSize,height:this.height-this.extraItemSize},i={width:e.width-this.extraImageSize,height:e.height-this.extraImageSize},t.reflectionVisible&&!SKY.Utils.hasCanvasSupport()?(i.opacity=this.alpha,this.reflection&&this.reflection.css({width:e.width,height:e.height,filter:SKY.CarouselItem.getAlphaFilterStatement(t.reflectionAlpha,t.reflectionSize,t.itemHeight)})):e.opacity=this.alpha,this.element.css(e),this.imageElement.css(i)}},launchURL:function(){if(0<this.url.length){var t=this.url.attr("target");window.open(this.url.attr("href"),t?t:"_self")}},addClass:function(t){this.element.addClass(t)},removeClass:function(t){this.element.removeClass(t)}},SKY.CarouselItem.createReflection=function(t,e,i){var s=t.width(),n=t.height(),o=null;return SKY.Utils.hasCanvasSupport()?(o=$("<canvas>"),ctx=o.get(0).getContext("2d"),o.attr({width:s,height:e}),o.addClass("reflection"),ctx.save(),ctx.translate(0,n),ctx.scale(1,-1),ctx.drawImage(t.get(0),0,0,s,n),ctx.restore(),ctx.globalCompositeOperation="destination-out",t=ctx.createLinearGradient(0,0,0,e),t.addColorStop(0,"rgba(0, 0, 0, "+(1-i)+")"),t.addColorStop(1,"rgba(0, 0, 0, 1.0)"),ctx.fillStyle=t,ctx.fillRect(0,0,s,e)):(o=$("<img>"),o.attr({src:t.get(0).src}),o.css("filter",SKY.CarouselItem.getAlphaFilterStatement(i,e,n))),o},SKY.CarouselItem.getAlphaFilterStatement=function(t,e,i){return"flipv progid:DXImageTransform.Microsoft.Alpha(opacity="+100*t+", style=1, finishOpacity=0, startx=0, starty=0, finishx=0, finishy="+100*(e/i)+")"},SKY.Container=function(t,e){this.element=t,this.carousel=e,this.x=0},SKY.Container.prototype={setX:function(t,e){this.x=t,this.update(e)},getLeft:function(){return this.element.position().left},setTopMargin:function(t){var e=this.carousel.settings,i=e.itemHeight;"auto"==t&&(t=(this.carousel.dom.carousel.height()-i*e.selectedItemZoomFactor)/2),t=-i*(1-e.selectedItemZoomFactor)/2+t,this.element.css("margin-top",t+"px")},update:function(t){var e=this;t?(this.carousel.onSelectionAnimationStart(),this.element.on("webkitTransitionEnd transitionend oTransitionEnd otransitionend MSTransitionEnd",function(t){e.element.off("webkitTransitionEnd transitionend oTransitionEnd otransitionend MSTransitionEnd"),e.carousel.onSelectionAnimationEnd()}),SKY.Utils.hasTransitionSupport()?(this.element.css(SKY.Utils.getPrefixedProperty("transition"),"left "+t+"s ease-out"),this.element.css("left",this.x)):this.element.stop().animate({left:this.x},1e3*t,function(){e.carousel.onSelectionAnimationEnd()})):(SKY.Utils.hasTransitionSupport()&&this.element.css(SKY.Utils.getPrefixedProperty("transition"),""),this.element.stop().css({left:this.x}))}},SKY.Carousel=function(t,e){this.settings={itemWidth:300,itemHeight:450,distance:15,startIndex:"auto",enableKeyboard:!0,enableMouseWheel:!0,reverseMouseWheel:!1,autoSlideshow:!1,autoSlideshowDelay:2.5,loop:!0,selectedItemDistance:50,selectedItemZoomFactor:1,unselectedItemZoomFactor:.6,unselectedItemAlpha:.6,motionStartDistance:150,topMargin:30,preload:!0,showPreloader:!0,navigationButtonsVisible:!0,gradientStartPoint:.15,gradientEndPoint:1,gradientOverlayVisible:!0,gradientOverlayColor:"#fff",gradientOverlaySize:215,reflectionVisible:!1,reflectionDistance:4,reflectionSize:100,reflectionAlpha:.38,slideSpeed:.45,selectByClick:!1},e&&$.extend(this.settings,e),this.targetLeft=0,this.dragging=this.mouseOver=!1,this.extraDistanceUnit=this.scaleUnit=this.alphaUnit=this.centerY=this.centerX=this.timer=this.preloader=this.contentContainer=this.container=this.closestItem=this.selectedItem=null,this.carouselItems=[],this.dom={carousel:t},this.events={},this.init()},SKY.Carousel.prototype={init:function(){this.initDOM(),this.initConfigParams(),this.initEvents(),this.initContentWrapper(),this.initContainer(),this.initGradientOverlays(),this.initNavigationButtons(),this.initResizeListener(),this.initKeyboardNavigation(),this.initMouseWheelSupport(),this.initAutoSlideshow(),this.calculateUnits(),this.update(),this.dom.carousel.css("visibility","visible")},initDOM:function(){var t=this.settings;this.dom.document=$(document),this.dom.wrapper=this.dom.carousel.children(".sky-carousel-wrapper"),this.dom.container=this.dom.wrapper.children(".sky-carousel-container"),this.dom.items=this.dom.container.children("li"),this.dom.links=this.dom.container.find("li > a"),this.dom.images=this.dom.container.find("li img"),this.dom.carousel.addClass("sc-no-select"),t.preload&&0!=$.support.leadingWhitespace&&(this.dom.wrapper.css({visibility:"hidden",opacity:0}),t.showPreloader&&(this.preloader=$('<div class="sc-preloader"></div>'),this.dom.carousel.append(this.preloader))),this.dom.images.each(function(){$(this).addClass("sc-image"),this.ondragstart=function(){return!1}})},initConfigParams:function(){var t=this.settings,e=parseInt(this.dom.items.css("padding-left")),i=parseInt(this.dom.items.css("border-left-width")),s=parseInt(this.dom.images.css("padding-left")),n=parseInt(this.dom.images.css("border-left-width"));t.itemWidth+=2*(e+i+s+n),t.itemHeight+=2*(e+i+s+n),SKY.Utils.has2dTransformationSupport()&&this.dom.items.css(SKY.Utils.getPrefixedProperty("transformOrigin"),"center "+Math.round(t.itemHeight/2)+"px")},initEvents:function(){SKY.Utils.hasTouchSupport()?(this.events.startEvent="touchstart.sc",this.events.moveEvent="touchmove.sc",this.events.endEvent="touchend.sc",this.events.touchCancel="touchcancel.sc"):(this.events.startEvent="mousedown.sc",this.events.moveEvent="mousemove.sc",this.events.endEvent="mouseup.sc")},initContainer:function(){var t=this,e=0;this.container=new SKY.Container(this.dom.container,this),this.dom.items.each(function(i){i=new SKY.CarouselItem($(this),t),i.subscribe("load",function(i){++e,e==t.dom.items.length&&t.onAllLoaded()}),i.load(),t.carouselItems.push(i)}),this.dom.carousel.on(this.events.startEvent,function(e){t.onStart(e)}),SKY.Utils.hasTouchSupport()||this.dom.carousel.hover(function(e){t.mouseOver=!0,t.updateCursor()},function(e){t.mouseOver=!1,t.updateCursor()}),this.selectedItem=this.getStartItem(),this.selectedItem.addClass("sc-selected"),this.updatePlugin()},initGradientOverlays:function(){var t=this.settings;if(t.gradientOverlayVisible){var e=this.createGradientOverlay("left",t.gradientStartPoint,t.gradientEndPoint,t.gradientOverlayColor,t.gradientOverlaySize),t=this.createGradientOverlay("right",t.gradientStartPoint,t.gradientEndPoint,t.gradientOverlayColor,t.gradientOverlaySize);this.dom.carousel.append(e),this.dom.carousel.append(t)}},initContentWrapper:function(){var t=$('<div class="sc-content-wrapper"></div>');this.contentContainer=$('<div class="sc-content-container"></div>'),this.contentContainer.append('<div class="sc-content"><p></p><h2></h2></div>'),t.append(this.contentContainer),0!=$.support.leadingWhitespace&&this.settings.preload&&this.contentContainer.css({visibility:"hidden",opacity:0}),this.dom.carousel.append(t)},initNavigationButtons:function(){var t=this;if(this.settings.navigationButtonsVisible){var e=$('<a href="#" class="sc-nav-button sc-prev sc-no-select"></a>'),i=$('<a href="#" class="sc-nav-button sc-next sc-no-select"></a>');this.dom.carousel.append(e),this.dom.carousel.append(i),e.on("click",function(e){e.preventDefault(),t.selectPrevious(t.settings.slideSpeed)}),i.on("click",function(e){e.preventDefault(),t.selectNext(t.settings.slideSpeed)})}},initResizeListener:function(){var t=this;$(window).on("resize",function(e){t.updatePlugin(e)})},initKeyboardNavigation:function(){var t=this;s=this.settings,s.enableKeyboard&&this.dom.document.keydown(function(e){if("textarea"!=e.target.type&&"text"!=e.target.type)switch(e.keyCode){case 37:t.selectPrevious(s.slideSpeed);break;case 39:t.selectNext(s.slideSpeed)}})},initMouseWheelSupport:function(){var t=this,e=this.settings,i=this.dom.carousel.get(0);if(e.enableMouseWheel){var s=function(i){var s=0;i.preventDefault?i.preventDefault():(i.returnValue=!1,i.cancelBubble=!0),i.wheelDelta?s=i.wheelDelta/120:i.detail&&(s=-i.detail/3),e.reverseMouseWheel&&(s*=-1),s>0?t.selectPrevious(e.slideSpeed):0>s&&t.selectNext(e.slideSpeed)};i.addEventListener?(i.addEventListener("mousewheel",s,!1),i.addEventListener("DOMMouseScroll",s,!1)):i.attachEvent&&i.attachEvent("onmousewheel",s)}},initAutoSlideshow:function(){this.settings.autoSlideshow&&this.startAutoSlideshow()},startAutoSlideshow:function(){var t=this,e=this.settings;this.timer||(this.timer=new SKY.Timer(1e3*e.autoSlideshowDelay),this.timer.subscribe(function(i){t.selectedItem.index()<t.carouselItems.length-1?t.selectNext(e.slideSpeed):e.loop&&t.select(t.carouselItems[0],e.slideSpeed)})),this.timer.start()},stopAutoSlideshow:function(){this.timer&&this.timer.stop()},onClosestChanged:function(t){this.setCurrentContent(t),this.dom.carousel.trigger({type:"closestItemChanged.sc",item:t})},setCurrentContent:function(t){0<t.content.length?(this.contentContainer.find("h2").html(t.content.children("h2").html()),this.contentContainer.find("p").html(t.content.children("p").html())):(this.contentContainer.find("h2").empty(),this.contentContainer.find("p").empty())},getStartItem:function(){var t=this.settings.startIndex;return"auto"===t&&(t=Math.round(this.carouselItems.length/2)-1),this.carouselItems[t]},zSort:function(t){var e=this.carouselItems.length;t.sort(function(t,e){return t.distance-e.distance});for(var i=0;i<t.length;i++)t[i].setZIndex(e),--e;t[0]&&this.closestItem!==t[0]&&(this.closestItem=t[0],this.onClosestChanged(this.closestItem)),t=null},select:function(t,e){var i=this.settings;if("number"==typeof t)var s=this.carouselItems[t];else"object"==typeof t&&(s=t);this.selectedItem&&this.selectedItem.removeClass("sc-selected"),s.addClass("sc-selected"),this.selectedItem=s,i=this.selectedItem.getBaseOffset()+i.itemWidth/2+i.selectedItemDistance,this.container.setX(this.centerX-i,e),this.dom.carousel.trigger({type:"itemSelected.sc",item:this.selectedItem})},selectNext:function(t){var e=this.selectedItem.index();e==this.carouselItems.length-1&&(e=-1),this.select(e+1,t)},selectPrevious:function(t){var e=this.selectedItem.index();0==e&&(e=this.carouselItems.length),this.select(e-1,t)},calculateUnits:function(){var t=this.settings;this.alphaUnit=(1-t.unselectedItemAlpha)/t.motionStartDistance,this.scaleUnit=(t.selectedItemZoomFactor-t.unselectedItemZoomFactor)/t.motionStartDistance,this.extraDistanceUnit=t.selectedItemDistance/t.motionStartDistance},update:function(){for(var t=this,e=this.settings,i=this.container,s=i.getLeft(),n=[],o=0;o<this.carouselItems.length;o++){var r=this.carouselItems[o],a=s+r.x+e.itemWidth/2-this.centerX,c=Math.abs(a);if(c<=e.motionStartDistance)var h=this.calculateAlpha(c),l=this.calculateScale(c),u=this.calculateExtraDistance(c);else h=e.unselectedItemAlpha,l=e.unselectedItemZoomFactor,u=0;c<=this.centerX&&(r.setDistance(c),n.push(r)),r.setAlpha(h),r.setScale(l),a>0?r.setX(r.getBaseOffset()+2*e.selectedItemDistance-u):r.setX(r.getBaseOffset()+u),a=c=h=l=u=null}this.zSort(n),this.dragging&&i.setX(this.targetLeft),window.requestAnimFrame(function(){t.update()})},updatePlugin:function(){var t=this.dom.carousel.width(),e=this.dom.carousel.height();this.centerX=Math.floor(t/2),this.centerY=Math.floor(e/2),this.updateLayout()},updateLayout:function(){var t=this.settings,e=this.selectedItem.index();this.container.setTopMargin(t.topMargin);for(var i=0;i<this.carouselItems.length;i++){var s=this.carouselItems[i],n=0;s.updateBaseOffset(),i==e?n=t.selectedItemDistance:i>e&&(n=2*t.selectedItemDistance),s.setX(s.getBaseOffset()+n),s.setScale(t.unselectedItemZoomFactor)}this.selectedItem.setScale(t.selectedItemZoomFactor),this.container.setX(this.centerX-this.selectedItem.x-t.itemWidth/2)},updateCursor:function(){this.dragging?SKY.Utils.setCursor("closedhand"):this.mouseOver?SKY.Utils.setCursor("openhand"):SKY.Utils.setCursor("auto")},calculateAlpha:function(t){return(this.settings.motionStartDistance-t)*this.alphaUnit+this.settings.unselectedItemAlpha},calculateScale:function(t){return(this.settings.motionStartDistance-t)*this.scaleUnit+this.settings.unselectedItemZoomFactor},calculateExtraDistance:function(t){return Math.ceil((this.settings.motionStartDistance-t)*this.extraDistanceUnit)},onStart:function(t){function e(t){var e=t.originalEvent,i=SKY.Utils.hasTouchSupport()?e.touches[0].clientX:t.clientX,n=SKY.Utils.hasTouchSupport()?e.touches[0].clientY:t.clientY,o=(i-startX)/2+u;if(d=r-i,r=i,SKY.Utils.hasTouchSupport()){if(1<e.touches.length)return void(p=!0);if(m||(m=!0,Math.abs(n-a)>Math.abs(i-startX)+5?s.isScrolling=!0:s.isScrolling=!1),s.isScrolling)return void(p=!0)}t.preventDefault(),o>h+40&&(o=h+40+.2*(o-h)),l-40>o&&(o=l-40-.2*(l-o)),s.dragging||(s.dragging=!0,s.updateCursor()),s.targetLeft=o}function i(t){var o=t.originalEvent,r=SKY.Utils.hasTouchSupport()?o.changedTouches[0].clientX:t.clientX;t=SKY.Utils.hasTouchSupport()?o.changedTouches[0].clientY:t.clientY;var o=Math.round(d/20),a=s.closestItem.index();s.timer&&s.timer.start(),s.dom.document.off(s.events.moveEvent,e),s.dom.document.off(s.events.endEvent,i),s.events.touchCancel&&s.dom.document.off(s.events.touchCancel,i),0==Math.abs(startX-r)?(r=$(document.elementFromPoint(r,t)),r.hasClass("sc-image")?(r.parent().is("a")&&(r=r.parent()),r=s.carouselItems[r.parent().index()],n.selectByClick&&r!==s.selectedItem?s.select(r,n.slideSpeed):n.selectByClick&&r===s.selectedItem&&s.selectNext(n.slideSpeed)):n.selectByClick&&s.selectNext(n.slideSpeed)):(0==o&&0<Math.abs(d)&&s.closestItem.index()==s.selectedItem.index()&&(o=d>0?1:0>d?-1:0),a+=o,a=0>a?0:a>c-1?c-1:a,!f&&!p&&s.select(a,n.slideSpeed)),s.dragging=!1,s.updateCursor()}if("A"!=t.target.nodeName){var s=this,n=this.settings,o=t.originalEvent,r=startX=SKY.Utils.hasTouchSupport()?o.targetTouches[0].clientX:t.clientX,a=SKY.Utils.hasTouchSupport()?o.targetTouches[0].clientY:t.clientY,c=this.carouselItems.length,h=s.centerX-(n.selectedItemDistance+n.itemWidth/2),l=h-(n.itemWidth*n.unselectedItemZoomFactor+n.distance)*(c-1),u=this.container.getLeft(),d=0,m=!1,p=!1,f=!1;this.timer&&this.timer.stop(),this.dom.document.on(this.events.moveEvent,e),this.dom.document.on(this.events.endEvent,i),this.events.touchCancel&&this.dom.document.on(this.events.touchCancel,i),SKY.Utils.hasTouchSupport()?1<o.touches.length&&(p=!0):t.preventDefault()}},onAllLoaded:function(){var t=this,e=this.settings;if(0!=$.support.leadingWhitespace){var i=function(){t.dom.wrapper.css("visibility","visible"),t.dom.wrapper.animate({opacity:1},700),t.contentContainer.css("visibility","visible"),t.contentContainer.animate({opacity:1},700)};e.preload&&(e.showPreloader?this.preloader.fadeOut(700,i):i())}},on:function(t,e){this.dom.carousel.on(t,null,null,e)},onSelectionAnimationStart:function(){this.dom.carousel.trigger({type:"selectionAnimationStart.sc",item:this.selectedItem})},onSelectionAnimationEnd:function(){this.dom.carousel.trigger({type:"selectionAnimationEnd.sc",item:this.selectedItem})},createGradientOverlay:function(t,e,i,s,n){if(SKY.Utils.hasCanvasSupport()){var o=$('<canvas class="sc-overlay" width="'+n+'" height="1"></canvas'),r=o.get(0).getContext("2d");s=SKY.Utils.hexToRGB(s);var a=null;return o.css("width",n+"px"),o.addClass("sc-overlay-"+t),"left"==t?a=r.createLinearGradient(0,0,n,0):"right"==t&&(a=r.createLinearGradient(n,0,0,0)),a.addColorStop(e,"rgba("+s.r+", "+s.g+", "+s.b+", 1.0)"),a.addColorStop(i,"rgba("+s.r+", "+s.g+", "+s.b+", 0)"),r.fillStyle=a,r.fillRect(0,0,n,1),o}}},function(t){t.fn.carousel=function(e){var i=[];return this.each(function(){var s=t(this);s.data("sky-carousel")||s.data("sky-carousel",new SKY.Carousel(s,e)),i.push(s.data("sky-carousel"))}),1<i.length?i:i[0]}}(jQuery),window.Modernizr=function(t,e,i){function s(t,e){return typeof t===e}function n(t,e){for(var s in t){var n=t[s];if(!~(""+n).indexOf("-")&&u[n]!==i)return"pfx"==e?n:!0}return!1}function o(t,e,o){var r=t.charAt(0).toUpperCase()+t.slice(1),a=(t+" "+m.join(r+" ")+r).split(" ");if(s(e,"string")||s(e,"undefined"))e=n(a,e);else{a=(t+" "+p.join(r+" ")+r).split(" ");t:{t=a;for(var c in t)if(r=e[t[c]],r!==i){e=!1===o?t[c]:s(r,"function")?r.bind(o||e):r;break t}e=!1}}return e}var r,a,c={},h=e.documentElement,l=e.createElement("modernizr"),u=l.style,d=" -webkit- -moz- -o- -ms- ".split(" "),m=["Webkit","Moz","O","ms"],p=["webkit","moz","o","ms"],l={},f=[],g=f.slice,v=function(t,i,s,n){var o,r,a,c,l=e.createElement("div"),u=e.body,d=u||e.createElement("body");if(parseInt(s,10))for(;s--;)a=e.createElement("div"),a.id=n?n[s]:"modernizr"+(s+1),l.appendChild(a);return o=['&#173;<style id="smodernizr">',t,"</style>"].join(""),l.id="modernizr",(u?l:d).innerHTML+=o,d.appendChild(l),u||(d.style.background="",d.style.overflow="hidden",c=h.style.overflow,h.style.overflow="hidden",h.appendChild(d)),r=i(l,t),u?l.parentNode.removeChild(l):(d.parentNode.removeChild(d),h.style.overflow=c),!!r},S={}.hasOwnProperty;a=s(S,"undefined")||s(S.call,"undefined")?function(t,e){return e in t&&s(t.constructor.prototype[e],"undefined")}:function(t,e){return S.call(t,e)},Function.prototype.bind||(Function.prototype.bind=function(t){var e=this;if("function"!=typeof e)throw new TypeError;var i=g.call(arguments,1),s=function(){if(this instanceof s){var n=function(){};n.prototype=e.prototype;var n=new n,o=e.apply(n,i.concat(g.call(arguments)));return Object(o)===o?o:n}return e.apply(t,i.concat(g.call(arguments)))};return s}),l.canvas=function(){var t=e.createElement("canvas");return!!t.getContext&&!!t.getContext("2d")},l.canvastext=function(){return!!c.canvas&&!!s(e.createElement("canvas").getContext("2d").fillText,"function")},l.touch=function(){var i;return"ontouchstart"in t||t.DocumentTouch&&e instanceof DocumentTouch?i=!0:v(["@media (",d.join("touch-enabled),("),"modernizr){#modernizr{top:9px;position:absolute}}"].join(""),function(t){i=9===t.offsetTop}),i},l.cssanimations=function(){return o("animationName")},l.csstransforms=function(){return!!o("transform")},l.csstransforms3d=function(){var t=!!o("perspective");return t&&"webkitPerspective"in h.style&&v("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(e,i){t=9===e.offsetLeft&&3===e.offsetHeight}),t},l.csstransitions=function(){return o("transition")};for(var b in l)a(l,b)&&(r=b.toLowerCase(),c[r]=l[b](),f.push((c[r]?"":"no-")+r));return c.addTest=function(t,e){if("object"==typeof t)for(var s in t)a(t,s)&&c.addTest(s,t[s]);else{if(t=t.toLowerCase(),c[t]!==i)return c;e="function"==typeof e?e():e,h.className+=" "+(e?"":"no-")+t,c[t]=e}return c},u.cssText="",l=null,c._version="2.6.2",c._prefixes=d,c._domPrefixes=p,c._cssomPrefixes=m,c.testProp=function(t){return n([t])},c.testAllProps=o,c.testStyles=v,c.prefixed=function(t,e,i){return e?o(t,e,i):o(t,"pfx")},h.className=h.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(" js "+f.join(" ")),c}(this,this.document);