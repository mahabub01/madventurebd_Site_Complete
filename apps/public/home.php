 


<script type="text/javascript">
$(document).ready(function(){

$(window).scroll(function(){
var Top = $(window).scrollTop();
if(Top > 50)
{
  $('#hedddd').addClass("stcky");
}
else
{
  $('#hedddd').removeClass("stcky");
}

});


});
</script>



<header id="hedddd">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-4 col-xs-5">
<img src="apps/images/c63e25ac6765734c3a307c98ba456b17.png" class="logo" alt="">
</div>

<div class="col-md-4 col-sm-6 col-xs-7 col-sm-offset-2 col-md-offset-4">
  <p><a href=""><span class="company">Company Profile</span> <span class="header-icon"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span>
</a> | <a href="javascript:void(0)" onclick="showMenu()">MENU<span class="header-icon"><i class="fa fa-bars" aria-hidden="true"></i></a></span>
 </p>

</div>
</div>
</div>
</header>









<script type="text/javascript">
    function heidemenu() {
       var m = document.getElementById("mmenus");
       m.style.top = "-1000px";
    }

    function showMenu() {
       var m = document.getElementById("mmenus");
       m.style.top = "0px";
    }

</script>




<div class="header-main-menu" id="mmenus">
<span class="main-menu-cross-icon"><a href="javascript:void(0)" onclick="heidemenu()"><i class="fa fa-times" aria-hidden="true"></i></a>
</span>


<div class="container" style="margin-top: 100px">
   <div class="row">
   <div class="col-md-6 col-md-offset-3">
   <h3><a href="home#portfolio" onclick="heidemenu()">PORTFOLIO</a></h3>
   <h3><a href="home#team" onclick="heidemenu()">TEAM</a></h3>
   <h3><a href="home#client" onclick="heidemenu()">CLIENTS</a></h3>
   <h3><a href="home#testmonial" onclick="heidemenu()">TESTIMONIAL</a></h3>
   <h3><a href="#methodology" onclick="heidemenu()">METHODOLOGY</a></h3>
   <h3><a href="#faq" onclick="heidemenu()">FAQ</a></h3>
   <h3><a href="#contact" onclick="heidemenu()">CONTACT</a></h3>
   <h3><a href="<?php appsConfig::URL('/blog')?>" onclick="heidemenu()">BLOG</a></h3>
   <h3><a href="#app" onclick="heidemenu()">APP MARKET</a></h3>
   </div>
   </div> 
</div>

</div>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>



<!--start slider-->
<div class="slider">
  <div id="wowslider-container1">
  <div class="ws_images"><ul>
    <li><img src="apps/data1/images/ec04271d6191b9fb2947909a3a994741.jpg" alt="ec04271d6191b9fb2947909a3a994741" title="<span style='color:white;margin:0px;padding:0px;'>App Development</span>" id="wows1_0"/></li>
    <li><img src="apps/data1/images/69f3bc3c1f2797a0bab6e3d584fc7b9a.jpg" alt="69f3bc3c1f2797a0bab6e3d584fc7b9a" title="<span style='color:white;margin:0px;padding:0px;'>iOS App Development</span>" id="wows1_1"/></li>
    <li><a href=""><img src="apps/data1/images/200cca7213aadc4901305a24eb5273cb.jpg" alt="jquery slider" title="<span style='color:#35CBA1;margin:0px;padding:0px;'>UI/UX Development</span>" id="wows1_2"/></a></li>
    <li><img src="apps/data1/images/de060025c2085a8864efb786f8703d42.jpg" alt="de060025c2085a8864efb786f8703d42" title="<span style='color:#FAA429;margin:0px;padding:0px;'>Product Development</span>" id="wows1_3"/></li>
  </ul></div>
  </div>
  <div class="slider-bottom">
</div>
  </div>  
<!--end slider-->








<!--start overview section-->
<div class="overview-section">
<div class="container">
<h1 style="padding: 30px;">Overview</h1>
<div class="row">

<!--start overview box-->
<div class="col-md-4">
<div class="overviewbox">
<br/>
<span class="icon"><i class="fa fa-info-circle" aria-hidden="true"></i>
</span>
<h2>BASIC INFO</h2>
<p>BASIS Membership ID : G682</p>
<p>Trade License No: 02048475</p>

