<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <?php include("static/header.html");?>
    
    <title></title>
</head>
<body>
    <?php 
    $page = 'invest';
    include("static/navigation.php");?><!--Start Slider-->
    
    <!--Start Feature Promo Box-->
    <section class="content intro_text_box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" data-effect=
                "slide-bottom" style="margin-bottom:-35px">
                    <div class="intro_box">
                        <h1><span>INVESTMENT CALCULATOR</span></h1>
                        <div class="estOutputHeader">
                            Select the Investment Term
                        </div>
                        <div class="btn-group">
                            <div class="col-lg-4 col-md-4 col-sm-4" style=
                            "margin-right:-17px">
                                <button class=
                                "btn btn-info btn-lg selected-month month" id=
                                '36month' style=
                                "border-top-left-radius:1em; border-bottom-left-radius:1em;"
                                type="button">36 Months</button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <button class="btn btn-info btn-lg month" id=
                                '24month' type="button">24 Months</button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4" style=
                            "margin-left:-18px">
                                <button class="btn btn-info btn-lg month" id=
                                '12month' style=
                                "border-top-right-radius:1em; border-bottom-right-radius:1em;"
                                type="button">12 Months</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class='col-lg-8 col-md-8'>
                <div class="estimatorOutputWrapper">
                        <div class="estOutputHeader">
                            Your Investment Plan
                        </div>
                <div class="estimatorOutput">
                <h4 class='ribbon' style="width:400px;">How much do you wish to invest?</h4>
                    <div id="slider">
                        <h5 style="font-weight:bold; margin-top:31px !important;">$500,000</h5>
                        <h5 style="font-weight:bold; float:right; margin-top:-25px !important;">$10,000,000</h5>                    	
                    </div>
                    <input id="sliderVal" name=
                    "sliderVal" readonly type="hidden" value='0'>
                    <input id="month" name="month" readonly type=
                    "hidden" value='36month'> <input id="term" name="term"
                    readonly="readonly" type="hidden" value='quarterly'>
                <h4 class='ribbon'style="width:370px;">Interest payments frequency?</h4>
                    
             <div class="wrap col-lg-12 col-md-12">			
			<div class='button-set col-lg-12 col-md-12 frame effects' id="effects">
				<ul class="clearfix">
					<li class="col-lg-4 col-md-4 col-sm-4 btn btn-info btn-term term selected-term" id=
						'quarterly' type="button">Quarterly
					</li>
					<li class="col-lg-4 col-md-4 col-sm-4 btn btn-info btn-term term" id=
						'monthly' type="button">Monthly
					</li>
					<li class="col-lg-4 col-md-4 col-sm-4 btn btn-info btn-term term" id=
						'annually' type="button">Annually
					</li>
				</ul>
			</div>
          
           
		      </div>
               
                </div>
                </div>
                <div class="estOutput">
                            <h6>*The investment amounts and returns provided are for use only to estimate potential investments. Capital Source 2000 Inc makes no guarantees of investment or the associated returns given or implied.</h6>
                        </div>
                </div>
                
                 <div class='col-lg-4 col-md-4 col-sm-12' style="padding:0px;">
                    <div class="estimatorOutputWrapper">
                        <div class="estOutputHeader">
                        Earnings
                        </div>
                        <ul class="estimatorOutput">
                            <li class="estAdvAmount">
                                <div class="estAdvNumLG">
                                    <p><strong>Investment:</strong> <input disabled=
                                    "disabled" id="totalX" style="" type=
                                    "text"></p>
                                </div>
                            </li>
                            <li class="estAdvLngth">
                                <div class="estAdvNumMd">
                                    <p>Distribution Amount: <input disabled=
                                    "disabled" id="total" type=
                                    "text"></p>
                                </div>
                            </li>
                            <li class="estAdvLngth">
                                <div class="estAdvNumMd">
                                    <p>Annual Return:<input disabled=
                                    "disabled" id="total12" style="" type=
                                    "text"></p>
                                </div>
                            </li>
                            
                            <li class="estAdvCost">
                                <div class="estAdvNumMd">
                                    <p><strong>Total Return: </strong><input disabled=
                                    "disabled" id="totalY" type="text"></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>
    
    
    <section class="promo_box" data-effect="slide-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <h3>Personalize your Investment Plan with Capital Source 2000</h3>
                        <p>Fixed promissory note investments catered to your needs.</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <a href="contact1.php" class="btn btn-line bold">
                            <i class="fa fa-phone"></i>
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </section><!--Start Footer-->
    <?php include("static/footer.html");?>
    <script src="js/myscript.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/sly.min.js"></script>
    <script type="text/javascript">
jQuery(function($){
	'use strict';
	// -------------------------------------------------------------
	//   Effects
	// -------------------------------------------------------------
	(function () {
		var $frame = $('#effects');
		var $wrap  = $frame.parent();
		// Call Sly on frame
		$frame.sly({
			horizontal: 1,
			itemNav: 'forceCentered',
			smart: 1,
			activateMiddle: 1,
			activateOn: 'click',
			mouseDragging: 1,
			touchDragging: 1,
			releaseSwing: 1,
			startAt: 0,
			scrollBar: $wrap.find('.scrollbar'),
			scrollBy: 1,
			speed: 300,
			elasticBounds: 1,
			easing: 'swing',
			dragHandle: 1,
			dynamicHandle: 1,
			clickBar: 1,
			// Buttons
			prev: $wrap.find('.prev'),
			next: $wrap.find('.next')
		});
	}());
});
</script>
</body>
</html>