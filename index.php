<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>ग्राम स्वराज संगठन</title>
		<script src="js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
		<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="css/mystyle.css"/>
		<link type="text/css" href="css/signin.css" rel="stylesheet">
		<script src="js/ie-emulation-modes-warning.js"></script>
		<script src="js/ie10-viewport-bug-workaround.js"></script>
		<!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) or jssor.sliderc.mini.js (32KB, with caption, no slideshow) or jssor.sliders.mini.js (28KB, no caption, no slideshow) instead for release -->
    <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>

		
	</head>
	
	<body>
	<!--fb-->
	
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<!--fb-end-->
	
	
		<!-- Caption Style -->
    <style> 
        .captionOrange, .captionBlack
        {
            color: #fff;
            font-size: 20px;
            line-height: 30px;
            text-align: center;
            border-radius: 4px;
        }
        .captionOrange
        {
            background: #EB5100;
            background-color: rgba(235, 81, 0, 0.6);
        }
		.captionWhite
		{
			background: #fff;
            background-color: rgba(235, 235, 235, 235);
		}
        .captionBlack
        {
        	font-size:16px;
            background: #000;
            background-color: rgba(0, 0, 0, 0.4);
        }
		
        a.captionOrange, A.captionOrange:active, A.captionOrange:visited
        {
        	color: #ffffff;
        	text-decoration: none;
        }
        a.captionOrange:hover
        {
            color: #eb5100;
            text-decoration: underline;
            background-color: #eeeeee;
            background-color: rgba(238, 238, 238, 0.7);
        }
        .bricon
        {
            background: url(img/browser-icons.png);
        }
		.fblike
        {
            background: url(images/fblike.png);
        }
	</style>
	<script>
	jQuery(document).ready(function ($) {
            //Reference http://www.jssor.com/development/slider-with-slideshow-jquery.html
            //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html

            var _SlideshowTransitions = [
            //Collapse Random
            {$Duration: 1000, $Delay: 80, $Cols: 10, $Rows: 4, $Clip: 15, $SlideOut: true, $Easing: $JssorEasing$.$EaseOutQuad }
            //Fade in LR Chess
            , { $Duration: 1200, y: 0.3, $Cols: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Rotate VDouble+ out
            , { $Duration: 1000, x: -1, y: 2, $Rows: 2, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Assembly: 2049, $ChessMode: { $Row: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.85} }
            //Swing Inside in Stairs
            , { $Duration: 1200, x: 0.2, y: -0.1, $Delay: 20, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Round: { $Left: 1.3, $Top: 2.5} }
            //Zoom HDouble+ out
            , { $Duration: 1200, x: 4, $Cols: 2, $Zoom: 11, $SlideOut: true, $Assembly: 2049, $ChessMode: { $Column: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Dodge Pet Inside in Stairs
            , { $Duration: 1500, x: 0.2, y: -0.1, $Delay: 20, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Round: { $Left: 0.8, $Top: 2.5} }
            //Rotate Zoom+ out BL
            , { $Duration: 1200, x: 4, y: -4, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} }
            //Dodge Dance Inside in Random
            , { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 80, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Clip: $JssorEasing$.$EaseOutQuad }, $Round: { $Left: 0.8, $Top: 2.5} }
            //Rotate VFork+ out
            , { $Duration: 1200, x: -3, y: 1, $Rows: 2, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Assembly: 2049, $ChessMode: { $Row: 28 }, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.7} }
            //Clip and Chess in
            , { $Duration: 1200, y: -1, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Top: [0.5, 0.5], $Clip: [0, 0.5] }, $Formation: $JssorSlideshowFormations$.$FormationStraight, $ChessMode: { $Column: 12 }, $ScaleClip: 0.5 }
            //Swing Inside in Swirl
            , { $Duration: 1200, x: 0.2, y: -0.1, $Delay: 20, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationSwirl, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Round: { $Left: 1.3, $Top: 2.5} }
            //Rotate Zoom+ out
            , { $Duration: 1200, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: { $Zoom: $JssorEasing$.$EaseInCubic, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.7} }
            //Dodge Pet Inside in ZigZag
            , { $Duration: 1500, x: 0.2, y: -0.1, $Delay: 20, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationZigZag, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Round: { $Left: 0.8, $Top: 2.5} }
            //Rotate Zoom- out TL
            , { $Duration: 1200, x: 0.5, y: 0.5, $Zoom: 1, $Rotate: 1, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.5} }
            //Rotate Zoom- in BR
            , { $Duration: 1200, x: -0.6, y: -0.6, $Zoom: 1, $Rotate: 1, $During: { $Left: [0.2, 0.8], $Top: [0.2, 0.8], $Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8] }, $Easing: { $Zoom: $JssorEasing$.$EaseSwing, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseSwing }, $Opacity: 2, $Round: { $Rotate: 0.5} }
            // Wave out Eagle
            , { $Duration: 1500, y: -0.5, $Delay: 60, $Cols: 24, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationCircle, $Easing: $JssorEasing$.$EaseInWave, $Round: { $Top: 1.5} }
            //Expand Stairs
            , { $Duration: 1000, $Delay: 30, $Cols: 10, $Rows: 4, $Clip: 15, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 2050, $Easing: $JssorEasing$.$EaseInQuad }
            //Fade Clip out H
            , { $Duration: 1200, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Dodge Pet Inside in Random Chess
            , { $Duration: 1500, x: 0.2, y: -0.1, $Delay: 80, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Left: [0.2, 0.8], $Top: [0.2, 0.8] }, $ChessMode: { $Column: 15, $Row: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseLinear }, $Round: { $Left: 0.8, $Top: 2.5} }
            ];

            //Reference http://www.jssor.com/development/slider-with-caption-jquery.html
            //Reference http://www.jssor.com/development/reference-ui-definition.html#captiondefinition
            //Reference http://www.jssor.com/development/tool-caption-transition-viewer.html

            var _CaptionTransitions = [];
            _CaptionTransitions["L"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["R"] = { $Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["T"] = { $Duration: 900, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["TR"] = { $Duration: 900, x: -0.6, y: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };

            _CaptionTransitions["L|IB"] = { $Duration: 1200, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 };
            _CaptionTransitions["R|IB"] = { $Duration: 1200, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 };
            _CaptionTransitions["T|IB"] = { $Duration: 1200, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 };

            _CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 3, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            _CaptionTransitions["CLIP|TB"] = { $Duration: 900, $Clip: 12, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            _CaptionTransitions["CLIP|L"] = { $Duration: 900, $Clip: 1, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };

            _CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            _CaptionTransitions["MCLIP|T"] = { $Duration: 900, $Clip: 4, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };

            _CaptionTransitions["WV|B"] = { $Duration: 1200, x: -0.2, y: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Round: { $Left: 1.5} };

            _CaptionTransitions["TORTUOUS|VB"] = { $Duration: 1800, y: -0.2, $Zoom: 1, $Easing: { $Top: $JssorEasing$.$EaseOutWave, $Zoom: $JssorEasing$.$EaseOutCubic }, $Opacity: 2, $During: { $Top: [0, 0.7] }, $Round: { $Top: 1.3} };

            _CaptionTransitions["LISTH|R"] = { $Duration: 1500, x: -0.8, $Clip: 1, $Easing: $JssorEasing$.$EaseInOutCubic, $ScaleClip: 0.8, $Opacity: 2, $During: { $Left: [0.4, 0.6], $Clip: [0, 0.4], $Opacity: [0.4, 0.6]} };

            _CaptionTransitions["RTT|360"] = { $Duration: 900, $Rotate: 1, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2 };
            _CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };

            _CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };

            _CaptionTransitions["T|IE*IE"] = { $Duration: 1800, y: 0.8, $Zoom: 11, $Rotate: -1.5, $Easing: { $Top: $JssorEasing$.$EaseInOutElastic, $Zoom: $JssorEasing$.$EaseInElastic, $Rotate: $JssorEasing$.$EaseInOutElastic }, $Opacity: 2, $During: { $Zoom: [0, 0.8], $Opacity: [0, 0.7] }, $Round: { $Rotate: 0.5} };

            _CaptionTransitions["RTTS|R"] = { $Duration: 900, x: -0.6, $Zoom: 1, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Zoom: $JssorEasing$.$EaseInQuad, $Rotate: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $Round: { $Rotate: 1.2} };
            _CaptionTransitions["RTTS|T"] = { $Duration: 900, y: 0.6, $Zoom: 1, $Rotate: 1, $Easing: { $Top: $JssorEasing$.$EaseInQuad, $Zoom: $JssorEasing$.$EaseInQuad, $Rotate: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $Round: { $Rotate: 1.2} };

            _CaptionTransitions["DDGDANCE|RB"] = { $Duration: 1800, x: -0.3, y: -0.3, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Zoom: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $During: { $Left: [0, 0.8], $Top: [0, 0.8] }, $Round: { $Left: 0.8, $Top: 2.5} };
            _CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _CaptionTransitions["DDG|TR"] = { $Duration: 1200, x: -0.3, y: 0.3, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump }, $Opacity: 2, $During: { $Left: [0, 0.8], $Top: [0, 0.8] }, $Round: { $Left: 0.8, $Top: 0.8} };

            _CaptionTransitions["FLTTR|R"] = { $Duration: 900, x: -0.2, y: -0.1, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInWave }, $Opacity: 2, $Round: { $Top: 1.3} };
            _CaptionTransitions["FLTTRWN|LT"] = { $Duration: 1800, x: 0.5, y: 0.2, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseInWave, $Zoom: $JssorEasing$.$EaseInOutQuad }, $Opacity: 2, $During: { $Left: [0, 0.7], $Top: [0.1, 0.7] }, $Round: { $Top: 1.3} };

            _CaptionTransitions["ATTACK|BR"] = { $Duration: 1500, x: -0.1, y: -0.5, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseOutWave, $Top: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $During: { $Left: [0.3, 0.7], $Top: [0, 0.7] }, $Round: { $Left: 1.3} };

            _CaptionTransitions["FADE"] = { $Duration: 900, $Opacity: 2 };

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 2000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 4,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 4,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 1140), 300));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end
        });
    </script>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<nav class="navbar navbar-default" style="background-color:white;">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
				<a href="index.php">
					<img class="logo" src="images/logo.jpg"></img>
				</a>	
				</div>
				<div class="col-md-4">
					<p class="font1"></br>E-mail: info@gramswarajsangathan.com</p>
					<font style="color:green;"> Follow us on facebook </font>
					<div class="fb-follow" data-href="https://www.facebook.com/GramSwarajSangathan" data-colorscheme="light" data-layout="button_count" data-show-faces="true"></div>
				
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="height:52px;">
		 <div class="navbar navbar-default menucolor" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="z-index:2000;position:relative;">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
			
            
          </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li  class="activemenucolor" ><a href="index.php"><font class="mytextcolor">मुखपृष्ठ</font></a></li>
              <li><a href="aboutus.php"><font class="mytextcolor menutext">परिचय</font></a></li>
			  <li><a href="photogallery.php"><font class="mytextcolor menutext">फोटो गेलरी</font></a></li>
			  <li><a href="blood.php"><font class="mytextcolor menutext">Blood Donation</font></a></li>
			  <li><a href="services.php"><font class="mytextcolor menutext">Services</font></a></li>
			  <li><a href="news.php"><font class="mytextcolor menutext">सूचना</font></a></li>
			  <li><a href="registration.php"><font class="mytextcolor menutext">Registration</font></a></li>
			  <li><a href="contactus.php"><font class="mytextcolor menutext">हमसे संपर्क करें</font></a></li>
            </ul>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
	</nav>	
		<div class ="container">
			<div class="row">
				<div class="col-md-12">
				
					<!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. --> 
   <div id="slider1_container" style="position: relative; width: 1140px; height: 450px; overflow: hidden;">
        <style>
            /* this line can be removed, but it really helps in case of css conflicts in your page */
            .slider1 div { position: relative; margin: 0px; padding: 0px; }
        </style>
 
        <!-- Loading Screen --> 
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;"> 
            </div> 
            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;

                top: 0px; left: 0px;width: 100%;height:100%;">
            </div> 
        </div> 
 
        <!-- Slides Container --> 
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1140px; height: 450px; overflow: hidden;">
			<div>
                <img u="image" src="images/gssgroup.jpg" />
				<a href="https://www.facebook.com/GramSwarajSangathan" u="caption" t="WV|B" t2="T" d="-100" class=fblike style="position:absolute; top:300px; left: 20px; width:150px; height:55px; background-position: 0px 0px;"></a>
				<div u="caption" class="captionOrange" t="ZMF|10" t2="B" d= 1300 style="position:absolute;left:170px;top:45px;width:800px;height:40px;font-size:24px;color:#fff;line-height:40px;">Aap Sab Ko MakarSakranti or Gantantra Divas Ki Hardik Subhkamnaye</div>
				
			</div>		
            <div>
                <img u="image" src="images/gssfb.jpg" />
                <div u=caption t="CLIP|LR" du="1500" class="captionOrange"  style="position:absolute; left:20px; top: 10px; width:300px; height:30px;"> 
                Jai Hind Jai Bharat
                </div>
                <!--<div u=caption t="L|IB" t2=L d=-900 class="captionBlack"  style="position:absolute; left:120px; top: 90px; width:100px; height:30px;  color:blue;"> 
                Jai Jawan
                </div> 
                <div u=caption t="RTT|360" d=-200 class="captionBlack"  style="position:absolute; left:120px; top: 130px; width:100px; height:30px;  color:blue;"> 
                Jai Kisan
                </div>
                <div u=caption t="DDGDANCE|RB" t2="RTT|10" d=-1800 du=3800 class="captionOrange" style="position:absolute; left:600px; top: 10px; width:200px; height:160px; text-align: left;">
                 
                    &nbsp; Sawacchh Sundar</br>
					&nbsp; Khushaal<br />
                    &nbsp; Desh Hamara</br>
					&nbsp; Rahega Prayas<br />
					&nbsp; Yahi Hamara<br />
                </div>-->
                <div u=caption t="T|IE*IE" d=-1600 du=3800 t2="B" class="captionOrange" style="position:absolute; left:20px; top: 50px; width:300px; height:30px;">
                    Vande Maatram
                </div>
                
                <!--<div u="caption" t="CLIP|L" d=-300 style="position:absolute;left:520px;top:280px;width:160px;height:40px;font-size:36px;color:red;line-height:40px; text-align: center;">
				Subhkamnaye
				</div>-->
                <!--<a class="captionOrange" u="caption" t="CLIP|L" d=-300 href="http://www.jssor.com/development/tool-caption-transition-viewer.html" style="position:absolute;left:720px;top:280px;width:220px;height:40px;font-size:36px;color:#fff;line-height:40px;">transitions</a>-->
            </div>
            <div> 
                <img u="image" src="images/image1.jpg" />
                
                <div u=caption t="CLIP|LR" t2="B" du="2000" class="captionOrange"  style="position:absolute; left:20px; top: 250px; width:500px; height:30px;"> 
					स्वदेशी, शिक्षा, संस्कृति, योग, स्वराज, जागरूकता, प्रेरणा
                </div>
                <!--<div u="caption" t="FADE" t2="B" d=-450 class=captionBlack style="position: absolute; left:700px;top:120px;width:200px;height:90px;">
							संगठन
				</div>
                <div u="caption" t="T|IB" t2="R" d=-600 class=captionOrange style="position: absolute; top: 90px; left: 720px; width: 160px;
                    height: 90px;  line-height: 90px;">
						संगठन
					</div>
                <div u="caption" t="MCLIP|T" t2="T" d=-450 style="position:absolute;left:505px;top:40px;width:200px;height:30px;font-size:18px;color:#fff;line-height:30px;text-align:center;">Size&nbsp; &nbsp; &nbsp;CPU Usage</div>
                <div u="caption" t="MCLIP|R" d=-300 style="position:absolute;left:325px;top:90px;width:350px;height:30px;font-size:18px;color:#fff;line-height:30px;">Slider with Slideshow&nbsp; &nbsp; &nbsp; 23KB&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ~4%</div>
                <div u="caption" t="MCLIP|R" d=-300 style="position:absolute;left:325px;top:140px;width:350px;height:30px;font-size:18px;color:#fff;line-height:30px;">Slider with Caption&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 18KB&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ~4%</div>
                <div u="caption" t="MCLIP|R" d=-300 style="position:absolute;left:325px;top:190px;width:350px;height:30px;font-size:18px;color:#fff;line-height:30px;">Slider&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;17KB&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ~1%</div>-->
            </div>
            <div> 
                <img u="image" src="images/quiz1.jpg" />
                <!--<a class="captionOrange" href="http://www.jssor.com/demos/index.html" style="position: absolute; top: 50px; right: 30px; width: 200px;">30+ Templates</a>
                <div u=caption t="T" t2=NO style="position: absolute; left: 20px; top:30px; width:600px; height:90px; color: #fff; line-height: 30px; text-align: center;"> 
                    Jssor Slider is touch swipe image slideshow with 360+ javascript slideshow effects.<br />
                    When touch Jssor Slider,<br />
                    it will freeze and then move to the direction that finger swipes to.
                </div>
                <div u=caption t="L" d=-750 class="captionOrange"  style="position:absolute; left:20px; top: 300px; width:130px; height:30px;"> 
                Jssor slider
                </div>
                <div u=caption t="CLIP|L" t2=B d=-450 class="captionBlack"  style="position:absolute; left:160px; top: 300px; width:30px; height:30px;"> 
                is
                </div>
                <div u=caption t="DDG|TR" t2="TORTUOUS|VB" d=-750 class="captionOrange"  style="position:absolute; left:200px; top: 300px; width:300px; height:30px;"> 
                most scalable photo slideshow
                </div>
                <div u=caption t="RTT|10" d=-450 class="captionBlack"  style="position:absolute; left:430px; top: 240px; width:30px; height:30px;"> 
                for
                </div>
                <div u=caption t="TORTUOUS|VB" d=-750 class="captionOrange"  style="position:absolute; left:590px; top: 220px; width:80px; height:30px;"> 
                photo
                </div>
                <div u=caption t="T" d=-450 class="captionOrange"  style="position:absolute; left:720px; top: 200px; width:80px; height:30px;"> 
                image
                </div>
                <div u=caption t="FLTTR|R" t2="B" d=-600 class="captionOrange"  style="position:absolute; left:560px; top: 300px; width:80px; height:30px;"> 
                picture
                </div>
                <div u=caption t="ATTACK|BR" d=-600 class="captionOrange"  style="position:absolute; left:760px; top: 310px; width:80px; height:30px;"> 
                content
                </div>
                <div u="caption" t="FLTTRWN|LT" d=-900 style="position:absolute;left:460px;top:160px;width:130px;height:30px;font-size:28px;color:#fff;line-height:30px;">html code</div>
                <div u="caption" t="RTTS|R" d=-900 style="position:absolute;left:760px;top:120px;width:130px;height:30px;font-size:28px;color:#fff;line-height:30px;">web page</div>
                <div u="caption" t="R|IB" t2=R d=-900 style="position:absolute;left:860px;top:250px;width:60px;height:30px;font-size:28px;color:#fff;line-height:30px;">text</div>
				-->
				<div u="caption" t="RTTL|BR" d=1000 class= captionOrange style="position:absolute;left:750px;top:350px;width:150px;height:30px; color:#fff;" > Quiz Contest</div> 
            </div>
            <div>
                <img u="image" src="images/quiz2.jpg" />
                <!--<div u=caption t="RTTS|T" d=-300 t2="B" class=captionOrange style="position:absolute; left:20px; top: 330px; width:300px; height:30px;"> 
                one of the most reliable sliders
                </div>
                <div u=caption t="T|IB" t2="T" d=-300 class="captionOrange"  style="position:absolute; left:20px; top: 100px; width:130px; height:30px;"> 
                All browsers
                </div>
                <div u=caption t="T|IB" t2=L d=-900 class="captionBlack"  style="position:absolute; left:60px; top: 170px; width:100px; height:30px;"> 
                supported
                </div>
                <div u="caption" t="WV|B" t2="T" d="-600" class=bricon style="position:absolute; top:50px; left: 220px; width:30px; height:30px; background-position: 0px 0px;"></div>
                <div u="caption" t="WV|B" t2="T" d="-1100" class=bricon style="position:absolute; top:100px; left: 220px; width:30px; height:30px; background-position: -30px 0px;"></div>
                <div u="caption" t="WV|B" t2="T" d="-1100" class=bricon style="position:absolute; top:150px; left: 220px; width:30px; height:30px; background-position: -60px 0px;"></div>
                <div u="caption" t="WV|B" t2="T" d="-1100" class=bricon style="position:absolute; top:200px; left: 220px; width:30px; height:30px; background-position: -90px 0px;"></div>
                <div u="caption" t="WV|B" t2="T" d="-1100" class=bricon style="position:absolute; top:250px; left: 220px; width:30px; height:30px; background-position: -120px 0px;"></div>
                <div u="caption" t="LISTH|R" t2="CLIP|TB" d=-600 class=captionOrange style="position: absolute; top: 40px; left: 280px; width: 180px;
                    height: 250px; text-align: left; line-height: 50px;">
                        &nbsp; Chrome&nbsp; &nbsp; &nbsp; 3+<br />
                        &nbsp; Firerfox&nbsp; &nbsp; &nbnbsp; 2+<br />
                        &nbsp; IE&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 6+<br />
                        &nbsp; Safari&nbsp; &nbsp; &nbsp; &nbsp; 3.1+<br />
                        &nbsp; Opera&nbsp; &nbsp; &nbsp; &nbsp;10+
                </div>
                <div u=caption t="TR" t2="T" d=-900 class="captionOrange"  style="position:absolute; left:700px; top: 40px; width:130px; height:30px;"> 
                All devices
                </div>
                <div u=caption t="R" t2=R d=-900 class="captionBlack"  style="position:absolute; left:780px; top: 55px; width:100px; height:30px;"> 
                supported
                </div>
                <div u="caption" t="T|IB" d=-900 style="position:absolute;left:525px;top:90px;width:220px;height:30px;font-size:28px;color:#fff;line-height:30px;">Windows Phone</div>
                <div u="caption" t="T|IB" t2="ZMF|10" d=-900 style="position:absolute;left:560px;top:160px;width:120px;height:30px;font-size:28px;color:#fff;line-height:30px;">Android</div>
                <div u="caption" t="T|IB" t2=R d=-900 style="position:absolute;left:760px;top:140px;width:60px;height:30px;font-size:28px;color:#fff;line-height:30px;">iOS</div>
                <img u="caption" t="T|IB" t2=B d=-900 src="img/home/moc-iphone.png" style="position:absolute;left:600px;top:230px;width:120px;height:80px;" />
                <img u="caption" t="RTTL|BR" d=-450 src="img/home/moc-ipad.png" style="position:absolute;left:750px;top:220px;width:77px;height:100px;" />
				-->
				<div u="caption" t="RTTL|BR" d=1000 class= captionOrange style="position:absolute;left:750px;top:350px;width:150px;height:30px; color:#fff;" > Quiz Contest</div>
            </div>
			<div>
                <img u="image" src="images/yoga.jpg" />
				<div u="caption" t="RTTL|BR" d=1000 class= captionOrange style="position:absolute;left:750px;top:320px;width:150px;height:30px; color:#fff;" > Yoga Shivir</div> 
			</div>
			<div>
                <img u="image" src="images/board.jpg" />
			</div>
			
			<div>
                <img u="image" src="images/campaign.jpg" />
				<div u="caption" t="RTTL|BR" d=1000 class= captionOrange style="position:absolute;left:750px;top:320px;width:300px;height:70px; color:#fff;" > Healthy And Wealthy Bharat Prachar By Children</div> 
			</div>	
			<div>
                <img u="image" src="images/republic.jpg" />
				<div u="caption" t="RTTL|BR" d=1000 class= captionOrange style="position:absolute;left:750px;top:320px;width:250px;height:30px; color:#fff;" > Gantantra Divas Utsav</div>
			</div>

		
		<!-- Example to add fixed static share buttons in slider BEGIN -->
            <!-- Remove it if no need -->
            <!-- Share Button Styles -->
            <style>
                .share-icon {
                    display: inline-block;
                    float: left;
                    margin: 4px;
                    width: 32px;
                    height: 32px;
                    cursor: pointer;
                    vertical-align: middle;
                    background-image: url(img/share/share-icons.png);
                }

                .share-facebook {
                    background-position: 0px 0px;
                }

                    .share-facebook:hover {
                        background-position: 0px -40px;
                    }

        .share-twitter {
            background-position: -40px 0px;
        }

            .share-twitter:hover {
                background-position: -40px -40px;
            }

        .share-pinterest {
            background-position: -80px 0px;
        }

            .share-pinterest:hover {
                background-position: -80px -40px;
            }

                .share-linkedin {
                    background-position: -240px 0px;
                }

                    .share-linkedin:hover {
                        background-position: -240px -40px;
                    }


                .share-googleplus {
                    background-position: -120px 0px;
                }

                    .share-googleplus:hover {
                        background-position: -120px -40px;
                    }


        .share-stumbleupon {
            background-position: -360px 0px;
        }

            .share-stumbleupon:hover {
                background-position: -360px -40px;
            }

                .share-email {
                    background-position: -320px 0px;
                }

                    .share-email:hover {
                        background-position: -320px -40px;
                    }
            </style>

			<div u="any" style="position: absolute; display: block; top: 6px; right: 16px; width: 280px; height: 40px;">

                <a class="share-icon share-facebook" target="_blank" href="http://www.facebook.com/sharer.php?u=http://gramswarajsangathan.com" title="Share on Facebook"></a>
                <a class="share-icon share-twitter" target="_blank" href="http://twitter.com/share?url=http://www.gramswarajsangathan.com" title="Share on Twitter"></a>
                <a class="share-icon share-googleplus" target="_blank" href="https://plus.google.com/share?url=http://www.gramswarajsangathan.com" title="Share on Google Plus"></a>
                <a class="share-icon share-linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=http://gramswarajsangathan.com" title="Share on LinkedIn"></a>
                <!--<a class="share-icon share-stumbleupon" target="_blank" href="http://www.stumbleupon.com/submit?url=http://jssor.com&title=jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20javascript+html%20TOUCH%20SWIPE%20Responsive" title="Share on StumbleUpon"></a>
                <a class="share-icon share-pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url=http://jssor.com&media=http://jssor.com/img/site/jssor.slider.jpg&description=jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20javascript+html%20TOUCH%20SWIPE%20Responsive" title="Share on Pinterst"></a>
                <!--<a class="share-icon share-email" target="_blank" href="mailto:?Subject=Jssor%20Slider&Body=Highly%20recommended%20jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20javascript+html%20TOUCH%20SWIPE%20Responsive%20http://jssor.com" title="Share by Email"></a>-->
            </div>
            <!-- Example to add fixed static share buttons in slider END -->

            <!-- Example to add fixed static QR code in slider BEGIN -->
            <!-- Remove it if no need -->
            <!-- QR Code Style -->
            <style>
                @media only screen and (max-width: 980px) {
                    .qr_code {
                        display: none;
                    }
                }
            </style>
            <div u="any" class="captionBlack"  style="position: absolute; width: 250px; height: 30px; bottom: 20px; right: 20px; opacity: .5; filter: alpha(opacity=50);" >GramSwarajSangathan</div>
           
        </div> 
 
        <!-- Bullet Navigator Skin Begin -->
        <style>
            /* jssor slider bullet navigator skin 03 css */
            /*
            .jssorb03 div           (normal)
            .jssorb03 div:hover     (normal mouseover)
            .jssorb03 .av           (active)
            .jssorb03 .av:hover     (active mouseover)
            .jssorb03 .dn           (mousedown)
            */
            .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av
            {
                background: url(img/b03.png) no-repeat;
                overflow:hidden;
                cursor: pointer;
            }
            .jssorb03 div { background-position: -5px -4px; }
            .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
            .jssorb03 .av { background-position: -65px -4px; }
            .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb03" style="position: absolute; bottom: 16px; left: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="POSITION: absolute; WIDTH: 21px; HEIGHT: 21px; text-align:center; line-height:21px; color:White; font-size:12px;"><NumberTemplate></NumberTemplate></div>
        </div>
        <!-- Bullet Navigator Skin End -->
        
        <!-- Arrow Navigator Skin Begin -->
        <style>
            /* jssor slider arrow navigator skin 20 css */
            /*
            .jssora20l              (normal)
            .jssora20r              (normal)
            .jssora20l:hover        (normal mouseover)
            .jssora20r:hover        (normal mouseover)
            .jssora20ldn            (mousedown)
            .jssora20rdn            (mousedown)
            */
            .jssora20l, .jssora20r, .jssora20ldn, .jssora20rdn
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
                background: url(img/a20.png) no-repeat;
                overflow:hidden;
            }
            .jssora20l { background-position: -3px -33px; }
            .jssora20r { background-position: -63px -33px; }
            .jssora20l:hover { background-position: -123px -33px; }
            .jssora20r:hover { background-position: -183px -33px; }
            .jssora20ldn { background-position: -243px -33px; }
            .jssora20rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora20l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora20r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End 
        <a style="display: none" href="http://www.jssor.com">jquery slider plugin</a>-->
    </div>
    <!-- Jssor Slider End -->
				</div>
			</div>		
		</div>
		
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 navbar navbar-default" style="height:52px;background-color:green;width:1146px;margin-left:13px;" >
				</div>
			</div>
		</div>	
				
		
		<div class="container">
		
			<div class="row">
				<div class="col-md-4" style="height:270;background-color:orange;margin-left:15px;'>
				<font class="font4">सूचना</br>
				<marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
				Gram Swaraj Sangathan Organize Games in Village Playground on 14th of January,2015. Please come and take part in games.
				More Information about Games is available <a href="news.php">here</a></br>
				</marquee>
				
				</font>
				</div>
				<div class="col-md-4">
				<font class="font4" style="font-size:16px;">
				सन्देश</br>
				ग्राम स्वराज संगठन की स्थापना  6 अक्टूबर 2013 को की  गई। हमारे संगठन का मुख्य उद्देश्य गांव का सम्पूर्ण विकास करना है। सम्पूर्ण विकास से मतलब है गांव के बच्चों का चारित्रिक विकास करके उनमें देश भक्ति की भावना जागृत करना है। संगठन का उद्देश्य है कि हमारे भारत वर्ष के हर गाँव में योग शिविर लगे, हर गाँव में खुशहाली हो, नशा मुक्त हो, हर गाँव में गाैशाला हो, हर गाँव स्वावलंबी हो। हर एक बच्चा चरित्रवान, बलवान, देश भक्त हो जो अपने गाँव के साथ साथ सम्पूर्ण
				भारत वर्ष के विकास में भागीदार बने ।</br>
				जय हिन्द जय भारत  |
				</font>
				
				
				</div>
				
				
				<div  class="col-md-4" style="width:370px; background-color:green;margin-left:-9px;">
					<div  style="margin-left:-15px;margin-top:2px;"class="fb-like-box " data-href="https://www.facebook.com/GramSwarajSangathan" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
					</div>
					</div>
					</div>
				
				
				
				
		</div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12 navbar-header navbar navbar-default" style="background-color:green;width:1146px;margin-left:13px;" >
				</br>
				</br>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div  style="font-size:12px;color:green;margin:0 auto 0 auto; width:200px;text-align:center;">
				
				Website Created And Maintained By </br>
				Sun Dynasty InfoSolutions</br>
				Copyright Reserved 2015
				
				</div>
			</div>
		</div>	
		
			
	</body>
</html>