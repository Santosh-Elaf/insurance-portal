@section('header')
<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <title>Insurance Aggregator - @yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('front_assets/css/normalize.css')}}">
        <!-- Iconfont Link -->
        <link rel="stylesheet" href="{{asset('front_assets/icofont/icofont.min.css')}}" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('front_assets/bootstrap/css/bootstrap.min.css')}}">
        <!-- IA Stylesheet -->
        <link rel="stylesheet" href="{{asset('front_assets/css/ia-styles.css')}}" />
        <link rel="stylesheet" href="{{asset('front_assets/css/responsive.css')}}" />
        <!-- Font Styles -->
        <link rel="stylesheet" href="{{asset('front_assets/css/fonts.css')}}" />
        <!-- Animate CSS & JS -->
        <link rel="stylesheet" href="{{asset('front_assets/css/animate.css')}}" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{asset('front_assets/js/wow.min.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var readURL = function(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('.avatar').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $(".file-upload").on('change', function(){
                    readURL(this);
                });
            });
            
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
        </script>
        <!-- GOOGLE TRANSLATE -->
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </head>
    <body>
@show
        @section('navbar')
        <header>
            <nav class="navbar navbar-light nav-spacing fixed-top">
                <a href="{{url('')}}" class="navbar-brand">ELAF INSURANCE</a>
                <form class="form-inline">
                    @if(Session::has('loginUsrName'))  
                    <a href="javascript:void(0);" class="nav-link navbar-link">Hello {{Session::get('loginUsrName')}} </a>
                    <button class="btn btn-outline-primary my-2 my-sm-0 nav-btn"><a href="{{url('logout')}}" >Logout</a></button>
                    <button class="btn btn-outline-primary my-2 my-sm-0 nav-btn"><a href="{{url('user_profile')}}" >Profile</a></button>
                    @else
                    <a href="{{url('signin')}}" class="nav-link navbar-link">SignIn</a>
                    <!-- <a href="{{url('signup')}}"><button class="btn btn-outline-primary my-2 my-sm-0 nav-btn">Sign up</button></a> -->
                    <button class="btn btn-outline-primary my-2 my-sm-0 nav-btn"><a href="{{url('signup')}}" >SignUp</a></button>
                    @endif  
                    <a href="javascript:void(0);" class="nav-link navbar-link">EN</a>
                </form>
            </nav>
        </header>
        @show
        @section('content')
        <!-- HERO SECTION STARTS -->
        <div class="row mx-0">
            <div class="col-lg-6 px-0">
                <div class="db-bg hero-spacing bg-dot">
                    <div class="hero-content">
                        <h1>We made</h1>
                        <h1>vehicle insurance</h1>
                        <h1>easy for you!</h1>
                        <p>Your vehicle inusrance is just few swipes away.
                            Experience fastest, safest and reliable Insurance Platform
                            in Kingdom of Saudi Arabia.
                        </p>
                        <div class="d-flex">
                            <button class="btn btn-primary brand-btn-lb">Get Started</button>
                            <button class="btn btn-primary brand-btn-lb-outline mr-2">Know More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 px-0 hero-ban-mob">
                <div class="lb-bg hero-spacing">
                    <div class="hero-banner">
                        <img src="{{asset('front_assets/images/image-1.png')}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-tab">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="hero-white-wrapper">
                            <div class="achievement row align-items-center">
                                <div class="col-6">
                                    <h3>٩٦٪</h3>
                                </div>
                                <div class="col-6">
                                    <i class="icofont-star achievement-star"></i>
                                </div>
                            </div>
                            <div class="hero-white-wrapper-title">
                                <h4>تقييم العملاء</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hero-blue-wrapper">
                            <div class="achievement-blue row align-items-center">
                                <div class="col-6">
                                    <h3>٢٠Cr+</h3>
                                </div>
                                <div class="col-6">
                                    <i class="icofont-simple-smile achievement-smile"></i>
                                </div>
                            </div>
                            <div class="hero-blue-wrapper-title">
                                <h4>عملاء سعداء</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hero-white-wrapper">
                            <div class="achievement row align-items-center">
                                <div class="col-6">
                                    <h3>٩٩٪</h3>
                                </div>
                                <div class="col-6">
                                    <i class="icofont-diamond achievement-diamond"></i>
                                </div>
                            </div>
                            <div class="hero-white-wrapper-title">
                                <h4>ضمان جودة الخدمة</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HERO SECTION ENDS -->
        <!-- CHOOSE VEHICLE TYPE SECTION STARTS -->
        <section class="section-spacing city-bg">
            <div class="container">
                <div class="small-title text-md-center">
                    <h6>Choose your vehicle</h6>
                </div>
                <div class="big-title text-md-center text-black">
                    <h3>Get Your Vehicle Insured</h3>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <!-- <a href="#" data-toggle="modal" data-target="#nationalDetailsModal"> -->
                        <a href="{{url('apply_insurance')}}">
                            <div class="vt-wrapper">
                                <i class="icofont-car-alt-1"></i>
                                <h3>Cars</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <!-- <a href="#" data-toggle="modal" data-target="#nationalDetailsModal"> -->
                        <a href="{{url('apply_insurance')}}" >
                            <div class="vt-wrapper">
                                <i class="icofont-motor-biker"></i>
                                <h3>Motorcycle</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- CHOOSE VEHICLE TYPE SECTION ENDS -->
        <!-- CHOOSE US SECTION STARTS -->
        <section class="section-spacing db-bg">
            <div class="container">
                <div class="small-title text-md-center">
                    <h6>Why Choose Us</h6>
                </div>
                <div class="big-title text-md-center text-white">
                    <h3>We Provide Best Features</h3>
                    <h3>For Our Clients</h3>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="features-content features-border">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <div class="features-icon text-md-center mb-3">
                                        <i class="icofont-chart-line-alt"></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="features-detail">
                                        <h5>Incredibly Low Prices</h5>
                                        <p>We thrive to provide the lowest insurance
                                            yet beneficial policies for our customers.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features-content features-border">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <div class="features-icon text-md-center mb-3">
                                        <i class="icofont-money"></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="features-detail">
                                        <h5>High Savings</h5>
                                        <p>We make sure that our customers make
                                            highest saving possible on each plan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features-content">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <div class="features-icon text-md-center mb-3">
                                        <i class="icofont-safety"></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="features-detail">
                                        <h5>Fully Secured</h5>
                                        <p>Your transactions and details are
                                            completely secured with us.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="feature-banner">
                            <img class="img-fluid" src="{{asset('front_assets/images/image-4.jpeg')}}">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CHOOSE US SECTION ENDS -->
        <!-- STEPS SECTION STARTS -->
        <section class="section-spacing bg-dot">
            <div class="container">
                <div class="small-title text-md-center">
                    <h6>Simple Steps</h6>
                </div>
                <div class="big-title text-md-center text-black">
                    <h3>Easy Steps to Get Your</h3>
                    <h3>Vehicle Insured</h3>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="steps-wrapper">
                            <span>١</span>
                            <img src="{{asset('front_assets/images/icon-1.png')}}">
                            <h5>Choose Vehicle Type</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="steps-wrapper">
                            <span>٢</span>
                            <img src="{{asset('front_assets/images/icon-2.png')}}">
                            <h5>Enter Your National ID</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="steps-wrapper">
                            <span>٣</span>
                            <img src="{{asset('front_assets/images/icon-3.png')}}">
                            <h5>Choose Insurance Type</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="steps-wrapper">
                            <span>٤</span>
                            <img src="{{asset('front_assets/images/icon-4.png')}}">
                            <h5>Compare Policies</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="steps-wrapper">
                            <span>٥</span>
                            <img src="{{asset('front_assets/images/icon-5.png')}}">
                            <h5>Enter Billing Details</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="steps-wrapper">
                            <span>٦</span>
                            <img src="{{asset('front_assets/images/icon-6.png')}}">
                            <h5>Pay & Print</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- STEPS SECTION ENDS -->
        <!-- SAUDI CENTRAL BANK SECTION STARTS -->
        <section class="parallax">
            <div class="container">
                <div class="row scb-row">
                    <div class="col-lg-4">
                        <div class="scb-banner">
                            <img class="img-fluid" src="{{asset('front_assets/images/image-6.png')}}">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="small-title text-right">
                            <h6>Reason to Trust Us</h6>
                        </div>
                        <div class="big-title text-dark-blue text-right">
                            <h3>We Are Authorized By Saudi Central Bank</h3>
                        </div>
                        <div class="text-white text-right">
                            <p>Saudi Central Bank is the backbone of the banking sector in Kingdom of Saudi Arabia.
                                It was established in 1372H (1952). Saudi Central Bank performs various functions in
                                finances of the country.
                            </p>
                            <p>Authorization of Saudi Central Bank means a strong and reliable support to our
                                Insurance Platfrom. So relax and get your vehicle insured with our platform and get
                                assurity of Saudi Central Bank.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vision-banner">
                <img src="{{asset('front_assets/images/2030logo.png')}}">
            </div>
        </section>
        <!-- SAUDI CENTRAL BANK SECTION ENDS -->
        <!-- PARTNER SECTION STARTS -->
        <section class="section-spacing">
            <div class="container">
                <div class="small-title text-md-center">
                    <h6>We Partnered With Best</h6>
                </div>
                <div class="big-title text-md-center">
                    <h3>Top Insurance Companies</h3>
                    <h3>of Saudi Arabia</h3>
                </div>
                <div class="partner-wrapper">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="partner-card">
                                <img src="{{asset('front_assets/images/partner-1.png')}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="partner-card">
                                <img src="{{asset('front_assets/images/partner-2.png')}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="partner-card">
                                <img src="{{asset('front_assets/images/partner-3.png')}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="partner-card">
                                <img src="{{asset('front_assets/images/partner-4.png')}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="partner-card">
                                <img src="{{asset('front_assets/images/partner-5.jpg')}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="partner-card">
                                <img src="{{asset('front_assets/images/partner-6.png')}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="partner-card">
                                <img src="{{asset('front_assets/images/partner-7.jpg')}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="partner-card">
                                <img src="{{asset('front_assets/images/partner-8.png')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- PARTNER SECTION ENDS -->
        <!-- CONTACT SECTION STARTS -->
        <section class="section-spacing lb-bg">
            <div class="container">
                <div class="text-center text-dark-blue">
                    <h6>Need Our Help?</h6>
                </div>
                <div class="big-title text-center text-white">
                    <h3>We Are Here to Guide You!</h3>
                </div>
                <div class="contact-para text-grey text-center">
                    <p>We are ensuring the best insurance policy services in the market.</p>
                    <p> Our support team can guide you 24x7.</p>
                </div>
                <button class="btn btn-primary brand-btn-db mx-auto d-block mt-3">Contact Us</button>
            </div>
        </section>
        <!-- CONTACT SECTION ENDS -->
        @show
        @section('modal')
        <!-- NATIONAL ID/IQAMA DETAILS MODAL -->
        <div class="modal fade" id="nationalDetailsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content popup-content">
                    <div class="modal-header popup-header">
                        <h5 class="modal-title popup-title" id="exampleModalLabel">Enter Details</h5>
                        <button type="button" class="close popup-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body popup-body">
                        <div class="nid-popup">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="nid-popup-content">
                                            <h2>Insure your car and bike with</h2>
                                            <h2>Elaf Insurance</h2>
                                            <h5>Get Real Benefits</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="nid-form">
                                            <form>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" placeholder="National ID/Iqama Number/ Company MOI">
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <input type="date" class="form-control" placeholder="Date of Policy to be effective">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control" placeholder="Enter Captcha">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-grid">
                                                    <button class="btn btn-primary brand-btn-lb">Get Details</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- NATIONAL ID/IQAMA DETAILS MODAL -->
        @show
        @section('footer_content')
        <!-- Footer section  -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-title">
                            <h4>Our Products</h4>
                        </div>
                        <ul class="footer-list">
                            <li>
                                <a href="#">Car Insurance</a>
                                <i class="icofont-bubble-left"></i>
                            </li>
                            <li>
                                <a href="#">Motorcycle Insurance</a>
                                <i class="icofont-bubble-left"></i>
                            </li>
                        </ul>
                        <div class="app-image">
                            <a href="#" target="_blank"><img src="{{asset('front_assets/images/google-play-store-transparent.png')}}"></a>
                            <a href="#" target="_blank"><img src="{{asset('front_assets/images/apple-store.png')}}"></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-title">
                            <h4>Useful Links</h4>
                        </div>
                        <ul class="footer-list">
                            <li>
                                <a href="#">About Us</a>
                                <i class="icofont-bubble-left"></i>
                            </li>
                            <li>
                                <a href="#">FAQ's</a>
                                <i class="icofont-bubble-left"></i>
                            </li>
                            <li>
                                <a href="#">Terms & Conditions</a>
                                <i class="icofont-bubble-left"></i>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                                <i class="icofont-bubble-left"></i>
                            </li>
                            <li>
                                <a href="#">Refund & Return Policy</a>
                                <i class="icofont-bubble-left"></i>
                            </li>
                            <li>
                                <a href="#">Our Partners</a>
                                <i class="icofont-bubble-left"></i>
                            </li>
                            <li>
                                <a href="#">Sitemap</a>
                                <i class="icofont-bubble-left"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-title">
                            <h4>Connect with Us</h4>
                        </div>
                        <ul class="footer-social">
                            <li>
                                <a href="#" target="_blank">
                                <i class="icofont-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                <i class="icofont-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                <i class="icofont-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                <i class="icofont-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                <i class="icofont-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="footer-contact text-white">
                            <li>
                                <a href="mailto:info@xyz.com">info@xyz.com</a>
                                <i class="icofont-envelope"></i>
                            </li>
                            <li>
                                <a href="tel:+9665 1234566">+9665 1234566</a>
                                <i class="icofont-phone-circle"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="cards">
                    <img src="{{asset('front_assets/images/cards.png')}}">
                </div>
                <div class="credits">
                    <p>&copy;2022 Elaf Insurance. All rights reserved | Powered by <a href="https://advancedelaf.com" target="_blank">Advanced Elaf</a></p>
                </div>
                <div class="text-center">
                    <div id="google_translate_element"></div>
                </div>
            </div>
        </footer>
        @show
        @section('footer')
        <!-- JQuery Integration Link -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
        <!-- Bootstrap JS -->
        <script src="{{asset('front_assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- Popper Link -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <!-- Local Script -->
        <script src="{{asset('front_assets/js/main.js')}}"></script>
        <script>
            // WOW JS INTITATED
            new WOW().init();
        </script>
    </body>
</html>
@show