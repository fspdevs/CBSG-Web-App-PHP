<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<?php include("static/header.html");?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"type="text/javascript"></script> 
		
		<script type="text/javascript">
		$(function () {
    	
    	// Radialize the colors
		Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function(color) {
		    return {
		        radialGradient: { cx: 0.5, cy: 0.3, r: 0.7 },
		        stops: [
		            [0, color],
		            [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
		        ]
		    }; 
		});
		
		// Build the chart
        $('#chart').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Risk Mitigation Through Industry Diversification'
            },
            tooltip: {
        	    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        color: '#000000',
                        connectorColor: '#000000',
                        formatter: function() {
                            return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
                        }
                    },
                    showInLegend: true
                }
            },
            legend: {
                enabled: true,
                layout: 'vertical',
                align: 'right',
                width: 170,
                verticalAlign: 'middle',
                useHTML: true,
                labelFormatter: function() {
                    return '<div style="text-align: left; width:100px;float:left;">' + this.name + '&nbsp&nbsp' + this.y + '%</div>';
                }
            },
            series: [{
                type: 'pie',
                name: 'Industry Distribution',
                data: [
                    ['Retail',   8.8],
                    ['Construction',       8.4],
                    {
                        name: 'Technology',
                        y: 9.7,
                        sliced: true,
                        selected: true
                    },
                    ['Finance',    8.4],
                    ['Automotive',  8.3],
                    ['Restaurant',   8.3],
                    ['Energy',   7.8],
                    ['Medical',   7.0],
                    ['Marketing',   7.0],
                    ['Manufacturing',   6.9],
                    ['Food Distribution',   6.5],
                    ['Gym / Salons',   4.6],
                    ['Home Services',   4.4],
                    ['Travel',   2.5],
                    ['Other Industries',   1.4]
                ]
            }]
        });
    });
    
		</script>
		
		<!--[if lt IE 9]>
		<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<?php 