<p>TIN : 442670895657</p>

</div>
</div>
<!--end overview box-->

<!--start overview box-->
<div class="col-md-4">
<div class="overviewbox">
<br/>
<span class="icon"><i class="fa fa-book" aria-hidden="true"></i>
</span>
<h2>INFRASTRUCTURE</h2>
<p>Total number of HR (Full-time) : 12</p>

<p>Total number of HR (Part-time) : 4</p>

<p>Internet connectivity : Broadband</p>

<p>Bandwidth : 8Mbps</p>

<p>Office Space : 2080 sqft</p>

</div>
</div>
<!--end overview box-->


<!--start overview box-->
<div class="col-md-4">
<div class="overviewbox">
<br/>
<span class="icon"><i class="fa fa-cog" aria-hidden="true"></i>
</span>
<h2>SKILL</h2>
<p>Wearable App</p>

<p>Website Design & Development</p>

<p>UI/UX Design</p>

</div>
</div>
<!--end overview box-->

</div>
</div>
</div>
<!--end overview section-->









<!--start overview section-->
<div class="image-heading" id="portfolio">
<div class="row">
<!--start img box-->
<div class="col-md-4 col-sm-4" style="padding: 0px;">
<div class="image-some">
<img src="apps/images/cf02b9b0b54a86fcfa60a50e0b38d0cc.jpg" alt="">
<div class="image-over-text">
<h2 style="font-size: 50px;font-weight: bolder;">HungryNaki! Android App</h2>
</div>
</div>
</div>
<!--end img box-->

<!--start img box-->
<div class="col-md-4 col-sm-4" style="padding: 0px;">
<div class="image-some">
<img src="apps/images/0b711afcf907816b895b0a17a3ab7bdf.png" alt="">
<div class="image-over-text">
<h2 style="font-size: 50px;font-weight: bolder;">Event App Concept</h2>
</div>
</div>
</div>
<!--end img box-->



<!--start img box-->
<div class="col-md-4 col-sm-4" style="padding: 0px;">
<div class="image-some">
<img src="apps/images/19aedb0506c02b145ea6f48cd0953216.png" alt="">
<div class="image-over-text">
<h2 style="font-size: 50px;font-weight: bolder;">Rokomari Mobile App</h2>
</div>
</div>
</div>
<!--end img box-->

<!--start img box-->
<div class="col-md-4 col-sm-4" style="padding: 0px;">
<div class="image-some">
<img src="apps/images/451c1a8aeca338156b39b49298038b35.png" alt="">
<div class="image-over-text">
<h2 style="font-size: 50px;font-weight: bolder;">Foodviser - Food Delivery Product</h2>
</div>
</div>
</div>
<!--end img box-->


<!--start img box-->
<div class="col-md-4 col-sm-4" style="padding: 0px;">
<div class="image-some">
<img src="apps/images/511a2ebb1ad638794229edf5b01698b2.jpg" alt="">
<div class="image-over-text">
<h2 style="font-size: 50px;font-weight: bolder;">Gloria Jean's Coffee Home Concept</h2>
</div>
</div>
</div>
<!--end img box-->


<!--start img box-->
<div class="col-md-4 col-sm-4" style="padding: 0px;">
<div class="image-some">
<img src="apps/images/853c3aabe1434529e6ca231f0c8ba538.png" alt="">
<div class="image-over-text">
<h2 style="font-size: 50px;font-weight: bolder;">Amra Dhaka Dashboard Design</h2>
</div>
</div>
</div>
<!--end img box-->



<!--start img box-->
<div class="col-md-4 col-sm-4" style="padding: 0px;">
<div class="image-some">
<img src="apps/images/1118a4cad3b8ff1b5edc04348c2d4c7a.png" alt="">
<div class="image-over-text">
<h2 style="font-size: 50px;font-weight: bolder;">Nogor Mobile App Redesign</h2>
</div>
</div>
</div>
<!--end img box-->


