<!DOCTYPE html>
<html>

<head>
    {{-- @yield('metatags') --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Langkawi Car Rental at Airport & Jetty - MRR HOLIDAYS</title>
    <link href="{{ asset('favicon.ico') }}" type="image/x-icon" rel="icon">
    <link rel="stylesheet" href="{{ asset('theme/asset/css/mmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/asset/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/asset/css/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/asset/css/frontend.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

    <script src="{{ asset('theme/asset/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('theme/asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('theme/asset/js/rangePlugin.js') }}"></script>
    <script src="{{ asset('theme/asset/js/flatpickr.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/js/splide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
  
    <style>
        .label-fleet-deals {
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            background: #ff2600;
            color: #fff;
            border-radius: 0.5rem;
            padding: 0.25rem 0.5rem;
        }
        .bg-grey {
            background: #bfc9c2;
        }
        </style>
 

@yield('css')
</head>


<body>

    <nav class="navbar navbar-main navbar-expand-md navbar-light fixed-top">
        <div class="container-fluid d-flex justify-content-between px-0 px-md-2">
            <a href="index.html"><img src="img/logo/logo.png" class="logo" alt=""></a>
            <div class="ms-auto">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
                    aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse col justify-content-end" id="navbarMain">
                <ul class="navbar-nav mb-2 mb-lg-0 pt-4 pt-md-0 align-items-center">
                    <li class="nav-item border-bottom pb-3 mb-2 d-md-none">
                        <h6 class="text-primary">CONTACT</h6>
                        <div>
                            <a href="tel:+60128084008">+60 12-8084008</a>
                        </div>
                        <div>
                            enquiry@MRR HOLIDAYS.my
                        </div>
                    </li>
                    <li class="nav-item text-nowrap">
                        <a href="index.html" class="nav-link border-right px-md-4 py-md-0 my-md-2">Car Rental</a>
                    </li>
                    <li class="nav-item">
                        <a href="attractions.html" class="nav-link border-right px-md-4 py-md-0 my-md-2">Attractions</a>
                    </li>
                    <li class="nav-item">
                        <a href="blogs.html" class="nav-link border-right px-md-4 py-md-0 my-md-2">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://MRR HOLIDAYS.tawk.help/" target="_blank"
                            class="nav-link border-right px-md-4 py-md-0 my-md-2">Help</a>
                    </li>
                    <li class="nav-item dropdown mx-3">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-expanded="false"><span class="flag-icon flag-icon-gb"></span></a>
                        <ul class="dropdown-menu dropdown-menu-end text-center text-md-left">
                            <li class="dropdown-header text-start">Select Language</li>
                            <li>
                                <a href="index.html" data-value="en"
                                    class="lang nav-link text-dark d-flex align-items-center">
                                    <span class="flag-icon flag-icon-gb" style="margin-right: 8px;"></span>
                                    <span class="small text-nowrap">English</span>
                                </a>
                            </li>
                            <li>
                                <a href="ms.html" data-value="ms"
                                    class="lang nav-link text-dark d-flex align-items-center">
                                    <span class="flag-icon flag-icon-my" style="margin-right: 8px;"></span>
                                    <span class="small text-nowrap">Bahasa Malaysia</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="login.html" class="nav-link px-md-4 py-md-0 mt-3 my-md-2">Login</a>
                    </li>
                    <li class="nav-item" style="border:0">
                        <a href="register.html"
                            class="btn btn-outline-white mt-3 mt-md-0 ms-md-2 bg-primary text-white">Create Account</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




         


  
   @yield('content')


    <style>
        .new-word {
            font-size: 9px;
            position: absolute;
            margin-left: 3px;
        }

        .list-footer-supported {
            li {
                display: inline;
            }

            /* img {
            max-height: 70px;
        } */
        }
    </style>
<footer class="footer-main pt-5 mb-5 mb-md-0 text-center text-md-start">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-auto mt-md-0">
                    <h6 class="mb-3 text-uppercase">Company</h6>
                    <ul class="list-unstyled">
                        <li>
                            <a href="about-us.html">About Us</a>
                        </li>
                        <li>
                            <a href="en/blogs.html">Blogs</a>
                        </li>
                        <li>
                            <a href="fleet-reviews.html">Reviews</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="our-team.html">Our Team</a>
                        </li>
                       
                    </ul>
                </div>
                <div class="col-md-auto mt-5 mt-md-0">
                    <h6 class="mb-3 text-uppercase">Services</h6>
                    <ul class="list-unstyled">
                        <li>
                            <a href="index.html">Car Rental</a>
                        </li>
                        <li>
                            <a href="attractions.html">Attractions</a>
                        </li>
                        <!-- <li>
                        <a href="/hotel">Hotel</a>                    </li> -->
                    </ul>
                    <h6 class="mb-3 text-uppercase mt-5">Legal</h6>
                    <ul class="list-unstyled">
                        <li>
                            <a href="terms-and-conditions.html">Terms and Conditions</a>
                        </li>
                        <li>
                            <a href="privacy-policy.html">Privacy Policy</a>
                        </li>
                        <li><a href="https://MRR HOLIDAYS.tawk.help/" target="_blank">Help Center</a></li>
                    </ul>
                </div>
                <div class="col-md-auto mt-5 mt-md-0">
                    <h6 class="mb-3 text-uppercase">Top Attractions</h6>
                    <ul class="list-unstyled">
                        <li>
                            <a href="attractions/langkawi-premium-cruise.html">Langkawi Premium Cruise<span
                                    class="text-warning fw-bold new-word">NEW</span></a>
                        </li>
                        <li>
                            <a href="attractions/maha-tower-langkawi.html">Maha Tower Langkawi<span
                                    class="text-warning fw-bold new-word">NEW</span></a>
                        </li>
                        <li>
                            <a href="attractions/dream-forest-langkawi.html">Dream Forest Langkawi<span
                                    class="text-warning fw-bold new-word">NEW</span></a>
                        </li>
                        <li>
                            <a href="attractions/langkawi-skycab-cable-car.html">Langkawi SkyCab Cable Car</a>
                        </li>
                        <li>
                            <a href="attractions/langkawi-mangrove-tour.html">Langkawi Mangrove Tour</a>
                        </li>
                        <li>
                            <a href="attractions/island-hopping-langkawi.html">Langkawi Island Hopping Tour</a>
                        </li>
                        <li>
                            <a href="attractions/underwater-world-langkawi.html">Underwater World Langkawi</a>
                        </li>
                        <li>
                            <a href="attractions/atv-adventure-ride.html">ATV Adventure Ride</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-auto mt-5 mt-md-0">
                    <h6 class="text-uppercase mb-3">Address</h6>
                    <div>
                        <a href="https://maps.app.goo.gl/18nUAdf7kXY8bDmT6" target="_blank">LOT 6, BUKIT NAU,<br>
                            JALAN LAPANGAN TERBANG,<br>
                            PADANG MATSIRAT,<br>
                            07000 LANGKAWI,<br>
                            KEDAH.<br><br></a>
                        LB Travel Tech Sdn Bhd<br>
                       123456789<br>
                    </div>
                </div>
           
            </div>
        </div>
        <div class="bg-white text-dark p-4 mt-5">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12 ">
                        <div class="ft-cpt-img d-flex align-items-center justify-content-center">
                            <img src="img/logo/logo.png" class="img-fluid logo text-center" alt="">
                        </div>
                       
                        <div class="mt-2 text-muted text-center">
                            &copy; Copyright 2025  MRR HOLIDAYS. All rights reserved. </div>
                    </div>
               
                </div>
            </div>
        </div>
    </footer>
    <!-- Modal -->
    <div class="modal fade modal-coming-soon" id="coming-soon" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close bg-white rounded-circle text-dark" data-bs-dismiss="modal"
                        aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="body text-center p-4 p-md-5 mx-md-8 mb-4 mb-md-5 rounded">
                        <p>WE’RE COMING SOON!</p>
                        <hr class="bg-white">
                        <div class="h5">
                            We’re coming soon! We’re working hard to give you the best experience.
                            <br>
                            For any enquiries, please contact us at +0133188088.
                        </div>
                    </div>
                    <img src="img/logo/logo.png" class="logo" style="height: 50px" alt="">
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            var num_promo = '1';
            $(window).on('load', function () {
                if (num_promo > 0)
                    $('#PromoModal').modal('show');
            });

            $('.promo-toggle').on('change', function (e) {
                if (this.checked) {
                    console.log('ada check');
                    setCookie('show_promo', 'false', 7);
                }
            });

            // Set a Cookie
            function setCookie(cName, cValue, expDays) {
                let date = new Date();
                date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
                const expires = "expires=" + date.toUTCString();
                document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
            }
        });
    </script>



</body>


</html>