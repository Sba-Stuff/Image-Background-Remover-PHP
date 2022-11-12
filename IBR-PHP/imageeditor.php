<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Image Background Remover</title>
	<?php
	ob_start();
	session_start();
	?>
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

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <script type="text/javascript" src="./js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="./js/magic-edge-inc.js"></script>
        <script type="text/javascript" src="./js/magic-edge.js"></script>
        <script type="text/javascript" src="./js/farbtastic.js"></script>
        <script type="text/javascript" src="./js/filters.js"></script>

        <link rel="stylesheet" type="text/css" href="./css/magic-edge.css" />
        <link rel="stylesheet" type="text/css" href="./css/farbtastic.css" />

        <script>
           
		   
			$( document ).ready(function() {
				initializeMagicEdge();
			});

            function initializeMagicEdge(){
                
                var a = new MagicEdge();
				a.setConfig({	
					width:"full",
					height:"full",
					zoomMultipliers: [0.1, 0.2, 0.4, 0.7, 1, 1.5, 2, 2.5, 3, 4, 6, 8, 10, 14, 20],
					saveNameSufix:"transparent-",
					saveAction: "download",
					ajaxUrl: "ajax.php",
					magicWandTolerance:5,
					magicWandBorderWidth:10,
                    blurFilter: 0,
                    featherFilter: 5,
                    autoCrop: true
				});
                a.init(document.getElementById("MagicEdgeHolder"));
                
            }
            

        </script>
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
    background-image:  url('images/slide3d2780.jpg');
        background-size:  100%;
        background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slide3d2781 {
    background-image:  url('images/slide3d2781.jpg');
        background-size:  100%;
        background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slide3d2782 {
    background-image:  url('images/slide3d2782.jpg');
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
<?php 
    if (isset($_SESSION['logined']))
    { 
    }
    else{
    	header ("Location: index.php");
    }
    ?>
<div id="art-main">
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader">Greetings Simbha And Co User!!</h2>
                                        <p class="art-postheader"><script src="//static.surfe.pro/js/net.js"></script>
<ins class="surfe-be" data-sid="14649" data-tpl="10" data-cnt="1"></ins> 
<script>(adsurfebe = window.adsurfebe || []).push({});</script></p>
                                </div>
                                           <div align="right"><a href="logout.php"><button class="art-button">Logout</button></a></div>
										   <div><hr></div>    
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-1" id="MagicEdgeHolder" style="width: 100%" >
    </div>
    </div>
</div>
</div>

</div>
</article>
                        </div>
                    </div>
					
                </div>
            
			</div>
		
		<footer class="art-footer">
<p>Copyright © <?php echo Date("Y");?>. <a href="https://wgystudio.blogspot.com" target="_blank">WGY STUDIO </a></p>
<p>All Rights Reserved.</p>
    
</footer>

  </div>
</div>


</body></html>