// Change from cbsg to CS2000
$page = 'whycs2000';
include("static/navigation.php");?>
	
	
		
		
		<section class="content bg_grey">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12" data-effect="slide-top">
						<div class="title">
							<h2>How Our Model Works</h2>
							<p>It all starts with underwriting.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="meet_team" data-effect="slide-bottom">
						<ul class="team_slides" style="margin-bottom: -30px">
							<li>
								<div class="team list_team" data-effect="slide-bottom" >
									<div class="content_team">
										<img alt="" src="img/team/1.jpg">
									</div>
									<div class="team_detail">
										<h5>Underwriting</h5>
										<p>Capital Source 2000 uses a financial matrix for our underwriting which evaluates clients with an emphasis  based on cash flow rather than traditional credit metrics.</p>
									</div>
								</div>
							</li>
														<li>
								<div class="team list_team" data-effect="slide-bottom">
									<div class="content_team">
										<img alt="" src="img/team/2.jpg">
									</div>
									<div class="team_detail">
										<h5>Analysis</h5>
										<p>We investigate numerous sources in addition to credit scores to screen applicants including:
										<br/>
										<strong>Site inspections</strong>
										<br/>
										<strong>MCA Industry databases</strong>
										<br/>
										<strong>Background checks</strong>
										</p>
									</div>
								</div>
							</li>
								<li>
								<div class="team list_team" data-effect="slide-bottom">
									<div class="content_team">
										<img alt="" src="img/team/3.png">
									</div>
									<div class="team_detail">
										<h5>Funded</h5>
										<p>We complete the underwriting process to reach a decision in 48 hours.</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
					<div class="container" style="margin-top:80px">
						<div class="row sub_content">
              		<div class="col-sm-6 col-lg-6 col-md-6 mrgb_30" data-effect="slide-bottom">
              			<div class="title_content">
							<h3>Portfolio Diversification</h3>
							
							</div>
							<div id="chart" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
							</div>
							<div class="col-sm-6 col-lg-6 col-md-6 mrgb_30" data-effect="slide-bottom">
              			<div class="title_content">
							<h3>Capital Source 2000 Advantages</h3>
							</div>
							<h5><strong>Once an MCA is approved and funded it begins to generate cash flow the next day.</strong></h5>
							<blockquote class="default">
								<p>
									Our MCA’s range in size from $5,000 to $150,000 and average funding size $25,101
								</p>
							</blockquote>
							<blockquote class="default">
								<p>
									Funding terms are typically given a for a 66 to 132 business day period or 3 to 6 months based on 22 business days per month.
								</p>
							</blockquote>
							<blockquote class="default">
								<p>
								Client payments are collected via ACH debit directly from client bank accounts.
								</p>
							</blockquote>
							<blockquote class="default">
								<p>
								MCA payback is generally based on an average factoring rate of 1.40
								</p>
							</blockquote>
							</div>
							</div>
							</div>
                            
                            <section class="content blog_post_standar">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-md-12 mrgb_30" data-effect=
                "slide-top">
                    <div class="title_content">
                        <h3>Industry Overview</h3>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-md-6 mrgb_30"
                    data-effect="slide-bottom">
                        <h5 style="text-align:center"><strong>Traditional small
                        business lending has decreased dramatically since the
                        collapse of the U.S. banking industry in
                        2008.</strong></h5>
                        <blockquote class="default">
                            <p align="justify">The number of small business loans peaked at 14
                            billion in 2007 and declined to less than 5 billion
                            in 2010.</p>
                        </blockquote>
                        <blockquote class="default">
                            <p>While the TARP program sanctioned more than $30
                            billion to banks to provide small business loans,
                            however, only about $4 billion was actually
                            loaned.</p>
                        </blockquote>
                        <blockquote class="default">
                            <p align="justify">A recent survey conducted by Pepperdine
                            University revealed that 67% of those who applied
                            for a traditional business loan were
                            unsuccessful.</p>
                        </blockquote>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-md-6 mrgb_30"
                    data-effect="slide-bottom">
                        <h5 style="text-align:center"><strong>Why do billions
                        of dollars in Small Business loan applications go
                        unfunded each year?</strong></h5>
                        <div class="col-sm-6 col-lg-6 col-md-6 mrgb_30"
                        data-effect="slide-bottom">
                            <blockquote class="default">
                                <p align="justify">Many banks have legacy portfolios of
                                non-performing loans and higher reserve
                                requirements making them reluctant to lend
                                money in this category.</p>
                            </blockquote>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-md-6 mrgb_30"
                        data-effect="slide-bottom">
                            <div id="chart" style=
                            "min-width: 320px; height: 180px; margin: 0 auto">
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-12 mrgb_30" data-effect=
                        "slide-bottom" style="margin-top: -55px;">
                            <blockquote class="default">
                                <p align="justify">Additionally, traditional lending
                                institutions have employed stricter
                                underwriting guidelines further limiting the
                                amount of small business funding.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
                            
	<div class="row bg_orange"style="margin-top: -80px;" >
					<div class="col-lg-12 col-md-12 col-sm-12"data-effect="slide-bottom" >
					<h3 style="text-align:center; color:#e64d3d; font-weight:bold">Our Client Portal</h3> 
					<p>Capital Source 2000, takes full advantage of our copyrighted Capital Control Center along with the web based Admin Portal. The Capital Source 2000 portal will automatically update using sophisticated algorithms from our accounting data. This allows us and our clients to effortlessly stay informed.</p>
					<p>Our Capital Control Center allows Capital Source 2000 to distinguish itself in the marketplace by offering multiple features. With this capability, 
					we can monitor our client’s payments along with their set schedule at the click of a button. The Capital Control Center, also allows clients to monitor and build a 
					combined point total through good payment history. 
					Once our clients build a certain level of points they can redeem them with different gifts available on the portal. The gifts include iPads, laptops and a number of other devices. </p>
					<br/>
					
					</div>
		</div>
        
        
										
	<section class="slider">
		
			<div class="fullwidthbanner-container">
				<div class="fullwidthbanner">
					<ul>
						<!-- THE FIRST SLIDE -->
						<li data-transition="fade" data-slotamount="2" data-masterspeed="1000"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="2">
							<img src="img/revslider/transparent.png" data-lazyload="img/revslider/bg_5.jpg" alt="slidebg2" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />
							<div class="caption start sfb"
								data-x="340"
								data-y="75"
								data-speed="600"
								data-start="500"
								data-easing="easeOutExpo"
								data-endspeed="300" 
								data-endeasing="easeInSine" >
								<img src="img/revslider/smart.jpg" style="margin-top: -35px; margin-left: 10px;" alt="Image 1">
							</div>
							<div class="caption randomrotate"
								data-x="220"
								data-y="75"
								data-speed="600"
								data-start="600"
								data-easing="easeOutExpo"
								
								data-endspeed="300" 
								data-endeasing="easeInSine" >
								<img src="img/revslider/line_1.png" alt="Image Slider">
							</div>
							<div class="caption randomrotate"
								data-x="220"
								data-y="220"
								data-speed="600"
								data-start="700"
								data-easing="easeOutExpo"
								
								data-endspeed="300" 
								data-endeasing="easeInSine" >
								<img src="img/revslider/line_2.png" alt="Image Slider">
							</div>
							<div class="caption randomrotate"
								data-x="220"
								data-y="340"
								data-speed="600"
								data-start="800"
								data-easing="easeOutExpo"
								
								data-endspeed="300" 
								data-endeasing="easeInSine" >
								<img src="img/revslider/line_3.png" alt="Image Slider">
							</div>
							<div class="caption randomrotate"
								data-x="750"
								data-y="75"
								data-speed="600"
								data-start="900"
								data-easing="easeOutExpo"
								data-endspeed="300" 
								data-endeasing="easeInSine" >
								<img src="img/revslider/line_4.png" alt="Image Slider">
							</div>
							<div class="caption randomrotate"
								data-x="750"
								data-y="240"
								data-speed="600"
								data-start="1000"
								data-easing="easeOutExpo"
								
								data-endspeed="300" 
								data-endeasing="easeInSine" >
								<img src="img/revslider/line_5.png" alt="Image Slider">
							</div>
							<div class="caption randomrotate"
								data-x="750"
								data-y="340"
								data-speed="600"
								data-start="1100"
								data-easing="easeOutExpo"
								
								data-endspeed="300" 
								data-endeasing="easeInSine" >
								<img src="img/revslider/line_6.png" alt="Image Slider">
							</div>
							<div class="caption medium_bg_main randomrotate sft stt"
								 data-x="880"
								 data-y="48"
								 data-speed="100"
								 data-start="1800"
								 data-easing="easeOutExpo" 
								
								data-endspeed="300" 
								data-endeasing="easeInSine" >
								24/7 Access
							</div>
							
							<div class="caption medium_bg_main randomrotate sft stt"
								data-x="64"
								data-hoffset="0"
								data-y="48"
								data-speed="500"
								data-start="1500"
								data-easing="easeOutExpo"
								data-end="7000" 
								data-endspeed="300" 
								data-endeasing="easeInSine">
								Live Updates
							</div>
							<div class="tp-caption medium_bg_main randomrotate sft stt"
								data-x="120"
								data-hoffset="0"
								data-y="48"
								data-speed="500"
								data-start="7100"
								data-easing="easeOutExpo"
								data-endspeed="500">
								User Friendly
							</div>
							<div class="tp-caption medium_bg_main sfl stl"
								data-x="80"
								data-y="216"
								data-speed="500"
								data-start="1600"
								data-easing="easeOutExpo"
								data-endspeed="300"
								data-endeasing="easeOutExpo"
								data-captionhidden="off">
								Latest Web HTML5
							</div>
							<div class="tp-caption medium_bg_main sfb stb"
								data-x="25"
							 	data-y="393"
							 	data-speed="600"
							 	data-start="1700"
							 	data-easing="easeOutExpo" 
							 	data-end="5000"
							 	data-endspeed="300" 
							 	data-endeasing="easeInSine">
						 		Mobile Enabled
							</div>
							<div class="tp-caption medium_bg_main sfb stb"
								data-x="85"
							 	data-y="393"
							 	data-speed="600"
							 	data-start="5100"
							 	data-easing="easeOutExpo" >
						 		Customer Support
							</div>
							<div class="caption medium_bg_main sfr stt"
								 data-x="920"
								 data-y="235"
								 data-speed="600"
								 data-start="1900"
								 data-easing="easeOutExpo" 
								 data-end="6000"
								 data-endspeed="300" 
								 data-endeasing="easeInSine" >
								 Notification System
							</div>
							<div class="caption medium_bg_main sfr stt"
								 data-x="920"
								 data-y="235"
								 data-speed="600"
								 data-start="6100"
								 data-easing="easeOutExpo"
								 data-end="7500"
								 data-endspeed="300" 
								 data-endeasing="easeInSine" >
								  Enhancing Customer Experience
							</div>
							<div class="caption medium_bg_main sfr stt"
								 data-x="910"
								 data-y="235"
								 data-speed="600"
								 data-start="7600"
								 data-easing="easeOutExpo" >
								Custom Development
							</div>
							<div class="tp-caption medium_bg_main sfb stt"
								 data-x="900"
								 data-y="395"
								 data-speed="600"
								 data-start="2000"
								 data-easing="easeOutExpo" 
								data-end="4000"
								data-endspeed="300" 
								data-endeasing="easeInSine" >
								Maximum Convenience
							</div>
							<div class="tp-caption medium_bg_main sfb stt"
								 data-x="900"
								 data-y="395"
								 data-speed="600"
								 data-start="4100"
								 data-easing="easeOutExpo" 
								data-endspeed="300" 
								data-endeasing="easeInSine" >
								Rewards Program
							</div>
						</li>
						</ul>
						</div>
						</div>
						</section>
				
		<!--Start Footer-->
<?php include("static/footer.html");?>
<script src="js/highcharts.js"></script>
</html>