<!--start img box-->
<div class="col-md-4 col-sm-4" style="padding: 0px;">
<div class="image-some">
<img src="apps/images/29183decbbefd1e25bb727b4b65e2895.png" alt="">
<div class="image-over-text">
<h2 style="font-size: 50px;font-weight: bolder;">Statistics Concept</h2>
</div>
</div>
</div>
<!--end img box-->


<!--start img box-->
<div class="col-md-4 col-sm-4" style="padding: 0px;">
<div class="image-some">
<img src="apps/images/31272d22bbe5d7bd30c03e4e28d6ed26.png" alt="">
<div class="image-over-text">
<h2 style="font-size: 50px;font-weight: bolder;">Rokomari onboard concept</h2>
</div>
</div>
</div>
<!--end img box-->


<!--start img box-->
<div class="col-md-4 col-sm-4" style="padding: 0px;">
<div class="image-some">
<img src="apps/images/aa37751f509766ca220246c42be5f349.png" alt="">
<div class="image-over-text">
<h2 style="font-size: 50px;font-weight: bolder;">Monasa Learning Centre</h2>
</div>
</div>
</div>
<!--end img box-->







<!--start img box-->
<div class="col-md-4 col-sm-4" style="padding: 0px;">
<div class="image-some">
<img src="apps/images/ad6c4f77513f55c67a0c02e3720c93b2.png" alt="">
<div class="image-over-text">
<h2 style="font-size: 50px;font-weight: bolder;">Doctor Appointment Mobile App Concept</h2>
</div>
</div>
</div>
<!--end img box-->


<!--start img box-->
<div class="col-md-4 col-sm-4" style="padding: 0px;">
<div class="image-some">
<img src="apps/images/b0f2cabc3ce3365603f562b0d6513f3f.jpg" alt="">
<div class="image-over-text">
<h2 style="font-size: 50px;font-weight: bolder;">Kandy Lockscreen Animation</h2>
</div>
</div>
</div>
<!--end img box-->


<!--start img box-->
<div class="col-md-4 col-sm-4" style="padding: 0px;">
<div class="image-some">
<img src="apps/images/b03171927be989a3962b2c4e3872fa2d.png" alt="">
<div class="image-over-text">
<h2 style="font-size: 50px;font-weight: bolder;">Foodviser Behance Presentation</h2>
</div>
</div>
</div>
<!--end img box-->


<!--start img box-->
<div class="col-md-4 col-sm-4" style="padding: 0px;">
<div class="image-some">
<img src="apps/images/c4aec28794c657d27f7604b51a8f3aeb.gif" alt="">
<div class="image-over-text">
<h2 style="font-size: 50px;font-weight: bolder;">Audacity - Admin Panel</h2>
</div>
</div>
</div>
<!--end img box-->


<!--start img box-->
<div class="col-md-4 col-sm-4" style="padding: 0px;">
<div class="image-some">
<img src="apps/images/e078877333cd3c2d67900bb43892aafa.png" alt="">
<div class="image-over-text">
<h2 style="font-size: 50px;font-weight: bolder;">Ridemate onboarding concept</h2>
</div>
</div>
</div>
<!--end img box-->





</div>
</div>
<!--start overview section-->






<!--start team section-->
<div class="team-section" id="team">
  <div class="container">
