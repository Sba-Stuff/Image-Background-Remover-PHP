<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
<?php
ob_start();
	session_start();
	if(isset($_SESSION['logined'])){header("Location: imageeditor.php");}
	?>

    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">
<script src='scripts/gen_validatorv5.js' type='text/javascript'></script>
      <link rel='stylesheet' type='text/css' href='style/login.css'/>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>


<script>jQuery(function($) {
    'use strict';
    if ($.fn.slider) {
        $(".art-slidecontainer3d278").each(function () {
            var slideContainer = $(this), tmp;
            var inner = $(".art-slider-inner", slideContainer);
            var helper = null;

            if ($.support.transition) {
                helper = new BackgroundHelper();
                helper.init("fade", "next", $(".art-slide-item", inner).first().css($.support.transition.prefix + "transition-duration"));
                inner.children().each(function () {
                    helper.processSlide($(this));
                });

            }


            inner.children().eq(0).addClass("active");
            slideContainer.slider({
                pause: 2600,
                speed: 600,
                repeat: true,
                animation: "fade",
                direction: "next",
                navigator: slideContainer.siblings(".art-slidenavigator3d278"),
                helper: helper                
            });
        });
    }
});
</script><style>.art-content .art-postcontent-0 .layout-item-0 { margin-bottom: 10px;  }
.art-content .art-postcontent-0 .layout-item-1 { padding-right: 10px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-2 { border-right-style:dotted;border-right-width:1px;border-right-color:#ACD0D8; padding-right: 10px;padding-left: 10px;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

.art-slidecontainer3d278 {
    position: relative;
        width: 625px;
    height: 390px;
        }

.art-slidecontainer3d278 .art-slide-item
{

}



.art-slidecontainer3d278 .art-slide-item {
    -webkit-transition: 600ms ease-in-out opacity;
    -moz-transition: 600ms ease-in-out opacity;
    -ms-transition: 600ms ease-in-out opacity;
    -o-transition: 600ms ease-in-out opacity;
    transition: 600ms ease-in-out opacity;
    position: absolute;
    display: none;
	left: 0;
	top: 0;
	opacity: 0;
    width:  100%;
    height: 100%;
}

.art-slidecontainer3d278 .active, .art-slidecontainer3d278 .next, .art-slidecontainer3d278 .prev {
    display: block;
}

.art-slidecontainer3d278 .active {
    opacity: 1;
}

.art-slidecontainer3d278 .next, .art-slidecontainer3d278 .prev {
    width: 100%;
}

.art-slidecontainer3d278 .next.forward, .art-slidecontainer3d278 .prev.back {
    opacity: 1;
}

.art-slidecontainer3d278 .active.forward {
    opacity: 0;
}

.art-slidecontainer3d278 .active.back {
    opacity: 0;
}


.art-slide3d2780 {
    background-image:  url('http://simbhaco.rf.gd/WGYStudioIBR/images/SVG1.PNG');
        background-size:  100%;
        background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slide3d2781 {
    background-image:  url('http://simbhaco.rf.gd/WGYStudioIBR/images/SVG2.PNG');
        background-size:  100%;
        background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slide3d2782 {
    background-image:  url('http://simbhaco.rf.gd/WGYStudioIBR/images/SVG3.PNG');
        background-size:  100%;
        background-position:  0 0;
    background-repeat: no-repeat;
}


.art-slidenavigator3d278 {
  display: inline-block;
  position: absolute;
  direction: ltr !important;
  top: 360px;
  left: 88.8%;
  z-index: 101;
  line-height: 0 !important;
  -webkit-background-origin: border !important;
  -moz-background-origin: border !important;
  background-origin: border-box !important;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-align: center;
    white-space: nowrap;
    }
.art-slidenavigator3d278
{
background: #87D4E3;background: linear-gradient(top, rgba(152, 218, 231, 0.8) 0, rgba(152, 218, 231, 0.8) 50%, rgba(148, 216, 230, 0.8) 60%, rgba(110, 203, 221, 0.8) 100%) no-repeat;background: -webkit-linear-gradient(top, rgba(152, 218, 231, 0.8) 0, rgba(152, 218, 231, 0.8) 50%, rgba(148, 216, 230, 0.8) 60%, rgba(110, 203, 221, 0.8) 100%) no-repeat;background: -moz-linear-gradient(top, rgba(152, 218, 231, 0.8) 0, rgba(152, 218, 231, 0.8) 50%, rgba(148, 216, 230, 0.8) 60%, rgba(110, 203, 221, 0.8) 100%) no-repeat;background: -o-linear-gradient(top, rgba(152, 218, 231, 0.8) 0, rgba(152, 218, 231, 0.8) 50%, rgba(148, 216, 230, 0.8) 60%, rgba(110, 203, 221, 0.8) 100%) no-repeat;background: -ms-linear-gradient(top, rgba(152, 218, 231, 0.8) 0, rgba(152, 218, 231, 0.8) 50%, rgba(148, 216, 230, 0.8) 60%, rgba(110, 203, 221, 0.8) 100%) no-repeat;background: linear-gradient(top, rgba(152, 218, 231, 0.8) 0, rgba(152, 218, 231, 0.8) 50%, rgba(148, 216, 230, 0.8) 60%, rgba(110, 203, 221, 0.8) 100%) no-repeat;-svg-background: linear-gradient(top, rgba(152, 218, 231, 0.8) 0, rgba(152, 218, 231, 0.8) 50%, rgba(148, 216, 230, 0.8) 60%, rgba(110, 203, 221, 0.8) 100%) no-repeat;



padding:10px;





}
.art-slidenavigator3d278 > a
{
background: #2790A5;
-webkit-border-radius:40%;-moz-border-radius:40%;border-radius:40%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}
.art-slidenavigator3d278 > a.active
{
background: #000000;
-webkit-border-radius:40%;-moz-border-radius:40%;border-radius:40%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}
.art-slidenavigator3d278 > a:hover
{
background: #19799A;
-webkit-border-radius:40%;-moz-border-radius:40%;border-radius:40%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}

</style></head>
<body>
<div id="art-main">
<header class="art-header">


    <div class="art-shapes">

            </div>
<h1 class="art-headline" data-left="85.89%">
    <a href="#">WGY STUDIO</a>
</h1>
<h2 class="art-slogan" data-left="84.34%">Background Remover</h2>




                        
                    
</header>
<nav class="art-nav">
    <!--<ul class="art-hmenu"><li><a href="login.html" class="active">Login</a></li></ul> -->
    </nav>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
								
                                        <h2 class="art-postheader">Welcome To WGY Studio Background Remover </h2>
                                    </div>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-1" style="width: 100%" >
	<center>
<div id="3d278" style="position: relative; display: inline-block; z-index: 0;   " class="art-collage">
<div class="art-slider art-slidecontainer3d278" data-width="625" data-height="390">
    <div class="art-slider-inner">
<div class="art-slide-item art-slide3d2780">

</div>
<div class="art-slide-item art-slide3d2781">

</div>
<div class="art-slide-item art-slide3d2782">

</div>

    </div>
</div>
<div class="art-slidenavigator art-slidenavigator3d278" data-left="88.8">
<a href="#" class="art-slidenavigatoritem"></a><a href="#" class="art-slidenavigatoritem"></a><a href="#" class="art-slidenavigatoritem"></a>
</div>



    </div>
	</center>
    </div>
    </div>
</div>
</div>
<div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 50%" >
        <h3 style="border-bottom: 1px dotted #ACD0D8; padding-bottom: 5px">Login</h3>
		<center>
		<script src="//static.surfe.pro/js/net.js"></script>
<ins class="surfe-be" data-sid="14649" data-tpl="10" data-cnt="1"></ins> 
<script>(adsurfebe = window.adsurfebe || []).push({});</script>
        <div class="image-caption-wrapper" style="width: 100%">Please Login To Continue Using WGY Studio Backgruond Remover 
		      <form id='login' method='post' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' accept-charset='UTF-8'>
         <div id='login_errorloc' class='error_strings' style='width:300px;text-align:left'></div>
         <div id='login_outer_div' style='width:300px;height:336px'>
            <div style='position:relative' id='login_inner_div'>
               <input type='hidden' name='sfm_form_submitted' value='yes'/>
               <div id='Image_container'>
                  <img class='sfm_image_in_form' src='images/switch-29869_960_720.png' width='120' height='120' alt=''/>
               </div>
               <div id='label_container'>
                  <label for='username' class='sfm_form_label' id='label' name="label">Username</label>
               </div>
               <div id='username_container'>
                  <input type='text' name='username' id='username' size='20' class='sfm_textbox'/>
               </div>
               <div id='label1_container'>
                  <label id='label1' for='password' class='sfm_form_label'>Password</label>
               </div>
               <div id='password_container'>
                  <input type='password' name='password' id='password' size='20' class='sfm_textbox'/>
               </div>
               <input name='Submit' type='submit' class="art-button" id='Submit' value='Login'/>
            </div>
         </div>
      </form>
	  <p>username: simbha <br>
	  password: simbhaco</p>
      <script type='text/javascript'>
// <![CDATA[
var loginValidator = new Validator("login");
loginValidator.addValidation("username","req","Please fill in username");
loginValidator.addValidation("password","req","Please fill in password");

// ]]>
      </script>
        </div>
		</center>
    </div><div class="art-layout-cell layout-item-1" style="width: 50%" >
        <h3 style="border-bottom: 1px dotted #ACD0D8; padding-bottom: 5px">Introduction</h3><div class="image-caption-wrapper" style="width: 100%"><center><img src="images/WoWGirl.gif" style="width: 100%; max-width: 360px; " alt="an image" class="art-lightbox"></center></div>
        <p ><span style="font-weight: bold;">WGY Studio Background Remover</span></p>
        <p align="justify">WGY Studio Background Remover Allows You To Quickly Remove Backgrounds From Your Photos And Allows you to save in PNG Format so that you can use these images with transparency everywhere with ease. </p>
    </div>
    </div>
</div>
</div>
</div>


</article></div>
                    </div>
                </div>
            </div><footer class="art-footer">
<p>Copyright © <?php echo Date("Y");?>. <a href="https://wgystudio.blogspot.com" target="_blank">WGY STUDIO </a></p>
<p>All Rights Reserved.</p>
    
</footer>

    </div>
</div>
<?php
if(isset($_POST['username']) && isset($_POST['password']))
{
$x = $_POST['username'];
$y = $_POST['password'];
if($x=='simbha' && $y=='simbhaco')
{
	
	$_SESSION['logined']="true";
	header("Location: imageeditor.php");
}
else
{
echo "<script>alert(\"Don't waste time. Wrong Username or Password.\");</script>";
}
}

?>
	<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body></html>