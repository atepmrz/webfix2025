@extends('main.master_layout')
@section('konten')
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="{{ asset('css/main/promosi/proCarnival.css') }}" />

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-2 mb-0 wow fadeIn bg-warning" data-wow-delay="0.1s">
        <div class="container py-4">
            <h1 class="display-3 text-white animated slideInRight">Promo Carnival</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}" class="text-white">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('/promo-carnival') }}" class="text-white">Promosi</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <section id="carnival" class="container-fluid">
        <div class="row p-4 g-4">
            <div class="col-md">
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>🎪 LIBUR TELAH TIBA! Diskon GILA-GILAAN</h4>
                                    <span>🎁 Hadiah langsung – Games seru</span><br>
                                    <span>📆 Berlaku selama bulan Juli!</span><br>
                                    <span>📍 Datang & Rayakan Belanja Meriahmu Sekarang!</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>🎪 Bermain sepuasnya</h4>
                                    <span>🎊 Kumpulkan 5 struk, dapatkan free 1x bermain</span><br>
                                    <span>🎊 Free Mandi Bola</span><br>
                                    <span>🎊 Main terus Diskon terus</span><br>
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
                                    <img class="promo-card-img" src="{{ asset($file) }}" alt="Promo Carnival"
                                        onclick="openModal(this.src, this.alt)">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0 position-relative">
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                    <img id="modalImage" src="" alt="" class="img-fluid rounded"
                        style="width: 100%; max-height:580px; object-fit: contain;">
                </div>
            </div>
        </div>
    </div>

    <!-- Owl Carousel JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/main/promosi/proCarnival.js') }}"></script>
@endsection