<h1 style="padding: 50px;">Team</h1>
    <div class="row">


    <!--start team box-->
    <div class="col-md-3 col-sm-4">
    <div class="team-box">
    <div style="height: 250px;border:1px solid white">
    <div class="img-circle">
      <img src="apps/images/6bb1645926d8ac4bb32aa06a2db60594.jpg">
    </div> 
    </div>   
    <figcaption>Siddiq</figcaption>
    <p>Founder & CEO</p>
    </div>
    </div>
    <!--end team box-->


    <!--start team box-->
    <div class="col-md-3 col-sm-4">
    <div class="team-box">
    <div style="height: 250px;border:1px solid white">
    <div class="img-circle">
      <img src="apps/images/b8bee0c9f586a60f78f2e453e4a83cd1.jpg">
    </div> 
    </div>   
    <figcaption>Suraiya</figcaption>
    <p>Founder & COO</p>
    </div>
    </div>
    <!--end team box-->



    <!--start team box-->
    <div class="col-md-3 col-sm-4">
    <div class="team-box">
    <div style="height: 250px;border:1px solid white">
    <div class="img-circle">
      <img src="apps/images/92aeff808a6e9fc6f8a613ca53803537.jpg">
    </div> 
    </div>   
    <figcaption>Tuhin</figcaption>
    <p>UI/UX Engineer</p>
    </div>
    </div>
    <!--end team box-->


      <!--start team box-->
    <div class="col-md-3 col-sm-4">
    <div class="team-box">
    <div style="height: 250px;border:1px solid white">
    <div class="img-circle">
      <img src="apps/images/8ec3b70d6608f4de8b4f6024e99b855e.jpg">
    </div> 
    </div>   
    <figcaption>Kanchon</figcaption>
    <p>UI/UX Engineer</p>
    </div>
    </div>
    <!--end team box-->


    <!--start team box-->
    <div class="col-md-3 col-sm-4">
    <div class="team-box">
    <div style="height: 250px;border:1px solid white">
    <div class="img-circle">
      <img src="apps/images/f094642319d82b44bc0651345807e1a8.jpg">
    </div> 
    </div>   
    <figcaption>Hasan</figcaption>
    <p>Android Engineer</p>
    </div>
    </div>
    <!--end team box-->


    <!--start team box-->
    <div class="col-md-3 col-sm-4">
    <div class="team-box">
    <div style="height: 250px;border:1px solid white">
    <div class="img-circle">
      <img src="apps/images/bb8986ee57b813d81bd0c66ee2c79bcb.jpg">
    </div> 
    </div>   
    <figcaption>Tamim</figcaption>
    <p>Android Engineer</p>
    </div>
    </div>
    <!--end team box-->


    <!--start team box-->
    <div class="col-md-3 col-sm-4">
    <div class="team-box">
    <div style="height: 250px;border:1px solid white">
    <div class="img-circle">
      <img src="apps/images/1dbfc1d010d5ea3adb5d482fb3fb4214.jpg">
    </div> 
    </div>   
    <figcaption>Fatima Mostafa</figcaption>
    <p>Android Engineer</p>
    </div>
    </div>
    <!--end team box-->


     <!--start team box-->
    <div class="col-md-3 col-sm-4">
    <div class="team-box">
    <div style="height: 250px;border:1px solid white">
    <div class="img-circle">
      <img src="apps/images/b4ea91079fc3ce5258522ec3dabcaa79.jpg">
    </div> 
    </div>   
    <figcaption>Sumon</figcaption>
    <p>Web Engineer</p>
    </div>
    </div>
    <!--end team box-->




     <!--start team box-->
    <div class="col-md-3 col-sm-4">
    <div class="team-box">
    <div style="height: 250px;border:1px solid white">
    <div class="img-circle">
      <img src="apps/images/19dbfde6faaf9b8b907c6d6af9a0d669.jpg">
    </div> 
    </div>   
    <figcaption>Mamun</figcaption>
    <p>Web Engineer</p>
    </div>
    </div>
    <!--end team box-->



    <!--start team box-->
    <div class="col-md-3 col-sm-4">
    <div class="team-box">
    <div style="height: 250px;border:1px solid white">
    <div class="img-circle">
      <img src="apps/images/b18a70e3ef92db553920de406dd70184.jpg">
    </div> 
    </div>   
    <figcaption>Shamima</figcaption>
    <p>QA Intern</p>
    </div>
    </div>
    <!--end team box-->


    <!--start team box-->
    <div class="col-md-3 col-sm-4">
    <div class="team-box">
    <div style="height: 250px;border:1px solid white">
    <div class="img-circle">
      <img src="apps/images/ecae6def56a281ac82acd92b22a5b80a.jpg">
    </div> 
    </div>   
    <figcaption>Shaun</figcaption>
    <p>UI/UX Consultant</p>
    </div>
    </div>
    <!--end team box-->


     <!--start team box-->
    <div class="col-md-3 col-sm-4">
    <div class="team-box">
    <div style="height: 250px;border:1px solid white">
    <div class="img-circle">
      <img src="apps/images/d17642a82d68a1403548d5aa974ffc1d.jpg">
    </div> 
    </div>   
    <figcaption>Namira</figcaption>
    <p>Content Writer</p>
    </div>
    </div>
    <!--end team box-->






    </div>
  </div>
