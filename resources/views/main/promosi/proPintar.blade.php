@extends('main.master_layout')
@section('konten')
    <link rel="stylesheet" href="{{ asset('css/main/promosi/proPintar.css') }}" />

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-2 mb-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Promo Pinter</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}" class="text-white">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('/promo-pintar') }}" class="text-white">Promosi</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <section id="voucher" class="container-fluid">
        <div class="row p-4 g-4">
            <!-- Text -->
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Promo berlaku setiap 2 periode</h4>
                                    <span>Promo ini berlaku di Toserba Prama Borma setiap 2 periode dalam satu bulannya,
                                        mulai dari tanggal 1 – 15 & 16 – 31 setiap bulannya. Promo PILIHAN TERMURAH jadi
                                        pilihan belanja murah terbaik untuk groseries, daging, buah dan perlengkapan
                                        kebutuhan lainnya hanya di Prama Borma.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Promo pilihan termurah</h4>
                                    <span>Promo PILIHAN TERMURAH jadi pilihan belanja murah terbaik untuk groseries, daging,
                                        buah dan perlengkapan kebutuhan lainnya hanya di Prama Borma.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel -->
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="carousel-wrapper">
                    <div id="promoCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/promo/promoPinter1.jpg') }}" alt="Promo Pinter 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/promo/promoPinter2.jpg') }}" alt="Promo Pinter 2">
                            </div>
                            {{-- <div class="carousel-item">
                                <img src="{{ asset('img/promo/promoPinter3.jpg') }}" alt="Promo Pinter 3">
                            </div> --}}
                        </div>

                        <!-- Sisi Kiri -->
                        <button class="custom-side-nav custom-prev" type="button" data-bs-target="#promoCarousel"
                            data-bs-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                        </button>

                        <!-- Sisi Kanan -->
                        <button class="custom-side-nav custom-next" type="button" data-bs-target="#promoCarousel"
                            data-bs-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
