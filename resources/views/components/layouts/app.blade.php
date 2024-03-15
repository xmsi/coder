<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="qishloq infrotuzulmalarini  yaxshilash,  gender va salomatlik, xotin-qizlarni ijtimoiy iqtisodiy qollab quvvatlashdan iborat" name="keywords">
    <meta content="“Taraqqiyot” NNT tashkiliy tuzilmasi ijtimoiy muammolarni hal qilishga ko’maklashish  va qaror qabul qilish usullaridan foydalangan holda, aholi bilimlarini oshirish orqali ularning turmush darajasini yaxshilash kontseptsiyasini qollab-quvvatlaydi" name="description">
    <meta name="author" content="Sotvoldiev Muhammadumar (muhammadumarsotvoldiev@gmail.com)">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link rel="icon" href="/img/logo.png">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="/scss/bootstrap.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">

    @stack('css')

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <title>{{ $title ?? 'Taraqqiyot NGO' }}</title>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid sticky-top px-0">
        <div class="container-fluid bg-light">
            <div class="container px-0">
                <nav class="navbar navbar-light navbar-expand-xl">
                    <a href="#" class="navbar-brand">
                        <img src="/img/logo.png" class="img-fluid" style="width: 10em;" alt="">
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light py-3 justify-content-end" id="navbarCollapse">
                        <div class="navbar-nav  border-top">
                            <a href="{{ route('main') }}#" class="nav-item nav-link">{{ __('Главная') }}</a>
                            <a href="{{ route('main') }}#news" class="nav-item nav-link">{{ __('Новости') }}</a>
                            <a href="{{ route('projects') }}" class="nav-item nav-link">{{ __('Проекты') }}</a>
                            <a href="{{ route('main') }}#xizmatlar" class="nav-item nav-link">{{ __('Услуги') }}</a>
                            <a href="{{ route('main') }}#about" class="nav-item nav-link">{{ __('О нас') }}</a>
                            <a href="{{ route('team') }}" class="nav-item nav-link">{{ __('Команда') }}</a>
                            <a href="{{ route('main') }}#gallery" class="nav-item nav-link">{{ __('Галерея') }}</a>
                            <a href="{{ route('main') }}#contact" class="nav-item nav-link">{{ __('Связаться') }}</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('Язык') }}</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                        <x-language lang='en' myimg='english-flag.png'/>
                                        <x-language lang='uz' myimg='uzbekistan-flag-waving-icon-32.png'/>
                                        <x-language lang='ru' myimg='russia-flag.png'/>
                                </div>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
    {{ $slot }}

    <!-- Contact Start -->
    <div class="container-fluid" id="contact">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-12">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h5>{{ __('Адрес') }}</h5>
                                    <p class="mb-0">{{ __('ул. Б. Маргилоний 39, 3 этаж, 150100, Фергана') }}<br><span class="invisible d-none d-lg-block d-xl-none">justice</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                <div>
                                    <h5>{{ __('Ищете работу? Отправьте ваше резюме') }}</h5>
                                    <p class="mb-0">info@taraqqiyotngo.uz</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h5>{{ __('Телефон') }}</h5>
                                    <p class="mb-0">+998 73 244 43 50 <br><span class="invisible d-none d-lg-block">justice</span><span class="invisible d-none d-lg-block d-xl-none">justice</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-4 text-center text-md-start mb-md-0">
                    <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>TARAQQIYOT
                            NGO</a>, {{__("Все права защищены")}}</span>
                </div>
                <div class="col-md-4">
                    <div class="d-flex justify-content-center">
                        <a href="https://www.facebook.com/taraqqiyotngouz" class="btn btn-light btn-light-outline-0 btn-sm-square rounded-circle me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://t.me/taraqqiyot_ngo_official" class="btn btn-light btn-light-outline-0 btn-sm-square rounded-circle me-2"><i class="fab fa-telegram"></i></a>
                        <a href="https://instagram.com/taraqqiyot.ngo" class="btn btn-light btn-light-outline-0 btn-sm-square rounded-circle me-2"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4 text-center text-md-end text-white">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By
                    <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/counterup/counterup.min.js"></script>
    <script src="/lib/lightbox/js/lightbox.min.js"></script>
    <script type="text/javascript" src="/lib/vanilla-tilt.min.js"></script>
    <script type="text/javascript">
        VanillaTilt.init(document.querySelectorAll(".box"), {
            max: 20,
            speed: 2000,
        });
    </script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>

    @stack('scripts')

</body>

</html>