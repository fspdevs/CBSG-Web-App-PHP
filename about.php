<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php include("static/header.html"); ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {

            // Radialize the colors
            Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function(color) {
                return {
                    radialGradient: {
                        cx: 0.5,
                        cy: 0.3,
                        r: 0.7
                    },
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
                    text: 'Small Business Funding Volume'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%<\/b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            color: '#000000',
                            connectorColor: '#000000',
                            align: 'right',
                            formatter: function() {
                                return '<b>' + this.point.name + '<\/b>: ' + Math.round(this.point.percentage * 10) / 10 + ' %';
                            }
                        },

                    }
                },
                series: [{
                    type: 'pie',
                    data: [
                        ['Funded', 33],
                        {
                            name: 'Unfunded',
                            y: 67,
                            sliced: true,
                            selected: true
                        },

                    ]
                }]
            });
        });
    </script>
    <!--[if lt IE 9]>
        <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Preloader -->
    <?php
    $page = 'about';
    include("static/navigation.php"); ?>
    <!-- End Header -->


    <section class="content just-bg">
        <div class="container blue-bg">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" data-effect="slide-bottom">
                    <div class="title no-margin-title">
                        <h2>About Us</h2>
                        <p align="justify">Capital Source 2000 Inc. is a growing leader in the alternative finance industry established by banking and factoring industry veterans in 2015. Our company takes great pride in helping small businesses achieve their full potential by providing the working capital they need to grow their business. We utilize exclusive working relationships with our partners to service our clients, finding the best clients through rigorous non-algorithmic underwriting.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6" data-effect="slide-left">
                    <div class="title_content">
                        <h3>Portfolio Objective</h3>
                    </div>
                    <div class="our_history">
                        <p align="justify">Our portfolio is designed to grow through the responsible management and deployment of investor funds alongside our capital to provide additional funding to small businesses.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6" data-effect="slide-right">
                    <div class="title_content">
                        <h3>Dedication</h3>
                    </div>
                    <div class="our_history">
                        <p align="justify">Capital Source 2000 is dedicated to enhancing your business's productivity while providing the best quality of service.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Start Footer-->
    <?php include("static/footer.html"); ?>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Please enter password to continue.</h4>
                </div>
                <div class="modal-body">
                    <input type='password' id='password' />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id='detailed_info'>Access</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#detailed_info').on('click', function() {
            if ($('#password').val() == '123') {
                window.location = 'http://investcbsg.com/CBSG-Par Funding%20Investment%20Model.pptx';
                $('#myModal').modal('hide');
            } else {
                $('#password').attr('border', '1px solid red');
            }
        });
    </script>
    <script src="js/highcharts.js"></script>
</body>

</html>