</div>
<!--end team section-->







<!--start google play section-->
<div class="googleplay-seciton">
<div class="row">
<div class="container">
  <div class="col-md-6">
  <h2>Check Audacity Company <a href="">Official</a>
Mobile Apps Now!</h2>
  </div>
  <div class="col-md-6">
  <img src="apps/images/play-store.png">
  <img src="apps/images/apple-store.png">
  </div>
</div>
</div>
</div>

<!--end google play section-->



<!--start FAQ section-->
<div class="client-seciton" id="client">
<div class="container">
<h1 style="padding: 50px;">client</h1>
<div class="row">
<div class="col-md-12">
<div id="thumbnail-slider">
                <div class="inner">
                    <ul>

                        <li>
                            <a class="thumb" href="apps/img/1.png"></a>
                        </li>
                        <li>
                            <a class="thumb" href="apps/img/2.png"></a>
                        </li>
                        <li>
                            <a class="thumb" href="apps/img/3.png"></a>
                        </li>
                        <li>
                            <a class="thumb" href="apps/img/4.png"></a>
                        </li>
                        <li>
                            <a class="thumb" href="apps/img/5.png"></a>
                        </li>
                        <li>
                            <a class="thumb" href="apps/img/6.png"></a>
                        </li>
                        <li>
                            <a class="thumb" href="apps/img/7.png"></a>
                        </li>
                        <li>
                            <a class="thumb" href="apps/img/1.png"></a>
                        </li>
                        <li>
                            <a class="thumb" href="apps/img/2.png"></a>
                        </li>
                        <li>
                            <a class="thumb" href="apps/img/3.png"></a>
                        </li>
                        <li>
                            <a class="thumb" href="apps/img/4.png"></a>
                        </li>
                        <li>
                            <a class="thumb" href="apps/img/5.png"></a>
                        </li>
                        <li>
                            <a class="thumb" href="apps/img/6.png"></a>
                        </li>
                        <li>
                            <a class="thumb" href="apps/img/7.png"></a>
                        </li>

                    </ul>
                </div>
            </div>

  </div>
  </div>
</div>
</div>

<!--end FAQ section-->










<!--start testmonial section-->


<!--
<div class="testmonial-seciton">
<div class="container">
<div class="row">
  <div class="col-md-12">
    




  </div>
  </div>
</div>
</div>-->

<!--end testmonial section-->

<script type="text/javascript">

$(document).ready(function(){


  function mbox1(){
    mbox = document.getElementById("mbox1");
    mbox.style.opacity = "1"

  }

  function mbox2(){
    mbox = document.getElementById("mbox2");
    mbox.style.opacity = "1"

  }

  function mbox3(){
    mbox = document.getElementById("mbox3");
    mbox.style.opacity = "1"

  }

  function mbox4(){
    mbox = document.getElementById("mbox4");
    mbox.style.opacity = "1"

  }

    function mbox5(){
    mbox = document.getElementById("mbox5");
    mbox.style.opacity = "1"

  }

    function mbox6(){
    mbox = document.getElementById("mbox6");
    mbox.style.opacity = "1"

  }

    function mbox7(){
    mbox = document.getElementById("mbox7");
    mbox.style.opacity = "1"

  }

    function mbox8(){
    mbox = document.getElementById("mbox8");
    mbox.style.opacity = "1"

  }

    function mbox9(){
    mbox = document.getElementById("mbox9");
    mbox.style.opacity = "1"

  }

    function mbox10(){
    mbox = document.getElementById("mbox10");
    mbox.style.opacity = "1"

  }

      function mbox11(){
    mbox = document.getElementById("mbox11");
    mbox.style.opacity = "1"

  }









$(window).scroll(function(){
var Top = $(window).scrollTop();
if(Top > 4700)
{
  mbox1();
  mbox2();
  mbox3();
  mbox4();
  mbox5();
}

if(Top > 4800){
    mbox6();
}


if(Top > 4900){
  mbox7();
  mbox8();
  mbox9();
  mbox10();
  mbox11();


}

});


});








</script>


