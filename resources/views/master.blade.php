<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ '$title' }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

<meta charset="utf-8">  
    
     <!--insert your title here-->  
    <meta name="description" content="nicdark Framework"> <!--insert your description here-->  
    <meta name="author" content="nicdark"> <!--insert your name here-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->
    
    <!--START CSS--> 
    <link rel="stylesheet" href="css\nicdark_style.css"> <!--style-->
    <link rel="stylesheet" href="css\nicdark_responsive.css"> <!--nicdark_responsive-->

    <!--revslider-->
    <link rel="stylesheet" href="css\revslider\settings.css"> <!--revslider-->

    <!--END CSS-->
    
    <!--google fonts-->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> <!-- font-family: 'Montserrat', sans-serif; -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'> <!-- font-family: 'Raleway', sans-serif; -->
    <link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'> <!-- font-family: 'Montez', cursive; -->

    <!--[if lt IE 9]>  
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>  
    <![endif]-->  
    
    <!--FAVICONS-->
    <link rel="shortcut icon" href="img\favicon\favicon.ico">
    <link rel="apple-touch-icon" href="img\favicon\apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img\favicon\apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img\favicon\apple-touch-icon-114x114.png">
    <!--END FAVICONS-->
    
    
</head>  
<body id="start_nicdark_framework">

<div class="nicdark_site">
    <div class="nicdark_site_fullwidth nicdark_clearfix"><div class="nicdark_overlay"></div>



<!--START SIDEBAR-->
<div class="nicdark_section nicdark_navigation" >
    
    <div class="nicdark_menu_boxed" >

        <div class="nicdark_section nicdark_bg_greydark nicdark_displaynone_responsive" style="background:green;">
            <div class="nicdark_container nicdark_clearfix">
                <div class="grid grid_6">
                    <div class="nicdark_focus">
                        <h6 class="white">
						 <?php 
 $db = mysqli_connect('localhost', 'root', '', 'admin');
 $results = mysqli_query($db, "SELECT * FROM hmenu"); ?> 
<?php while ($row = mysqli_fetch_array($results)) { ?>	
                            <i class="<?php echo $row['favicon']; ?>"></i>&nbsp;&nbsp;<a class="white" href="<?php echo $row['url']; ?>"><?php echo $row['menu']; ?></a>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="grey">·</span>&nbsp;&nbsp;&nbsp;&nbsp;
            <?php } ?>                  
                        </h6>
                    </div>
                </div>
                <div class="grid grid_6 right">
                    <div class="nicdark_focus right">
                        <h6 class="white">
                                                       <i class="icon-plus-outline"></i>&nbsp;&nbsp;<a class="white" href="{{ route('register') }}">REGISTER</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="grey">·</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="icon-lock-1"></i>&nbsp;&nbsp;<a class="white" href="{{ route('login') }}">LOG IN</a>
                        </h6>
                    </div>
                </div>

                <!--info window for languages-->
                                <!--end window-->

            </div>
        </div>

        <div class="nicdark_space3 nicdark_bg_gradient"></div>
                    
        <div class="nicdark_section nicdark_bg_grey nicdark_shadow nicdark_radius_bottom fade-down">
            <div class="nicdark_container nicdark_clearfix">

                <div class="grid grid_12 percentage">
                        
                        <div class="nicdark_space20"></div>
 <?php 
 $db = mysqli_connect('localhost', 'root', '', 'admin');
 $results = mysqli_query($db, "SELECT * FROM settings WHERE id=1"); ?> 
 <?php while ($row = mysqli_fetch_array($results)) { ?>	
                        <div style="margin-top:-15px;"class="nicdark_logo nicdark_marginleft10">
                            <a href="{{ url('/') }}"><img alt="" src="<?php echo $row['model']; ?>"></a>
                        </div>
  <?php } ?>
                                               
                        <nav>
                            <ul class="nicdark_menu nicdark_margin010 nicdark_padding50">
 <?php 
 $db = mysqli_connect('localhost', 'root', '', 'admin');
 $results = mysqli_query($db, "SELECT * FROM menu"); ?> 
<?php while ($row = mysqli_fetch_array($results)) { ?>		
                                <li class="yellow">
                                    <a href="<?php echo $row['url']; ?>"><?php echo $row['menu']; ?></a>
                                                                    </li>
                               <?php } ?>
                            </ul>
                        </nav>
    
                        <div class="nicdark_space20"></div>

                </div>

            </div>
            <!--end container-->

        </div>
        <!--end header-->

    </div>

</div>
<!--start-->
<!--start section-->
@yield('content')



<!--end section-->
<img style="width:100%;" src="http://www.teachers.gov.bd/sites/all/themes/eduportal_reponsive/images/footer_top_bg.png"/>

