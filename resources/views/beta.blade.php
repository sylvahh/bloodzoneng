<!DOCTYPE html>

<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <link href='../../../../fonts.googleapis.com/cssaaf0.css?family=Open+Sans:400,600,700,300' rel='stylesheet'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beta - Coming Soon Responsive Template</title>
    <meta name="description" content="Coming Soon Responsive Template">
    <link href="{{ asset('beta/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('beta/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('beta/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('beta/css/red.css') }}" rel="alternate stylesheet" title="red">
    <!-- <link href="css/yellow.css" rel="alternate stylesheet" title="yellow">
    <link href="css/blue.css" rel="alternate stylesheet" title="blue"> -->
</head>

<body>

    <!--hero-unit-->
    <div class="hero-unit">
        <div class="overlay"></div>
        <!--container-->
        <div class="container">
            <header class="row">
                <div class="col-md-6 col-sm-6">
                    <!--logo-->
                    <div class="logo">
                        <img src="images/logo/bloodzone_logo01.png" alt="logo" style="height:50px;">
                    </div>
                    <!--logo end-->
                </div>
                <div class="col-md-6 col-sm-6 clearfix">
                    <!--social-->
                    <ul class="social text-center">
                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                    <!--social end-->
                </div>
            </header>

            <!--cta-->
            <div class="cta">
                <div class="row">
                    <div class="col-md-6 center-block">
                        <header class="welcome-message text-center">
                            <h1>Get <span class="highlight">Early Access</span></h1>
                            @if (session('status'))
                            <div class="alert alert-succes" style="color:whitesmoke;">
                                {{ session('status') }}
                            </div>
                            @endif
                            <h2>Join Now</h2>
                            <!--sub-form-->
                            <div class="sub-form">
                                <form role="form" id="mc-form" action="/beta-registration" method="POST">
                                    @csrf
                                    <input type="email" placeholder="Email Address" required value="" name="email">
                                    <button type="submit" class="button" name="subscribe">GET ACCESS</button>
                                </form>
                                <p class="terms">* We won’t spam</p>
                                <p id="mc-notification"></p>
                            </div>
                            <!--sub-form end-->
                        </header>
                    </div>
                </div>
            </div>
            <!--cta end-->

        </div>
        <!--container end-->

    </div>
    <!--hero-unit end-->

    <!--countdown timer-->
    <div class="timer section-spacing">
        <div class="container">
            <h2 class="text-center">TIME LEFT FOR LAUNCH</h2>
            <div class="row">
                <div class="col-md-12">
                    <!-- Countdown-->
                    <!-- <ul class="countdown text-center">
                        <li class="slide-left"> <span class="days">00</span>
                            <p class="days_ref">days</p>
                        </li>
                        <li class="slide-left seperator">:</li>
                        <li class="slide-bottom"> <span class="hours">00</span>
                            <p class="hours_ref">hours</p>
                        </li>
                        <li class="slide-bottom seperator">:</li>
                        <li class="slide-top"> <span class="minutes">00</span>
                            <p class="minutes_ref">minutes</p>
                        </li>
                        <li class="slide-top seperator">:</li>
                        <li class="slide-right"> <span class="seconds">00</span>
                            <p class="seconds_ref">seconds</p>
                        </li> -->
                    <!-- Display the countdown timer in an element -->
                    <h1 class="text-weight-bold text-danger" id="demo" style="text-align:center; font-family:times">
                    </h1>

                    <script>
                    // Set the date we're counting down to
                    var countDownDate = new Date("Feb 15, 2020 12:00:00").getTime();

                    // Update the count down every 1 second
                    var x = setInterval(function() {

                        // Get today's date and time
                        var now = new Date().getTime();

                        // Find the distance between now and the count down date
                        var distance = countDownDate - now;

                        // Time calculations for days, hours, minutes and seconds
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        // Display the result in the element with id="demo"
                        document.getElementById("demo").innerHTML = days + "days " + hours + "h " +
                            minutes + "m " + seconds + "s ";

                        // If the count down is finished, write some text
                        if (distance < 0) {
                            clearInterval(x);
                            document.getElementById("demo").innerHTML = "TIME UP";
                        }
                    }, 1000);
                    </script>
                    </ul>
                    <!-- Countdown end-->
                </div>
            </div>
        </div>
    </div>
    <!--countdown timer end-->

    <!--features-->
    <section class="features text-center section-spacing">
        <!--container-->
        <div class="container">
            <h2>OUR FEATURES</h2>
            <div class="row">

                <div class="col-md-4 mb-4">
                    <div class="grid__icon"><img src="images/icons/icons-64-violet/responsive-64.png" alt="" title="" />
                    </div>
                    <h3 class="grid__title"><span>Responsive</span> Dashboard Design</h3>
                    <p class="grid__text">The responsive dashboard design makes your application dashboard look good
                        on
                        all devices
                        (desktops, tablets, and phones). Created with mobile specialists.</p>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="grid__icon"><img src="images/icons/icons-64-violet/desktop-chart-64.png" alt=""
                            title="" /></div>
                    <h3 class="grid__title">Blood bank performance <span>Analysis</span></h3>
                    <p class="grid__text">Bloodzone analizes your blood banks performance and generate a monthly
                        report
                        based on your activities and operations for better desicions making and impovements.</p>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="grid__icon"><img src="images/icons/icons-64-violet/browser-64.png" alt="" title="" />
                    </div>
                    <h3 class="grid__title">Cloud-based <span>centralised</span> database</h3>
                    <p class="grid__text">bloodzone houses all the blood bank stocks in a centralised database
                        hosted on
                        the cloud for ease of access from any where and for reduction of paper documentation.</p>
                </div>

                <div class="col-md-4">
                    <div class="grid__icon"><img src="images/icons/icons-64-violet/users-64.png" alt="" title="" />
                    </div>
                    <h3 class="grid__title">User <span>Friendly</span></h3>
                    <p class="grid__text">Easy to navigate. Made with user experience in mind, in order to provide
                        the
                        perfect experience for you and your blood bank staffs.</p>
                </div>

                <div class="col-md-4">
                    <div class="grid__icon"><img src="images/icons/icons-64-violet/security-64.png" alt="" title="" />
                    </div>
                    <h3 class="grid__title">Best online <span>Security</span></h3>
                    <p class="grid__text">The whole bloodzone solution is housed under the cloud based
                        infrastructure
                        and a sophisticated framework to ensure complete security against threats and bridges.</p>
                </div>

                <div class="col-md-4">
                    <div class="grid__icon"><img src="images/icons/icons-64-violet/target-64.png" alt="" title="" />
                    </div>
                    <h3 class="grid__title">Bloodzone <span>Mobile application</span></h3>
                    <p class="grid__text">The bloodzone solution also includes a free mobile application for donors
                        support intended to help them monitor their donation information and their blood health.</p>
                </div>
            </div>
        </div>
        <!--container end-->
    </section>
    <!--features end-->

    <!--counter-->
    <div class="counter text-center">
        <div class="overlay"></div>
        <!--container-->
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-6"> <i class="fa fa-users fa-3x"></i>
                    <h3 class="">--,--</h3>
                    <p>Registered users</p>
                </div>
                <div class="col-sm-3 col-xs-6"> <i class="fa fa-thumbs-up fa-3x"></i>
                    <h3 class="">0</h3>
                    <p>Facebook Fans</p>
                </div>
                <div class="col-sm-3 col-xs-6"> <i class="fa fa-smile-o fa-3x"></i>
                    <h3 class="">0</h3>
                    <p>Talking About This</p>
                </div>
                <div class="col-sm-3 col-xs-6"> <i class="fa fa-heart fa-3x"></i>
                    <h3 class="">0</h3>
                    <p>Subscribed Users</p>
                </div>
            </div>
        </div>
        <!--container end-->
    </div>
    <!--counter end-->

    <!-- contact-->
    <section class="contact section-spacing" id="contact">
        <h2 class="text-center">CONTACT US</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-8 center-block">

                    <!--contact form-->

                    <div class="contact-form">
                        <div class="success-sf">
                            <p>Thank You! Your message has been sent.</p>
                        </div>
                        <div class="error-sf">
                            <p>Something went wrong, try refreshing and submitting the form again.</p>
                        </div>
                        <form role="form" action="http://csmthemes.com/themes/beta/static2/php/process.php"
                            method="post" id="contact-form">
                            <div class="form-group">
                                <input type="text" class="slide-left form-control" name="name" id="name-s"
                                    placeholder="Full Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="slide-left form-control" name="email" id="email-s"
                                    placeholder="Email Address" required>
                            </div>
                            <div class="form-group text-area">
                                <textarea class="slide-right form-control" name="message" id="message-s" rows="4"
                                    placeholder="Enter Your Message" required></textarea>
                            </div>
                            <button type="submit" class="slide-right btn button" id="submit-btn-s">SEND </button>
                        </form>

                        <!--contact form end-->

                    </div>
                </div>
            </div>
        </div>
        <p class="scroll-top"><a href="#"><i class="fa fa-chevron-up"></i></a></p>
    </section>
    <!-- contact end-->

    <!--footer-->
    <footer class="site-footer text-center">
        <!--container-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!--Social media-->
                    <ul class="social-footer">
                        <li class="slide-left"><a href="https://twitter.com/" target="_blank"><i
                                    class="fa fa-twitter"></i></a></li>
                        <li class="slide-top"><a href="https://www.facebook.com/" target="_blank"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li class="slide-top"><a href="https://plus.google.com/" target="_blank"><i
                                    class="fa fa-google-plus"></i></a></li>
                        <li class="slide-right"><a href="https://www.linkedin.com/" target="_blank"><i
                                    class="fa fa-linkedin"></i></a></li>
                    </ul>
                    <!--Social media end-->

                    <small class="slide-top">&copy; <span class="bold">Beta</span> 2018.</small>
                </div>
            </div>
        </div>
        <!--container end-->

    </footer>
    <!--footer end-->

    <!--PRELOAD-->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!--end PRELOAD-->

    <!--Theme switcher-->
    <!-- <div id="customizer" class="panel-closed text-center"> <span class="panel-control"><span class="cog"></span></span>
        <div id="options">
            <div class="options-head"> Style Switcher </div>
            <div class="options-box clearfix">
                <h6 class="color-head">Color Scheme</h6>
                <ul class="color-scheme clearfix">
                    <li class="blue"><a href="css/red.html" data-rel="blue" class="styleswitch"></a></li>
                    <li class="yellow"><a href="css/red.html" data-rel="yellow" class="styleswitch"></a></li>
                    <li class="red"><a href="css/red.html" data-rel="red" class="styleswitch"></a></li>
                    <li class="default"><a href="css/red.html" data-rel="green" class="styleswitch"></a></li>
                </ul>
            </div>
        </div>
    </div> -->
    <!--Theme switcher end-->

    <script src="{{ asset('beta/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('beta/js/retina.min.js') }}"></script>
    <script src="{{ asset('beta/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('beta/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('beta/js/jquery.fadethis.min.js') }}"></script>
    <script src="{{ asset('beta/js/jquery.downCount.js')}}"></script>
    <script src="{{ asset('beta/js/jquery.form.min.js')}}"></script>
    <script src="{{ asset('beta/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('beta/js/themeswitch.js') }}"></script>
    <script src="{{ asset('beta/js/main.js') }}"></script>
</body>

</html>