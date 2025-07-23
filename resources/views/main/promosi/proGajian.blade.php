@extends('main.master_layout')
@section('konten')
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="{{ asset('css/main/promosi/proGajian.css') }}" />

    <!-- Page Header -->
    <div class="container-fluid page-header py-2 mb-0 wow fadeIn bg-warning" data-wow-delay="0.1s">
        <div class="container py-4">
            <h1 class="display-3 text-white animated slideInRight">Promo Gajian 25/5</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}" class="text-white">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('/promo-gajian') }}" class="text-white">Promosi</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <section id="voucher" class="container-fluid">
        <div class="row p-4 g-4">
            <!-- Text Section -->
            <div class="col-md-4">
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>PROMO GAJIAN setiap tanggal 25</h4>
                                    <span>Nikmati PROMO GAJIAN 25/5 setiap tanggal 25 sampai dengan tanggal 5 setiap
                                        bulannya</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Belanja murah saat gajian</h4>
                                    <span>Belanja bulanan semakin murah saat gajian atau #PayDay yang berlaku di seluruh
                                        Toserba Prama, Borma dan Prama Fresh dengan harga yang murah dan banyak
                                        promonya</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Section -->
            <div class="col-md-8 wow fadeInUp">
                <div class="owl-carousel-wrapper">
                    <!-- Custom Buttons -->
                    <div class="custom-nav">
                        <button id="customPrev"><i class="fa fa-chevron-left"></i></button>
                        <button id="customNext"><i class="fa fa-chevron-right"></i></button>
                    </div>
                    <div class="owl-carousel owl-theme">
                        @foreach ($files as $file)
                            <div class="item">
                                <div class="promo-card">
                                    <span class="promo-badge">HOT</span>
                                    <a href="{{ url('/layar') }}">
                                        <img class="promo-card-img" src="{{ asset($file) }}" alt="Promo">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Owl Carousel JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/main/promosi/proGajian.js') }}"></script>
@endsection