<!--start section-->
<div style="background: #737272;" class="nicdark_section nicdark_bg_greydark2 nicdark_copyrightlogo">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_6 nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
            <div class="nicdark_space20"></div>
            <p class="white">© Copyright 2017 by <span class="grey">Tanis Fatema</span> Made With <i class="icon-heart-filled red nicdark_zoom"></i> Laravel</p>
        </div>


        <div class="grid grid_6">
            <div class="nicdark_focus right nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
                <div class="nicdark_margin10">
                    <a href="#" class="nicdark_facebook nicdark_press right nicdark_btn_icon small nicdark_radius white"><i class="icon-facebook-1"></i></a>
                </div>
                <div class="nicdark_margin10">
                    <a href="#" class="nicdark_press right nicdark_btn_icon nicdark_bg_red nicdark_shadow small nicdark_radius white"><i class="icon-gplus"></i></a>
                </div>
                <div class="nicdark_margin10">
                    <a href="#" class="nicdark_press right nicdark_btn_icon nicdark_bg_blue nicdark_shadow small nicdark_radius white"><i class="icon-twitter-1"></i></a>
                </div>
                <div class="nicdark_margin10">
                    <a href="#start_nicdark_framework" class="nicdark_zoom nicdark_internal_link right nicdark_btn_icon nicdark_bg_greydark2 small nicdark_radius white"><i class="icon-up-outline"></i></a>
                </div>
            </div>
        </div>

    </div>
    <!--end nicdark_container-->
            
</div>
<!--end section-->        </div>
    </div>

    <!--main-->
    <script src="js\main\jquery.min.js"></script> <!--Jquery-->
    <script src="js\main\jquery-ui.js"></script> <!--Jquery UI-->
    <script src="js\main\excanvas.js"></script> <!--canvas need for ie-->

    <!--plugins-->
    <script src="js\plugins\revslider\jquery.themepunch.tools.min.js"></script> <!--revslider-->
    <script src="js\plugins\revslider\jquery.themepunch.revolution.min.js"></script> <!--revslider-->

    <!--menu-->
    <script src="js\plugins\menu\superfish.min.js"></script> <!--superfish-->
    <script src="js\plugins\menu\tinynav.min.js"></script> <!--tinynav-->

    <!--other-->
    <script src="js\plugins\isotope\isotope.pkgd.min.js"></script> <!--isotope-->
    <script src="js\plugins\mpopup\jquery.magnific-popup.min.js"></script> <!--mpopup-->
    <script src="js\plugins\scroolto\scroolto.js"></script> <!--Scrool To-->
    <script src="js\plugins\nicescrool\jquery.nicescroll.min.js"></script> <!--Nice Scroll-->
    <script src="js\plugins\inview\jquery.inview.min.js"></script> <!--inview-->
    <script src="js\plugins\parallax\jquery.parallax-1.1.3.js"></script> <!--parallax-->
    <script src="js\plugins\countto\jquery.countTo.js"></script> <!--jquery.countTo-->
    <script src="js\plugins\countdown\jquery.countdown.js"></script> <!--countdown-->
    
    <!--settings-->
    <script src="js\settings.js"></script> <!--settings-->
<!--custom js-->
<script type="text/javascript">
	jQuery(document).ready(function() {


		//START SLIDE
		jQuery('.nicdark_slide1').show().revolution(
		{
			dottedOverlay:"none",
			delay:16000,
			startwidth:1170,
			startheight:650,
			hideThumbs:200,
			
			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:5,
			
			navigationType:"none",
			navigationArrows:"solo",
			navigationStyle:"preview2",
			
			touchenabled:"on",
			onHoverStop:"on",
			
			swipe_velocity: 0.7,
			swipe_min_touches: 1,
			swipe_max_touches: 1,
			drag_block_vertical: false,
									
			parallax:"mouse",
			parallaxBgFreeze:"on",
			parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
									
			keyboardNavigation:"off",
			
			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:20,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,
					
			shadow:0,
			fullWidth:"on",
			fullScreen:"off",

			spinner:"spinner4",
			
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,

			shuffle:"off",
			
			autoHeight:"off",						
			forceFullWidth:"off",						
									
			hideTimerBar: "on",					
									
			hideThumbsOnMobile:"off",
			hideNavDelayOnMobile:1500,						
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,
			
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			videoJsPath:"rs-plugin/videojs/",
			fullScreenOffsetContainer: ""	
		});
		//END SLIDE
		
		

		//START PARALLAX SECTIONS
		$('#nicdark_parallax_big_image').parallax("50%", 0.3);
		$('#nicdark_parallax_2_btns').parallax("50%", 0.3);
		$('#nicdark_parallax_countdown').parallax("50%", 0.3);
		$('#nicdark_parallax_counter').parallax("50%", 0.3);
		//END PARALLAX SECTIONS

		

		//START COUNTDOWN GRID SECTION
		//variables
		var endDate = "June 06, 2016 10:30:00";
		var grid = "grid_3";
		//insert the class nicdark_displaynone in the var if you wnat to hide the visualization
		var display_years = "nicdark_displaynone";
		var display_days = "";
		var display_hours = "";
		var display_minutes = "";
		var display_seconds = "";
		//call
		$(".nicdark_countdown").countdown({
		  date: endDate,
		  render: function(data) {
		    $(this.el).html("<div class=\"grid "+ grid +" "+ display_years +" \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.years, 4) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_blue small nicdark_shadow nicdark_radius white\">YEARS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_days +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.days, 3) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_blue small nicdark_shadow nicdark_radius white\">DAYS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_hours +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.hours, 2) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_yellow small nicdark_shadow nicdark_radius white\">HOURS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_minutes +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.min, 2) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white\">MINUTES</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_seconds +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.sec, 2) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_violet small nicdark_shadow nicdark_radius white\">SECONDS</a><div class=\"nicdark_space5\"></div></div></div>");
		  }
		});
		//END COUNTDOWN GRID SECTION

	});
</script>
<!--custom js-->



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49425562-7', 'auto');
  ga('send', 'pageview');

</script>


</body>  
</html>
