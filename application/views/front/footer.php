
    <!-- footer-area start -->
    <footer class="footer-area">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-sm-6 col-12">
                        <div class="footer-widget footer-logo">
                            <img src="<?php echo base_url()?>public/Template/assets/images/logo2.png" alt="">
                            <p>There are many variations of passages of Lorem Ipsum available, but the dum majority have suffered alteration in the some form by injected.</p>
                            <form action="#">
                                <input type="text" placeholder="Enter your email">
                                <button>subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer-widget footer-menu">
                            <h3>Our Services</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Crypto Investments</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Customer Insights</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Bitcoin Analytics</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Bitcoin Exchange</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Bitcoin Exchange</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Business Consulting</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer-widget footer-twitter">
                            <h3>Twitter Feeds</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i> https://twitter.com /envatO/ status/944202192013144064 https://twitter.com/envato/status/ 944202192013144064</a> </li>
                                <li class="mb-0"><a href="#"><i class="fa fa-twitter"></i> https://twitter.com /envatO/ status/944202192013144064 https://twitter.com/envato/status/ 944202192013144064</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer-widget footer-contact">
                            <h3>Contact Information</h3>
                            <ul class="footer-contact-info">
                                <li><span>Location: </span> W Jackson Blvd, Chicago United States</li>
                                <li><span>Email: </span> exampleemail.com</li>
                                <li><span>Phone: </span> (123) 45678910</li>
                            </ul>
                            <h5>We are Social</h5>
                            <ul class="social-icon d-flex">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12 copyright">
                        <p><!-- Link back to Colorlib can't be removed. public/Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This public/template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
<!-- Link back to Colorlib can't be removed. public/Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area end -->

    <!-- jquery latest version -->
    <script src="<?php echo base_url()?>public/Template/assets/js/vendor/jquery-2.2.4.min.js "></script>
    <!-- popper.min.js -->
    <script src="<?php echo base_url()?>public/Template/assets/js/vendor/popper.min.js "></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_url()?>public/Template/assets/js/bootstrap.min.js "></script>
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <script src="<?php echo base_url()?>public/Template/assets/js/owl.carousel.min.js "></script>
    <!-- swiper.min.js -->
    <script src="<?php echo base_url()?>public/Template/assets/js/swiper.min.js "></script>
    <!-- mailchimp.js -->
    <script src="<?php echo base_url()?>public/Template/assets/js/mailchimp.js"></script>
    <!-- plugins js -->
    <script src="<?php echo base_url()?>public/Template/assets/js/jquery.canvasjs.min.js"></script>
    <!-- metisMenu.min.js -->
    <script src="<?php echo base_url()?>public/Template/assets/js/metisMenu.min.js"></script>
    <!-- plugins js -->
    <script src="<?php echo base_url()?>public/Template/assets/js/plugins.js "></script>
        <script>
            // chart
    window.onload = function () {
    var limit = 10000;    //increase number of dataPoints by increasing the limit
    var y = 100;    
    var data = [];
    var dataSeries = { type: "line" };
    var dataPoints = [];
    for (var i = 0; i < limit; i += 1) {
        y += Math.round(Math.random() * 10 - 5);
        dataPoints.push({
            x: i,
            y: y
        });
    }
    dataSeries.dataPoints = dataPoints;
    data.push(dataSeries);

    //Better to construct options first and then pass it as a parameter
    var options = {
        zoomEnabled: true,
        animationEnabled: true,
        axisY: {
            includeZero: false
        },
        data: data  // random data
    };

        $("#chartContainer").CanvasJSChart(options);
    }
    </script>
    <!-- main js -->
    <script src="<?php echo base_url()?>public/Template/assets/js/scripts.js"></script>
</body>

</html>