<!--start methodology section-->
<div class="methodology-seciton" id="methodology">
<div class="container">
<h1 style="padding: 50px;">Methodology</h1>
<div class="row">

<div class="col-md-3 col-sm-3">  
<div class="methodology-box" id="mbox1">
<div class="methodology-circle">
  <img src="apps/images/df3ec713b15d76505b456e91b2ad84fd.png">
</div>
<h2>STRATEGY & ARCHITECTURE</h2>
<p>We develop a one-page business model that captures your vision and goals, and we use it to create a minimum viable product (MVP) that we can immediately start building upon.</p>
</div>
</div>

<div class="col-md-1 col-sm-1" style="padding: 0px;">  
<img src="apps/images/arrow-right.png" class="arraow-methodology" id="mbox2">
</div> 


<div class="col-md-3 col-sm-3" id="mbox3">  
<div class="methodology-box">
<div class="methodology-circle">
    <img src="apps/images/4938f6eb5ae4335357e4531b1f4d4da7.png">
</div>
<h2>DAILY INTERNAL BUILDS</h2>
<p>Your project manager meets with the team every day to ensure everyone is meeting goals and getting the support they need.</p>
</div>
</div>

<div class="col-md-1 col-sm-1" style="padding: 0px;" > 
<img src="apps/images/arrow-right.png" class="arraow-methodology" id="mbox4">
</div> 

<div class="col-md-3 col-sm-3" id="mbox5">  
<div class="methodology-box">
<div class="methodology-circle">
  <img src="apps/images/8065c762f8d1ef79d3a73cd95a0f360f.png">
</div>
<h2>WEEKLY DELIVERABLES</h2>
<p>The product is in your hands every week. You’ll be able to use it, provide feedback, and discuss challenges with the team.</p>
</div>
</div>

</div>







<div class="row">
<div class="col-md-1 col-md-offset-9">

<img src="apps/images/arrow-down.png" style="margin-left: 20px;margin-top: 30px;margin-bottom: 30px;" id="mbox6">
</div>
</div>


<div class="row">
<div class="col-md-3 col-sm-3" id="mbox11">  
<div class="methodology-box">
<div class="methodology-circle">
  <img src="apps/images/6b4266c6e22e9d83aab59161692b3170.png">
</div>
<h2>GET WORK DONE</h2>
<p>As Audacity IT Solutions Limited follow five important methodology, you will not only get your work done on time but also you will save your energy and money.</p>
</div>
</div>

<div class="col-md-1 col-sm-1" style="padding: 0px;"> 
<img src="apps/images/arrow-left.png" class="arraow-methodology" id="mbox10">
</div>

<div class="col-md-3 col-sm-3" id="mbox9">  
<div class="methodology-box">
<div class="methodology-circle">
<img src="apps/images/59ed115fc0beff11ec3efb06602303cc.png">
  
</div>
<h2>DEDICATED PROJECT MANAGER</h2>
<p>A dedicated project manager will be responsible for your project who can speak English fluently and have complete technical understanding.</p>
</div>
</div>

<div class="col-md-1 col-sm-1" style="padding: 0px;"> 
<img src="apps/images/arrow-left.png" class="arraow-methodology" id="mbox8">
</div>

<div class="col-md-3 col-sm-3" id="mbox7">  
<div class="methodology-box">
<div class="methodology-circle">
  <img src="apps/images/db31a73652608db9c51f97f1b99fa415.png">
</div>
<h2>MONTHLY DELIVERABLES</h2>
<p>We keep one eye on the prize, continually working to meet milestones so we can launch the final product on time.</p>
</div>
</div>
</div>




</div>
</div>

<!--end methodology section-->



<!--start counter section-->
<div class="counter-seciton">
<div class="container">
<div class="row">
  <div class="col-md-3 col-md-offset-1">
  <div class="count-box">
  <img src="apps/images/developing.png">
  <p></p>
  <h2>5+</h2>
  <h3>Developing</h3>
</div>
  </div>

   <div class="col-md-3 col-md-offset-1">
   <div class="count-box">
  <img src="apps/images/queue.png">
    <p></p>
  <h2>10+</h2>
  <h3>In Queue</h3>
  </div>
  </div>

   <div class="col-md-3 col-md-offset-1" >
   <div class="count-box">
  <img src="apps/images/done.png">
    <p></p>
  <h2>50+</h2>
  <h3>Completed</h3>
  </div>
  </div>
  </div>
