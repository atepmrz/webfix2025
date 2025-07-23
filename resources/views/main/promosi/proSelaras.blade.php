@extends('main.master_layout')
@section('konten')
    <link rel="stylesheet" href="{{ asset('css/main/promosi/proSelaras.css') }}" />

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-2 mb-0 wow fadeIn bg-primary" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Selaras</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}" class="text-white">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('/promo-selaras') }}" class="text-white">Promosi</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <section id="voucher" class="container-fluid">
        <div class="row p-4 g-4">
            <!-- Keterangan -->
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Promo SELARAS (SEnin SeLAsa RAbu Selalu Hemat)</h4>
                                    <span>Akhir pekan ada promo di Prama Borma dan Prama Fresh? Iya, setiap akhir pekan ada
                                        promo menarik yang super hemat di PROMO JSM (Jumat Sabtu Minggu). Belanja week end
                                        semakin seru, murah dan pas di kantong.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel -->
            <div class="col-md-6 wow fadeInUp">
                <div class="carousel-wrapper">
                    <div id="promoCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                        <div class="carousel-inner text-center">
                            @for ($i = 1; $i <= 4; $i++)
                                <div class="carousel-item {{ $i === 1 ? 'active' : '' }}">
                                    <img src="{{ asset('img/promo/selaras/' . $i . '.jpg') }}"
                                        alt="Promo Selaras {{ $i }}">
                                </div>
                            @endfor
                        </div>

                        <!-- Tombol Prev -->
                        <button class="custom-side-nav custom-prev" type="button" data-bs-target="#promoCarousel"
                            data-bs-slide="prev" aria-label="Previous">
                            <i class="fa fa-chevron-left"></i>
                        </button>

                        <!-- Tombol Next -->
                        <button class="custom-side-nav custom-next" type="button" data-bs-target="#promoCarousel"
                            data-bs-slide="next" aria-label="Next">
                            <i class="fa fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
