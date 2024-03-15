<div>
    <!-- Carousel Start -->
    <div class="container-fluid carousel-header px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="trimg/uslugi1.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-4 text-dark mb-3">{{ __('Инновационные решение для развития условий жизни населения') }}</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="trimg/hyunadi_truba.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-4 ">{{ __('Применение передовых технологий для улучшения инфраструктуры') }}</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="trimg/uslugi2.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-4 text-dark mb-3">{{ __('Социально экономическая поддержка для повышения роли женщин в управлении водными ресурсами') }}</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="trimg/salyd4.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-4 text-dark mb-3">{{ __('Повышение потенциала и институциональное развитие') }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Services Start -->
    <div class="container-fluid services">
        <div class="container py-4">
            <div class="row g-1">
                <div class="col-md col-sm-4 col-4">
                    <div class="services-item rounded p-2">
                        <div class="align-items-center">
                            <div class="d-flex align-items-center justify-content-center rounded">
                                <img src="img/sie_icon.png" class="img-fluid rounded" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md col-sm-4 col-4">
                    <div class="services-item rounded p-2">
                        <div class="align-items-center">
                            <div class="d-flex align-items-center justify-content-center rounded">
                                <img src="img/red_plus_icon.png" class="img-fluid rounded" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md col-sm-4 col-4">
                    <div class="services-item rounded p-2">
                        <div class="align-items-center">
                            <div class="d-flex align-items-center justify-content-center rounded">
                                <img src="img/usaid_icon.png" class="img-fluid rounded" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md col-sm-4 col-4">
                    <div class="services-item rounded p-2">
                        <div class="align-items-center">
                            <div class="d-flex align-items-center justify-content-center rounded">
                                <img src="img/embassy_icon.png" class="img-fluid rounded" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md col-sm-4 col-4">
                    <div class="services-item rounded p-2 last-3">
                        <div class="align-items-center">
                            <div class="d-flex align-items-center justify-content-center rounded">
                                <img src="img/eu_icon.png" class="img-fluid rounded" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md col-sm-4 col-4">
                    <div class="services-item rounded p-2 last-3">
                        <div class="align-items-center">
                            <div class="d-flex align-items-center justify-content-center rounded">
                                <img src="img/oliymajlis_icon.jpg" class="img-fluid rounded" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md col-sm-4 offset-4 offset-md-0 col-4">
                    <div class="services-item rounded p-2 last-3">
                        <div class="align-items-center">
                            <div class="d-flex align-items-center justify-content-center rounded">
                                <img src="img/uyjoy_icon.png" class="img-fluid rounded" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- News Start -->
    <div class="container-fluid news py-5" id="news">
        <div class="container py-5 text-center">
            <div class="row">
                <h1 class="display-4 mb-4">{{ __('Новости') }}</h1>
                <div class="col-md-10">
                    <x-news />
                </div>
                <div class="col-md-2">
                    <x-icons />
                </div>
            </div>
            <a href="{{ route('news') }}" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5 mt-5" style="text-align: center;">{{__("Больше")}}</a>
        </div>
    </div>
    <!-- News End -->

    <div class="container-my text-center mx-auto py-5" id="xizmatlar">
        <p class="fs-4 text-uppercase text-primary pt-5">{{ __('Предлагаемые услуги') }}</p>
        <p>{{ __('Мы предлагаем различные услуги, направленные на повышение благосостояния населения.') }}</p>
        <div class="row g-4">
            <div class="col-xl col-md-6 box">
                <div class="imgback" style="--bgimg:url('../trimg/krugliystol.jpg')"></div>
                <div class="text">{{ __('Техническое проектирование') }}</div>
            </div>
            <div class="col-xl col-md-6 box">
                <div class="imgback" style="--bgimg:url('../trimg/naush_narod.jpg')"></div>
                <div class="text">{{ __('Опросы и Исследования') }}</div>
            </div>
            <div class="col-xl col-md-6 box">
                <div class="imgback" style="--bgimg:url('../trimg/uslugi3.jpg')"></div>
                <div class="text">{{ __('Применение качественных комплектующих и материалов') }}</div>
            </div>
            <div class="col-xl col-md-6 box">
                <div class="imgback" style="--bgimg:url('../img/gallery-1.jpg')"></div>
                <div class="text">{{ __('Привлечение молодежи и женщин') }}</div>
            </div>
        </div>
    </div>


    <!-- About Start -->
    <div class="container-fluid about py-5" id="about">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7">
                    <p class="fs-4 text-uppercase text-primary">{{ __('О нас') }}</p>
                    <h1 class="display-6 mb-4">{{ __('РЕСПУБЛИКАНСКИЙ ЦЕНТР РАЗВИТИЯ УСЛОВИЙ ЖИЗНИ НАСЕЛЕНИЯ') }}</h1>
                    <p class="mb-4">{{ __('Приоритетными задачами Республиканского центра развития условий жизни населения
                        Республики Узбекистан “Taraqqiyot” являются:') }}</p>
                    <ul>
                        <li>{{ __('улучшение сельской инфраструктуры') }}</li>
                        <li>{{ __('инновационное проектирование c применением програмного обеспечения') }}</li>
                        <li>{{ __('строительство системы питьевого водоснабжения') }}</li>
                        <li>{{ __('технических мониторинг строительных работ') }}</li>
                        <li>{{ __('закуп и применение высококачественных материалов') }}</li>
                        <li>{{ __('обучение персонала эксплуатации системы водоснабжения') }}</li>
                        <li>{{ __('обучение персонала проектированию систем водоснабжения') }}</li>
                        <li>{{ __('социально-экономическая поддержка женщин') }}</li>
                        <li>{{ __('создание новых рабочих мест') }}</li>
                        <li>{{ __('проведение тренингов по финансовому управлению') }}</li>
                        <li>{{ __('проведение тренингов по менеджменту (управление кадрами)') }}</li>
                        <li>{{ __('разработка тарифных планов по питьевой воде') }}</li>
                        <li>{{ __('подготовка проектной документации и дальнейшая техническая поддержка и сервисной обслуживание') }}</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <img src="trimg/smile3.jpg" class="img-fluid rounded" alt="">
                    <p class="mt-4">{{ __('Эти цели достигаются благодаря скоординированным усилиям экспертов, обладающих богатыми навыками и опытом в сфере водоснабжения.') }}</p>
                    <p>{{ __('Организационная структура центра поддерживает концепцию повышения уровня жизни населения за счет повышения его знаний и использования методов принятия решений для решения социальных и инфраструктурных пробелов') }}</p>
                </div>
            </div>
        </div>
    </div>


    <!-- About End -->


    <!-- Appointment Start -->
    <div class="container-fluid appointment py-5">
        <!-- Counter Start -->
        <div class="container-fluid counter-section">
            <div class="container py-5">
                <div class="row g-5 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="counter-item p-5">
                            <div class="counter-content bg-white p-4">
                                <i class="fas fa-hand-holding-water fa-5x text-primary mb-3"></i>
                                <h5 class="text-primary">{{ __("Жителей села были обеспечены чистой питьевой водой")}}</h5>
                                <div class="svg-img">
                                    <svg width="100" height="50">
                                        <polygon points="55, 10 85, 55 25, 55 25," style="fill: #DCCAF2;" />
                                    </svg>
                                </div>
                            </div>
                            <div class="counter-quantity">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">175000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="counter-item p-5">
                            <div class="counter-content bg-white p-4">
                                <i class="fas fa-water fa-5x text-primary mb-3"></i>
                                <h5 class="text-primary">{{ __("Проложены километры водопроводных труб")}}</h5>
                                <div class="svg-img">
                                    <svg width="100" height="50">
                                        <polygon points="55, 10 85, 55 25, 55 25," style="fill: #DCCAF2;" />
                                    </svg>
                                </div>
                            </div>
                            <div class="counter-quantity">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">830</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter End -->
    </div>
    <!-- Appointment End -->


    <!-- Team Start -->
    <div class="container-fluid team py-5" id="team">
        <div class="container py-5 text-center">
            <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                <h1 class="display-4 mb-4">{{ __('Члены команды') }}</h1>
                <p>{{ __('Команда “Taraqqiyot” ННО состоит из специалистов и практиков различных специальностей и объединилась, чтобы внести свой вклад в развитие местного сообщества.Наша организация всегда открыта для новых членов, которые могут присоединиться к нашей команде.') }}</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="team-item">
                        <div class="team-img rounded-top">
                            <img src="img/feruza_m.jpg" class="img-fluid w-100 rounded-top bg-light" alt="">
                        </div>
                        <div class="team-text rounded-bottom text-center p-4">
                            <h3 class="text-white">{{ __('Феруза Мадалиева') }}</h3>
                            <p class="mb-0 text-white">{{ __('Исполнительный директор / Специалист по WASH') }} <br><span class="d-none d-lg-block d-xl-none invisible">justice</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="team-item">
                        <div class="team-img rounded-top">
                            <img src="img/nurbek_p.jpg" class="img-fluid w-100 rounded-top bg-light" alt="">
                        </div>
                        <div class="team-text rounded-bottom text-center p-4">
                            <h3 class="text-white">{{ __('Нурбек Пулатов') }}</h3>
                            <p class="mb-0 text-white">{{ __('Специалист по расширению возможностей / Специалист по CD') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="team-item">
                        <div class="team-img rounded-top">
                            <img src="img/shuhrat_a_gimp.jpg" class="img-fluid w-100 rounded-top bg-light" alt="">
                        </div>
                        <div class="team-text rounded-bottom text-center p-4">
                            <h3 class="text-white">{{ __('Шухрат Азизов') }}</h3>
                            <p class="mb-0 text-white">{{ __('Главный инженер') }} <br><span class="d-none d-xl-block invisible">justice</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/team.html" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5 mt-5" style="text-align: center;">{{ __('Больше') }}</a>
        </div>
    </div>

    <!-- Team End -->

    <!-- Gallery Start -->
    <div class="container-fluid gallery py-5" id="gallery">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                <p class="fs-4 text-uppercase text-primary">{{__('Наша галерея')}}</p>
            </div>
            <div class="tab-class text-center">
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="trimg/shvetsar.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                            </div>
                                            <div class="search-icon">
                                                <a href="trimg/shvetsar.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="trimg/kraska.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                            </div>
                                            <div class="search-icon">
                                                <a href="trimg/kraska.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="trimg/stroyka_man.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                            </div>
                                            <div class="search-icon">
                                                <a href="trimg/stroyka_man.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="trimg/hyundai.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                            </div>
                                            <div class="search-icon">
                                                <a href="trimg/hyundai.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-6.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-6.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-2.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-2.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-3.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-3.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-8.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-8.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="trimg/gallery-stol.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                            </div>
                                            <div class="search-icon">
                                                <a href="trimg/gallery-5.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-1t.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-1t.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-7.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-7.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="trimg/gallery-9.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                            </div>
                                            <div class="search-icon">
                                                <a href="trimg/gallery-9.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img" style="height: 100%;">
                                            <img class="img-fluid rounded w-100" style="height: 100%;object-fit: cover;" src="trimg/gallery-4.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                            </div>
                                            <div class="search-icon">
                                                <a href="trimg/gallery-4.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="trimg/gallery-8.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                            </div>
                                            <div class="search-icon">
                                                <a href="trimg/gallery-8.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="trimg/stroykagisht.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                            </div>
                                            <div class="search-icon">
                                                <a href="trimg/stroykagisht.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="trimg/truba.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                            </div>
                                            <div class="search-icon">
                                                <a href="trimg/truba.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery End -->
</div>