</div>
</div>

<!--end counter section-->






<!--start FAQ section-->
<div class="faq-seciton" id="faq">
<div class="container">
<h1 style="padding: 50px;">FAQ</h1>
<div class="row">
  <div class="col-md-6">

  <!--start faq-->
  <details>
    <summary>What's Audacity IT Solutions Ltd?</summary>
    <div>
      <p>"Audacity IT Solutions Limited" is a 12 people software development company in Bangladesh, providing enterprise & customized web applications and mobile software development services to both local and international clients. </p>

      <p>We got experience and interest of working for local public and private firms along with small and medium sized clients located in US, Japan, Canada, UK and other European countries.  </p>

      <p>We are focused on creating long-term strategic partnership with Global IT firms whether it’s a large corporation like British Telecom or startups with a tight budget, and help them build and maintain a highly qualitative, timely delivered, and cost-effective offshore software development team. </p>
    </div>
    
  </details>
<!--end faq-->



  <!--start faq-->
  <details>
    <summary>Why I will work with Audacity IT Solutions Ltd?</summary>
    <div>
      <p>Corporate IT firm professional but expensive: You can get a great quality project from a corporate IT firm, but you'll have to sell an arm and a leg to afford it!  </p>

      <p>Freelancer cheaper but buggy. You can get an affordable solution from a freelancer, but it probably won't be as well-made, bug-free and professional.Audacity IT Solutions affordable & professional: You can have it all with “Audacity IT Solutions Limited” affordable, great quality web, mobile & wearable solutions!</p>

    </div>
    
  </details>
<!--end faq-->



  <!--start faq-->
  <details>
    <summary>What I will save working with Audacity IT Solutions Ltd?</summary>
    <div>
      <p>Money, Time & Energy.</p>

     
    </div>
    
  </details>
<!--end faq-->



  <!--start faq-->
  <details>
    <summary>How can I be confident of the quality and reliability?</summary>
    <div>
      <p>At "Audacity IT Solutions Limited" quality is a main priority. We do everything to ensure our customers' satisfaction. We get into your head and develop a deep understanding of your needs, wants and expectations. The result is an exceptional product.</p>

    </div>
    
  </details>
<!--end faq-->


  <!--start faq-->
  <details>
    <summary>How do you deal with urgent bug fixing?</summary>
    <div>
      <p>We do our best to avoid programming errors in products delivered to our customers. However, everybody familiar with software development practice knows that from time to time bugs appear even in the highest quality products. We try to fix bugs as soon as possible.</p>

    </div>
    
  </details>
<!--end faq-->


  <!--start faq-->
  <details>
    <summary>Do we completely own the source code of project?</summary>
    <div>
      <p>You completely own source code after we receive 100% payment & open-source code used will remain with the respective owners.</p>

    </div>
    
  </details>
<!--end faq-->


  <!--start faq-->
  <details>
    <summary>How often does company communicate with clients?</summary>
    <div>
      <p>After signing an agreement, we will provide you one project manager who will be available 24 hours a day, 7 days a week.</p>

    </div>
    
  </details>
<!--end faq-->



  </div>

  <div class="col-md-6">
  <!--start faq-->
  <details>
    <summary>Do you do software testing, verifications and QA services?</summary>
    <div>
      <p>Yes, we do a huge amount of software testing: QA, system testing, functionality & feature testing, integration testing,regression testing, web software testing, compatibility testing on various platforms, load and performance testing,test case preparations, execution of test cases, reporting, etc.</p>

    </div>
    
  </details>
<!--end faq-->


  <!--start faq-->
  <details>
    <summary>What time zone is "Audacity IT Solutions Limited" in?</summary>
    <div>
      <p>We are located in +6 GMT time zone. The exact time of contact is certainly whatever suits you best, but it is best to make a time at which you can meet daily. A planned daily meeting makes the development process go much more smoothly.</p>

    </div>
    
  </details>
