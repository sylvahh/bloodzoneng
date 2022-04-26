<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1" />
    <meta name="author" content="SmartTemplates" />
    <meta name="description" content="landing page template for saas companies" />
    <meta name="keywords" content="bloodzone, bloodzone nigeria, blood bank, blood bank management system" />
    <title>Bloodzone NIgeria</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logo/brand.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__content header__content--fluid-width">
            <div class="header__logo-title">
                <img src="{{ asset('images/logo/brand.svg') }}" alt="" style="height:40px">
            </div>
            <nav class="header__menu">
                <ul>
                    <li><a class="selected header-link" href="#intro">HOME</a></li>
                    <li class="menu-item-has-children"><a href="#features" class="header-link">FEATURES</a>
                        <ul class="sub-menu">
                            <li><a href="#about" class="header-link">OUR PRODUCTS</a></li>
                            <li><a href="#about2" class="header-link">HOW IT WORKS</a></li>
                            <li><a href="#clients" class="header-link">OUR CLIENTS</a></li>
                            <!-- <li><a href="#testimonials" class="header-link">TESTIMONIALS</a></li> -->
                            <li><a href="#support" class="header-link">SUPPORT</a></li>
                        </ul>
                    </li>
                    {{-- <li><a href="#pricing" class="header-link">PRICING</a></li> --}}
                    <li><a href="#support" class="header-link">CONTACT</a></li>
                    <li class="header__btn header__btn--login"><a href="https://docs.google.com/forms/d/e/1FAIpQLScMeLZ1cEgRdkbyJQTCDxgN2w_Eq2PUStkexs1wV3Pzhnq9Fg/viewform?usp=sf_link" target="_blank" >Register/Sign-up</a></li>
                    <li class="header__btn header__btn--signup modal-toggle" data-openpopup="signuplogin"
                        data-popup="signup"><a href="#">REQUEST DEMO</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Section -- intro -->
    <section class="section section--intro" id="intro">
        <div class="section__content section__content--fluid-width section__content--intro">
            <div class="intro">
                <div class="intro__content">
                    @if (session('status'))
                    <div class="alert alert-succes" style="color:whitesmoke;">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="intro__title" style="font-size:45px;"><span>Powerful services</span> for your bloodbank
                        needs</div>
                    <div class="intro__subtitle">We believe we have built the most efficient solution to solve all your
                        bloodbank needs.
                    </div>
                    <div class="intro__description">Manage your hospitals blood bank with <span>bloodzones'</span>
                        management system and have access to our centralised database of blood stocks accross the
                        country.</div>
                    <div class="intro__buttons intro__buttons--left">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScMeLZ1cEgRdkbyJQTCDxgN2w_Eq2PUStkexs1wV3Pzhnq9Fg/viewform?usp=sf_link" target="_blank" class="btn btn--blue-bg" data-openpopup="animation">Register/Sign-up</a>
                        <a class="btn btn--orange-bg header__btn header__btn--signup modal-toggle"
                            data-openpopup="signuplogin" data-popup="signup" href="index-2.html">REQUEST
                            DEMO</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-animation">
            <img src="{{ asset('images/intro-animation01.png') }}" alt="" title="" />
        </div>
        <svg class="svg-intro-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"
            preserveAspectRatio="none">
            <path d="M0,70 C30,130 70,50 100,70 L100,100 0,100 Z" fill="#ffffff" />
        </svg>
        <svg class="svg-intro-bottom-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"
            preserveAspectRatio="none">
            <path d="M0,70 C30,130 70,50 100,70 L100,100 0,100 Z" fill="#ffffff" fill-opacity="0.4" />
        </svg>
        <svg class="svg-intro-bottom-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"
            preserveAspectRatio="none">
            <path d="M95,0 Q90,90 10,100 L100,100 100,0 Z" fill="#ffffff" fill-opacity="0.1" />
        </svg>
    </section>

    <!-- Section -- about -->
    <section class="section section--about" id="about">

        <div class="section__content section__content--fluid-width section__content--about">
            <div class="grid grid--5col grid--about">

                <div class="grid__item grid__item--x2">
                    <h3 class="grid__title">Get connected through <span>Bloodzones' Dashboard</span></h3>
                    <p class="grid__text">Connect to blood banks within your region and outside. Contact any blood bank
                        instantly with ease and no hussle with just a click.</p>
                    <ul class="grid__list">
                        <li>Access our database of bloodbanks</li>
                        <li>Very user friendly dashboard interface</li>
                    </ul>

                </div>
                <div class="grid__item grid__item--x3">
                    <div class="grid__image grid__image--right" data-paroller-factor="0.2"
                        data-paroller-type="foreground" data-paroller-direction="vertical"><img
                            src="{{ asset('images/desktop-frame-about-301.png') }}" alt="" title="" /></div>
                </div>
            </div>
        </div>

    </section>
    <!-- Section -- about -->
    <section class="section section--about">

        <div class="section__content section__content--fluid-width section__content--about">
            <div class="grid grid--5col grid--about">

                <div class="grid__item grid__item--x2 grid__item--floated-right">
                    <h3 class="grid__title">Have access to bloodzones' <span>Centralised</span> database</h3>
                    <p class="grid__text">Have complete access to bloodzones centralised databse of available blood
                        stocks from various blood banks accross the country.</p>
                    <ul class="grid__list">
                        <li>Centralised database secured on the cloud</li>
                        <li>Automated blood search & purchase system</li>
                    </ul>

                </div>
                <div class="grid__item grid__item--x3">
                    <div class="grid__image grid__image--left" data-paroller-factor="0.2"
                        data-paroller-type="foreground" data-paroller-direction="vertical"><img
                            src="{{ asset('images/desktop-frame-about-03.png') }}" alt="" title="" /></div>
                </div>

            </div>
        </div>

    </section>
    <!-- Section -- about -->
    <section class="section section--about" id="about2">

        <div class="section__content section__content--fluid-width section__content--about">
            <div class="grid grid--5col grid--about">

                <div class="grid__item grid__item--x2">
                    <h3 class="grid__title">Shared donor <span>records</span></h3>
                    <p class="grid__text">Vital information about donors are shared and managed accross all blood banks
                        to ease
                        operation and decision in blood donation and transfusion.</p>
                    <ul class="grid__list">
                        <li>General control of donor records</li>
                        <li>Register donor once, and access records anywhere</li>
                    </ul>

                </div>
                <div class="grid__item grid__item--x3">
                    <div class="grid__image grid__image--right" data-paroller-factor="0.2"
                        data-paroller-type="foreground" data-paroller-direction="vertical"><img src="{{ asset('images/donors.png' )}}"
                            alt="" title="" /></div>
                </div>
            </div>
        </div>

    </section>

    <!-- Section -- features -->
    <section class="section section--features" id="features">

        <div class="section__content section__content--fluid-width section__content--features">
            <h2 class="section__title section__title--centered">Features designed for you</h2>
            <div class="section__description section__description--centered">
                Bloodzone is built with the <span style="color:red">American red cross</span> standard of bloodbanks
                database management
                and also
                with a
                very simple and user friendly user interface.
            </div>
            <div class="grid grid--3col grid--features">

                <div class="grid__item">
                    <div class="grid__icon"><img src="{{ asset('images/icons/icons-64-violet/responsive-64.png') }}" alt="" title="" />
                    </div>
                    <h3 class="grid__title"><span>Responsive</span> Dashboard Design</h3>
                    <p class="grid__text">The responsive dashboard design makes your application dashboard look good on
                        all devices
                        (desktops, tablets, and phones). Created with mobile specialists.</p>
                </div>

                <div class="grid__item">
                    <div class="grid__icon"><img src="{{ asset('images/icons/icons-64-violet/desktop-chart-64.png') }}" alt=""
                            title="" /></div>
                    <h3 class="grid__title">Blood bank performance <span>Analysis</span></h3>
                    <p class="grid__text">Bloodzone analizes your blood banks performance and generate a monthly report
                        based on your activities and operations for better desicions making and impovements.</p>
                </div>

                <div class="grid__item">
                    <div class="grid__icon"><img src="{{ asset('images/icons/icons-64-violet/browser-64.png') }}" alt="" title="" />
                    </div>
                    <h3 class="grid__title">Cloud-based <span>centralised</span> database</h3>
                    <p class="grid__text">bloodzone houses all the blood bank stocks in a centralised database hosted on
                        the cloud for ease of access from any where and for reduction of paper documentation.</p>
                </div>

            </div>

            <div class="grid grid--3col grid--features">


                <div class="grid__item">
                    <div class="grid__icon"><img src="{{ asset('images/icons/icons-64-violet/users-64.png') }}" alt="" title="" />
                    </div>
                    <h3 class="grid__title">User <span>Friendly</span></h3>
                    <p class="grid__text">Easy to navigate. Made with user experience in mind, in order to provide the
                        perfect experience for you and your blood bank staffs.</p>
                </div>

                <div class="grid__item">
                    <div class="grid__icon"><img src="{{ asset('images/icons/icons-64-violet/security-64.png' )}}" alt="" title="" />
                    </div>
                    <h3 class="grid__title">Best online <span>Security</span></h3>
                    <p class="grid__text">The whole bloodzone solution is housed under the cloud based infrastructure
                        and a sophisticated framework to ensure complete security against threats and bridges.</p>
                </div>

                <div class="grid__item">
                    <div class="grid__icon"><img src="{{ asset('images/icons/icons-64-violet/target-64.png') }}" alt="" title="" />
                    </div>
                    <h3 class="grid__title">Bloodzone <span>Mobile application</span></h3>
                    <p class="grid__text">The bloodzone solution also includes a free mobile application for donors
                        support intended to help them monitor their donation information and their blood health.</p>
                </div>

            </div>
        </div>


    </section>



    <!-- Section -- pricing -->
    {{-- <section class="section" id="pricing">

        <div class="section__content section__content--fluid-width section__content--padding">
            <h2 class="section__title section__title--centered">
                Our Plans
            </h2>
            <div class="section__description section__description--centered">
                We believe we have created the most efficient SaaS landing page for your users. Landing page with
                features that will convince you to use it for your SaaS business.
            </div>


            <div class="pricing">
                <div class="pricing__switcher switcher">
                    <div class="switcher__buttons">
                        <div class="switcher__button switcher__button--enabled">Coming Soon</div>
                        <!-- <div class="switcher__button">Yearly</div> -->
                        <div class="switcher__border"></div>
                    </div>

                </div>


                <div class="pricing__plan">
                    <h3 class="pricing__title">FREE</h3>
                    <div class="pricing__values">
                        <div class="pricing__value pricing__value--show"><span>$</span>-- <b>/ month</b></div>
                        <div class="pricing__value pricing__value--hide pricing__value--hidden"><span>$</span>-- <b>/
                                yearly</b></div>
                    </div>
                    <!-- <ul class="pricing__list">
                        <li><b>1</b> User Account</li>
                        <li><b>10</b> Team Members</li>
                        <li><b>Unlimited</b> Emails Accounts</li>
                        <li>Set And Manage Permissions</li>
                        <li class="disabled">API &amp; extension support</li>
                        <li class="disabled">Developer support</li>
                        <li class="disabled">A / B Testing</li>
                    </ul> -->
                    <ul class="pricing__list" style="color:red">
                        Coming Soon
                    </ul>
                    <a class="pricing__signup header__btn header__btn--signup modal-toggle" data-openpopup="signuplogin"
                        data-popup="signup" href="#">Request Demo</a>
                </div>
                <div class="pricing__plan pricing__plan--popular">
                    <div class="pricing__badge-bg"></div>
                    <div class="pricing__badge-text">POPULAR</div>
                    <h3 class="pricing__title">PRO</h3>
                    <div class="pricing__values">
                        <div class="pricing__value pricing__value--show"><span>$</span>-- <b>/ month</b></div>
                        <div class="pricing__value pricing__value--hide pricing__value--hidden"><span>$</span>-- <b>/
                                yearly</b></div>
                    </div>
                    <ul class="pricing__list">
                        <!-- <li><b>50</b> User Account</li>
                        <li><b>500</b> Team Members</li>
                        <li><b>Unlimited</b> Emails Accounts</li>
                        <li>Set And Manage Permis sions</li>
                        <li>API &amp; extension support</li>
                        <li>Developer support</li>
                        <li class="disabled">A / B Testing</li> -->
                        Coming Soon
                    </ul>
                    <a class="pricing__signup header__btn header__btn--signup modal-toggle" data-openpopup="signuplogin"
                        data-popup="signup" href="#">Request Demo</a>
                </div>
                <div class="pricing__plan">
                    <h3 class="pricing__title">ULTRA</h3>
                    <div class="pricing__values">
                        <div class="pricing__value pricing__value--show"><span>$</span>-- <b>/ month</b></div>
                        <div class="pricing__value pricing__value--hide pricing__value--hidden"><span>$</span>-- <b>/
                                yearly</b></div>
                    </div>
                    <ul class="pricing__list">
                        <!-- <li><b>Unlimited</b> User Account</li>
                        <li><b>Unlimited</b> Team Members</li>
                        <li><b>Unlimited</b> Emails Accounts</li>
                        <li>Set And Manage Permissions</li>
                        <li>API &amp; extension support</li>
                        <li>Developer support</li>
                        <li>A / B Testing</li> -->
                        Coming Soon
                    </ul>
                    <a class="pricing__signup header__btn header__btn--signup modal-toggle" data-openpopup="signuplogin"
                        data-popup="signup" href="#">Request Demo</a>
                </div>
            </div>

            <div class="clear"></div>
        </div>

    </section> --}}

    <!-- Section -- testimonials -->
    <!-- <section class="section section--testimonials" id="testimonials">

        <div class="section__content section__content--fluid-width section__content--padding">
            <h2 class="section__title section__title--centered">Success stories</h2>
            <div class="testimonials">
                <div class="testimonials__content swiper-wrapper">
                    <div class="testimonials__slide swiper-slide">
                        <div class="testimonials__thumb" data-swiper-parallax="-50%"><img src="images/avatar-1.jpg"
                                alt="" title="" /></div>
                        <div class="testimonials__source">Lason Duvan <a href="#">New York Business Center</a></div>
                        <div class="testimonials__text" data-swiper-parallax="-100%">
                            <p>"Business is all about the customer: what the customer wants and what they get. "</p>
                        </div>

                    </div>
                    <div class="testimonials__slide swiper-slide">
                        <div class="testimonials__thumb" data-swiper-parallax="-50%"><img src="images/avatar-2.jpg"
                                alt="" title="" /></div>
                        <div class="testimonials__source">Jada Sacks <a href="#">Paris Tehnics</a></div>
                        <div class="testimonials__text" data-swiper-parallax="-100%">
                            <p>" I've internalized it to the point of understanding that the success of my actions
                                and/or endeavors"</p>
                        </div>

                    </div>
                    <div class="testimonials__slide swiper-slide">
                        <div class="testimonials__thumb" data-swiper-parallax="-50%"><img src="images/avatar-3.jpg"
                                alt="" title="" /></div>
                        <div class="testimonials__source">Lason Duvan <a href="#">Music Software</a></div>
                        <div class="testimonials__text" data-swiper-parallax="-100%">
                            <p>"The American Dream is that any man or woman, despite of his or her background, can
                                change their circumstances"</p>
                        </div>

                    </div>
                    <div class="testimonials__slide swiper-slide">
                        <div class="testimonials__thumb" data-swiper-parallax="-50%"><img src="images/avatar-4.jpg"
                                alt="" title="" /></div>
                        <div class="testimonials__source">Duran Jackson <a href="#">New York Business Center</a></div>
                        <div class="testimonials__text" data-swiper-parallax="-100%">
                            <p>"Generally, every customer wants a product or service that solves their problem, worth
                                their money"</p>
                        </div>

                    </div>
                    <div class="testimonials__slide swiper-slide">
                        <div class="testimonials__thumb" data-swiper-parallax="-50%"><img src="images/avatar-5.jpg"
                                alt="" title="" /></div>
                        <div class="testimonials__source">Maria Allesi <a href="#">Italy Solutions</a></div>
                        <div class="testimonials__text" data-swiper-parallax="-100%">
                            <p>"No one can make you successful; the will to success comes from within.' I've made this
                                my motto."</p>
                        </div>

                    </div>
                    <div class="testimonials__slide swiper-slide">
                        <div class="testimonials__thumb" data-swiper-parallax="-50%"><img src="images/avatar-6.jpg"
                                alt="" title="" /></div>
                        <div class="testimonials__source">Jenifer Patrison<a href="#">App Dating</a></div>
                        <div class="testimonials__text" data-swiper-parallax="-100%">
                            <p>"Can change their circumstances and rise as high as they are willing to work"</p>
                        </div>

                    </div>
                </div>

                <div class="testimonials__pagination swiper-pagination"></div>
                <div class="testimonials__button--next swiper-button-next"></div>
                <div class="testimonials__button--prev swiper-button-prev"></div>
            </div>
            <div class="clear"></div>
        </div>

    </section> -->


    <!-- Section -->
    <section class="section" id="support">
        <div class="section__content section__content--fluid-width section__content--padding">
            <div class="grid grid--2col grid--support">
                <div class="grid__item grid__item--padding">

                    <h3 class="grid__title">Help &amp; Support</h3>
                    <p class="grid__text">Your issue is our main priority. Our 24/7 support team is here to help you and
                        make sure our product is up to date. Have a presale question about our products and features? We would love to hear what you concern is. Online awards and publications.
                        Get our media resources and learn about our company information.</p>
                </div>
                <div class="grid__item grid__item--padding grid__item--centering">
                    <a href="#" class="grid__more pricing__signup header__btn header__btn--signup modal-toggle"
                        data-openpopup="signuplogin" data-popup="signup" href="#">GET IN TOUCH NOW</a>
                </div>
                <svg class="svg-support-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"
                    preserveAspectRatio="none">
                    <path d="M0,90 Q0,100 3,100 L95,96 Q100,96 99,80 L95,25 Q94,15 90,15 L6,0 Q2,0 2,10 Z"
                        fill="#fb993e" />
                </svg>
            </div>
            <div class="clear"></div>
        </div>

    </section>


    <!-- Section -->
    <section class="section section--clients" id="clients">
        <!-- <div class="section__content section__content--fluid-width">
            <div class="grid grid--5col">

                <div class="grid__item">
                    <div class="grid__client-logo"><a href="#"><img src="images/clients/clients-logo1.png" alt=""
                                title="" /></a></div>
                </div>
                <div class="grid__item">
                    <div class="grid__client-logo"><a href="#"><img src="images/clients/clients-logo2.png" alt=""
                                title="" /></a></div>
                </div>
                <div class="grid__item">
                    <div class="grid__client-logo"><a href="#"><img src="images/clients/clients-logo3.png" alt=""
                                title="" /></a></div>
                </div>
                <div class="grid__item">
                    <div class="grid__client-logo"><a href="#"><img src="images/clients/clients-logo4.png" alt=""
                                title="" /></a></div>
                </div>
                <div class="grid__item">
                    <div class="grid__client-logo"><a href="#"><img src="images/clients/clients-logo5.png" alt=""
                                title="" /></a></div>
                </div>
            </div>

        </div> -->
        <svg class="svg-cta-top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0,70 C30,130 70,50 100,70 L100,100 0,100 Z" fill="#e74a3b" />
        </svg>
    </section>

    <!-- Section -->
    <section class="section section--cta" id="cta">
        <div class="section__content section__content--fluid-width section__content--padding section__content--cta">
            <h2 class="section__title section__title--centered section__title--cta">Get Started Now!</h2>
            <div class="section__description section__description--centered section__description--cta">
                We believe we have created the most efficient SaaS landing page for your users. Landing page with
                features that will convince you to use it for your SaaS business.
            </div>
            <div class="intro__buttons intro__buttons--centered">
                <a class="btn btn--orange-bg header__btn header__btn--signup modal-toggle"
                            data-openpopup="signuplogin" data-popup="signup" href="index-2.html">REQUEST DEMO</a>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScMeLZ1cEgRdkbyJQTCDxgN2w_Eq2PUStkexs1wV3Pzhnq9Fg/viewform?usp=sf_link" target="_blank" class="btn btn--orange-bg">Register/Sign-up</a>
            </div>
        </div>
        <svg class="svg-cta-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0,70 C30,130 70,50 100,70 L100,100 0,100 Z" fill="#ffffff" />
        </svg>
    </section>


    <footer class="footer" id="footer">
        <div class="footer__content footer__content--fluid-width footer__content--svg">

            <div class="grid grid--5col">

                <div class="grid__item grid__item--x2">
                    <h3 class="grid__title grid__title--footer-logo">
                        <img src="{{ asset('images/logo/brand.svg') }}" alt="" style="height:40px">
                    </h3>
                    <p class="grid__text grid__text--copyright">Copyright &copy; 2020 Bloodzone. <br />All Rights
                        Reserved. Proudly made in EU. </p>
                    <ul class="grid__list grid__list--sicons">
                        <li><a href="#"><img src="{{ asset('images/social/black/twitter.png') }}" alt="" title="" /></a></li>
                        <li><a href="#"><img src="{{ asset('images/social/black/facebook.png') }}" alt="" title="" /></a></li>
                        <li><a href="#"><img src="{{ asset('images/social/black/linkedin.png') }}" alt="" title="" /></a></li>
                    </ul>
                </div>
                <div class="grid__item">
                    <h3 class="grid__title grid__title--footer">Company</h3>
                    <ul class="grid__list grid__list--fmenu">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Carrers</a></li>
                        <li><a href="#">Awards</a></li>
                        <li><a href="#">Users Program</a></li>
                        <li><a href="#">Locations</a></li>
                    </ul>
                </div>
                <div class="grid__item">
                    <h3 class="grid__title grid__title--footer">Products</h3>
                    <ul class="grid__list grid__list--fmenu">

                        <li><a href="#">Integrations</a></li>
                        <li><a href="#">API</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Release Notes</a></li>
                    </ul>
                </div>
                <div class="grid__item">
                    <h3 class="grid__title grid__title--footer">Support</h3>
                    <ul class="grid__list grid__list--fmenu">
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Press</a></li>

                    </ul>
                </div>

            </div>


        </div>


    </footer>

    <!-- beta program -->
    <section class="modal modal--signuplogin">
        <div class="modal__overlay modal__overlay--toggle"></div>
        <div class="modal__wrapper modal-transition">
            <!-- <div class="modal__body">
                <div class="modal__content modal__content--login">
                    <div class="modal__info">
                        <h2 class="modal__title">Launch With Us</h2>
                        <div class="modal__descr">Join our beta program now</div>
                        <ul class="modal__list">
                            Get free installation with <span>20%
                                OFF</span> for all
                            products
                        </ul>
                    </div>
                    <div class="modal__form form">
                        <h2 class="form__title">Beta</h2>
                        <form class="form__container" id="LoginForm" method="post" action="#">

                            <div class="form__row">
                                <label class="form__label" for="namec">Facility Name*</label>
                                <input name="namec" id="namec" class="form__input" type="text" />
                                <span class="form__row-border"></span>
                            </div>
                            <div class="form__row">
                                <label class="form__label" for="namec">Address*</label>
                                <input name="namec" id="namec" class="form__input" type="text" />
                                <span class="form__row-border"></span>
                            </div>
                            <div class="form__row">
                                <label class="form__label" for="namec">Phone*</label>
                                <input name="namec" id="namec" class="form__input" type="text" />
                                <span class="form__row-border"></span>
                            </div>
                            <div class="form__row">
                                <label class="form__label">Email*</label>
                                <input name="emailc" class="form__input" type="text" />
                                <span class="form__row-border"></span>
                            </div>

                            <input type="submit" name="submit" class="form__submit btn btn--green-bg" id="submitl"
                                value="LOGIN" />
                        </form>
                    </div>
                </div> End Modal beta program -->

            <div class="modal__content modal__content--forgot">
                <div class="modal__form form">
                    <h2 class="form__title">Forgot Password</h2>
                    <form class="form__container" id="ForgotForm" method="post" action="#">
                        <div class="form__row">
                            <label class="form__label">Email</label>
                            <input name="emailf" class="form__input" type="text" />
                            <span class="form__row-border"></span>
                        </div>
                        <input type="submit" name="submit" class="form__submit btn btn--green-bg" id="submitf"
                            value="RESET PASSWORD" />
                    </form>
                </div>
                <div class="modal__info">
                    <h2 class="modal__title">We got you covered</h2>
                    <div class="modal__descr">A new password will be sent by email. Remembered your password?</div>
                    <button class="modal__switch modal__switch--signup" data-popup="login">Login</button>
                </div>
            </div> <!-- End Modal login -->


            <div class="modal__content modal__content--signup">
                <div class="modal__form form">
                    <h2 class="form__title">Request Demo</h2>
                    <form class="form__container" id="SignupForm" method="post" action="/demo-request">
                        @csrf
                        <div class="form__row">
                            <label class="form__label" for="names">Hospital Name</label>
                            <input name="hospital_name" id="names" class="form__input" type="text" />
                            <span class="form__row-border"></span>
                        </div>
                        <div class="form__row">
                            <label class="form__label" for="names">Hospital Addess</label>
                            <input name="hospital_address" id="names" class="form__input" type="text" />
                            <span class="form__row-border"></span>
                        </div>
                        <div class="form__row">
                            <label class="form__label" for="names">Hospital Phone</label>
                            <input name="phone" id="names" class="form__input" type="text" />
                            <span class="form__row-border"></span>
                        </div>
                        <div class="form__row">
                            <label class="form__label">Email</label>
                            <input name="email" class="form__input" type="text" />
                            <span class="form__row-border"></span>
                        </div>
                        <input type="submit" name="submit" class="form__submit btn btn--green-bg" id="submit"
                            value="SUBMIT" />
                    </form>
                </div>
                <div class="modal__info">
                    <h2 class="modal__title">Need a demostration of our software?</h2>
                    <div class="modal__descr">Hit us up and we will get to you ASAP</div>
                    <!-- <ul class="modal__list">
                        <li>premium access to all products</li>
                        <li>free testing tools</li>
                        <li>unlimited user accounts</li>
                    </ul> -->
                </div>
            </div> <!-- End Modal signup -->

        </div>

        </div>
    </section> <!-- Modal for Login and Signup -->

    <section class="modal modal--animation">
        <div class="modal__overlay modal__overlay--toggle"></div>
        <div class="modal__wrapper modal__wrapper--image modal-transition">
            <div class="modal__body">
                <button class="modal__close modal__overlay--toggle"><span></span></button>
                <div class="modal__header">How it works animation</div>

                <div class="modal__image">
                    <img src="{{ asset('images/intro-animation.gif') }}" alt="" title="" />
                </div>
            </div>
        </div>
    </section> <!-- Modal for animation -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('js/jquery.custom.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/swiper.custom.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
</body>

</html>