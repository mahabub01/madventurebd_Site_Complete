function getSelectedValue(e){return $("#"+e).find("dt a span.value").html()}function contactForm(){return $.ajax({type:"POST",url:"public/ajax/contact.php?submit",data:new FormData($("#contact-form")[0]),contentType:!1,cache:!1,processData:!1,success:function(e){var e=e.trim();swal("Your message has been sent"),$("#contact-form")[0].reset()}}),!1}$(function(){$.scrollUp({animation:"slide",scrollText:"Go TOP"})}),$(".our_clients").owlCarousel({items:5,itemsCustom:!1,itemsDesktop:[1199,4],itemsDesktopSmall:[980,3],itemsTablet:[768,3],itemsTabletSmall:!1,itemsMobile:[479,2],autoPlay:!0,slideSpeed:200,paginationSpeed:500,rewindSpeed:500}),$(function(){$(".sky-carousel").carousel({itemWidth:110,itemHeight:110,distance:20,selectedItemDistance:20,selectedItemZoomFactor:1.1,unselectedItemZoomFactor:.85,unselectedItemAlpha:.3,motionStartDistance:210,gradientStartPoint:.4,gradientOverlayColor:"#112d56",gradientOverlaySize:70,selectByClick:!0,autoSlideshow:!1,enableMouseWheel:!1})}),(new WOW).init(),$("#counter").bind("inview",function(e,t){t&&($(".timer").countTo(),$(this).unbind("inview"))}),jQuery(document).ready(function(e){e(".faq_question").smk_Accordion({closeAble:!0,slideSpeed:400}),e(".carousel-inner .item:first-child").addClass("active"),e(".overlay ul li a").addClass("page-scroll")});var slideHeight=$(window).height();$("#home-slider .item").css("height",slideHeight),$(window).resize(function(){$("#home-slider .item").css("height",slideHeight)}),$(".inactiveUntilOnLoad").removeClass("inactiveUntilOnLoad"),$("a.show_filter").click(function(){$(".filter").toggle()}),$(document).ready(function(){$("#portfoiol-list").bootFolio({bfLayout:"bflayhover",bfHover:"bfhover16",bfSpace:"nospace",bfAnimation:"scale",bfSpace:"space",bfAniDuration:1e3,bfCaptioncolor:"#072B4B",autoSlideshowDelay:20})}),$(".job_classification dt a").on("click",function(){$(".job_classification dd .project-type").slideToggle("fast"),$(".budget").hide()}),$(".job_classification dd ul li a").on("click",function(){$(".job_classification dd ul").hide()}),$('.mutliSelect input[type="checkbox"]').on("click",function(){var e=$(".mutliSelect input:checked").length>0,t=$(this).closest(".mutliSelect").find('input[type="checkbox"]').val(),t=$(this).val()+",";if($(this).is(":checked")){var o='<span title="'+t+'">'+t+"</span>";$(".multiSel").append(o),$(".hida").hide()}else{$('span[title="'+t+'"]').remove();var a=$(".hida");$(".job_classification dt a").append(a),e||$(".hida").first().show()}}),$("a#project-close").click(function(){$(".job_classification dd ul").slideToggle("fast")}),$(".budget input").on("change",function(){$("#price").html($('input[name="budget"]:checked',".budget .wpcf7-list-item").val())}),$(".project-budget").on("click",function(){$(".budget").slideToggle("fast"),$("a#price-close").toggle()}),$(".price-dropdown span.wpcf7-list-item label").on("click",function(){$(".budget").slideUp("fast")}),$("a#price-close").click(function(){$(".budget").slideToggle("fast"),$("a#price-close").toggle()}),$(document).ready(function(){$('#project-type input[type="checkbox"]').click(function(){var e=$("#project-type input:checked").length>0;e?$("#check-value").attr("value","number"):e||$("#check-value").attr("value","")}),$("#not-spammer").click(function(){var e=$("#not-spammer:checked").length>0;e?$("#check-spammer-value").attr("value","yes"):e||$("#check-spammer-value").attr("value","")})}),$(document).ready(function(){$("ul.filter li a").click(function(){$("ul.filter li a").removeClass("active"),$(this).addClass("active")})}),$("#contact-form").validate({rules:{email:{required:!0},name:{required:!0},website:{required:!0},company:{required:!0},description:{required:!0},"check-value":{required:!0},"check-spammer-value":{required:!0}},submitHandler:contactForm}),$("#methodology-1").attr("data-wow-delay","300ms");var arrow1='<div class="methodology-arrow hidden-xs"><img src="public/images/arrow-right.png" alt="Strategy" class="margin wow zoomIn img-responsive" data-wow-duration="1000ms" data-wow-delay="600ms" /></div>';$("#methodology-1").after(arrow1).show(),$("#methodology-2").attr("data-wow-delay","900ms");var arrow2='<div class="methodology-arrow hidden-xs"><img src="public/images/arrow-right.png" alt="Daily Internal Builds" class="margin wow zoomIn img-responsive" data-wow-duration="1000ms" data-wow-delay="1200ms" /></div>';$("#methodology-2").after(arrow2).show(),$("#methodology-3").attr("data-wow-delay","1500ms"),$("#for-pc #methodology-4").attr("data-wow-delay","2100ms");var arrow3='<div class="methodology-arrow hidden-xs pull-right"><img src="public/images/arrow-left.png" alt="Left Dirrection" class="margin wow zoomIn img-responsive" data-wow-duration="1000ms" data-wow-delay="2400ms" /></div>';$("#for-pc #methodology-4").after(arrow3).show(),$("#for-pc #methodology-5").attr("data-wow-delay","2700ms");var arrow4='<div class="methodology-arrow hidden-xs pull-right"><img src="public/images/arrow-left.png" alt="Monthly Deliverable" class="margin wow zoomIn img-responsive" data-wow-duration="1000ms" data-wow-delay="3000ms" /></div>';$("#for-pc #methodology-5").after(arrow4).show(),$("#for-pc #methodology-6").attr("data-wow-delay","3300ms"),$("#for-mobile #methodology-4").attr("data-wow-delay","600ms"),$("#for-mobile #methodology-5").attr("data-wow-delay","900ms"),$("#for-mobile #methodology-6").attr("data-wow-delay","1200ms");