<!--end faq-->


  <!--start faq-->
  <details>
    <summary>How many days in a week do you work?</summary>
    <div>
      <p>We work 5 days a week. For urgent or emergency situations, a client associate is available to communicate 7 days a week.</p>

    </div>
    
  </details>
<!--end faq-->


  <!--start faq-->
  <details>
    <summary>What are your payment models?</summary>
    <div>
      <p>We have two payment models i.e Fixed Cost and Hourly Cost.</p>
      <p>For Fixed Cost, your estimate will be a fixed price that varies with the client requirements. </p>
      <p>For Hourly Cost, a dedicated developer will work on your project, which may cut down the cost of development.</p>
    </div>
    
  </details>
<!--end faq-->

  <!--start faq-->
  <details>
    <summary>What are your payment terms?</summary>
    <div>
      <p>For Fixed Rate Projects: </p>
      <p>On Project Approval: 50%  </p>
      <p>After 50% project completion: 25%  </p>
      <p>After 100% work delivered: 25%  </p>
      <p>For Hourly Rate Project: We charge up front for weekly hours depending on how many hours the dedicated developer would work with your project. </p>

    </div>
    
  </details>
<!--end faq-->


  <!--start faq-->
  <details>
    <summary>How do you assure confidentiality?</summary>
    <div>
      <p>To keep your data and information highly confidential, we sign Non-Disclosure Agreements between the two parties i.e Company & Client, before you disclose any information to us. Data & information will be shared with our employees & contractors only, who are in-line with our legal framework and company policy</p>

    </div>
    
  </details>
<!--end faq-->


  <!--start faq-->
  <details>
    <summary>What if my question is not answered on this FAQ?</summary>
    <div>
      <p>Mail us at founders@audacityit.com</p>

    </div>
    
  </details>
<!--end faq-->


  </div>



  </div>
</div>
</div>

<!--end FAQ section-->






<!--start getstarted section-->
<div class="getstart-seciton">
<div class="container">
<h1>get started</h1>
<div class="row">
<form>
  <div class="col-md-6">
  <h3>Personal Information</h3>
  <input type="text" name="" placeholder="Your Name"><br/><br/>
  <input type="text" name="" placeholder="Your Mail"><br/><br/>
  <input type="text" name="" placeholder="Website"><br/><br/>

  </div>

  <div class="col-md-6">
  <h3>About your project</h3>
  <input type="text" name="" placeholder="Company Name"><br/><br/>
  <input type="text" name="" placeholder="What Can We Do For You?"><br/><br/>
  <input type="text" name="" placeholder="Estimated Budget"><br/><br/>
  <textarea style="border-left:1px solid white;border-right:1px solid white;border-top:1px solid white;">
    
  </textarea>

  <button type="submit">SEND</button>

  </div>
</form>


  </div>
</div>
</div>

<!--end getstarted section-->















<!--start contact section-->
<div class="contact-seciton" id="contact">
<div class="row" style="background-color: #2DA8EE;padding: 0px;">
  <div class="col-md-6" style="padding: 0px;">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d228.12954993626977!2d90.4207569!3d23.8160102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c6521f0b400d%3A0x6a65322d1f5f6e70!2sCloudSystems!5e0!3m2!1sen!2sbd!4v1483525333295" width="100%" height="520" frameborder="0" style="border:0" allowfullscreen></iframe>

  </div>
  <div class="col-md-6">
  <div class="contact-seciton-right">
  <h1>Contact</h1>
  <br/><br/>
  <p><span class="contact-icon"><i class="fa fa-phone" aria-hidden="true"></i>
</span>8801670923581</p>


  <p><span class="contact-icon"><i class="fa fa-envelope" aria-hidden="true"></i>

</span>founders@audacityit.com</p>

  <p><span class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>

</span>House: 20, Road No-1/A, J-Block, Baridhara Residential Area, Dhaka </p>

  </div>
  </div>
</div>
</div>

<!--end contact section-->


<script type="text/javascript">  
$(document).ready(function(){
$('.uptop').click(function(){
$('html,body').animate({ scrollTop: 0}, 1000);
});


});

</script>





<div class="uptop">
<img src="apps/images/backtop1.png">
    GO TOP
</div>



<?php include_once 'footer.php';?>

