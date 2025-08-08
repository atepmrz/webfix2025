@extends('main.master_layout')

@section('konten')
    <link rel="stylesheet" href="{{ asset('css/main/event/event.css') }}" />

    <div class="container">
        <h1 class="text-center my-5">Event & Berita Terbaru</h1>

        <div class="row">
            <!-- HALAMAN 1 - 6 items -->
            <!-- News: Promo Agustus -->
            <div class="col-md-4 mb-4 page-1">
                <div class="card h-100">
                    <a href="{{ route('news.promo') }}">
                        <img src="{{ asset('img/event&news/katalog/1.jpg') }}" class="card-img-top" alt="Promo Special">
                    </a>
                    <div class="card-body">
                        <span class="badge bg-danger mb-2">News</span>
                        <h5 class="card-title"><a href="{{ route('news.promo') }}"> 🔥 Promo Kemerdekaan Agustus!</a></h5>
                        <p class="card-text">Kemerdekaan harga! Promo spesial merah putih bulan Agustus! </p>
                        <p class="text-muted">07/08/2025</p>
                    </div>
                </div>
            </div>

            <!-- News: Donor-Darah -->
            <div class="col-md-4 mb-4 page-1">
                <div class="card h-100">
                    <a href="{{ route('news.donor') }}">
                        <img src="{{ asset('img/event&news/donor/1.jpg') }}" class="card-img-top" alt="Donor Darah">
                    </a>
                    <div class="card-body">
                        <span class="badge bg-danger mb-2">News</span>
                        <h5 class="card-title"><a href="{{ route('news.donor') }}">🩸 Aksi Nyata Donor Darah</a></h5>
                        <p class="card-text">Setetes darahmu bisa selamatkan nyawa!</p>
                        <p class="text-muted">30/06/2025</p>
                    </div>
                </div>
            </div>

            <!-- Event: Mewarnai -->
            <div class="col-md-4 mb-4 page-1">
                <div class="card h-100">
                    <a href="{{ route('event.mewarnai') }}">
                        <img src="{{ asset('img/event&news/bck1.jpg') }}" class="card-img-top" alt="Lomba Mewarnai">
                    </a>
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Event</span>
                        <h5 class="card-title"><a href="{{ route('event.mewarnai') }}">🎨 Lomba Mewarnai</a></h5>
                        <p class="card-text">Wujudkan imajinasi si kecil dalam lomba mewarnai!</p>
                        <p class="text-muted">30/06/2025</p>
                    </div>
                </div>
            </div>

            <!-- Event: PBB -->
            <div class="col-md-4 mb-4 page-1">
                <div class="card h-100">
                    <a href="{{ route('event.pbb') }}">
                        <img src="{{ asset('img/event&news/pbb1.jpg') }}" class="card-img-top" alt="Pelatihan PBB">
                    </a>
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Event</span>
                        <h5 class="card-title"><a href="{{ route('event.pbb') }}">🎁 PBB - Berhadiah</a></h5>
                        <p class="card-text">Belanja berhadiah Umroh? Yuk ikutan! 😍🎉</p>
                        <p class="text-muted">30/06/2025</p>
                    </div>
                </div>
            </div>

            <!-- Event: Resep -->
            <div class="col-md-4 mb-4 page-1">
                <div class="card h-100">
                    <a href="{{ route('event.resep') }}">
                        <img src="{{ asset('img/event&news/resep/churros.jpg') }}" class="card-img-top"
                            alt="Kegiatan Resep">
                    </a>
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Event</span>
                        <h5 class="card-title"><a href="{{ route('event.resep') }}">👨‍🍳 RECIPE 👩‍🍳</a></h5>
                        <p class="card-text">Temukan resep simple & lezat!</p>
                        <p class="text-muted">25/06/2025</p>
                    </div>
                </div>
            </div>

            <!-- Event: Ice Cream -->
            <div class="col-md-4 mb-4 page-1">
                <div class="card h-100">
                    <a href="{{ route('event.icecream') }}">
                        <img src="{{ asset('img/event&news/icecream/3.jpg') }}" class="card-img-top" alt="Ice Cream Time!">
                    </a>
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Event</span>
                        <h5 class="card-title"><a href="{{ route('event.icecream') }}">🍨 Ice Cream</a></h5>
                        <p class="card-text">Sensasi manis segar dengan promo Ice Cream Fair!</p>
                        <p class="text-muted">25/06/2025</p>
                    </div>
                </div>
            </div>

            <!-- HALAMAN 2 - 1 item -->
            <!-- Event: Sasha -->
            <div class="col-md-4 mb-4 page-2" style="display:none;">
                <div class="card h-100">
                    <a href="{{ route('event.sasha') }}">
                        <img src="{{ asset('img/event&news/sasha/1.jpg') }}" class="card-img-top" alt="Konser Sasha">
                    </a>
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Event</span>
                        <h5 class="card-title"><a href="{{ route('event.sasha') }}">🧴 Sasha Hair Color</a></h5>
                        <p class="card-text">Ubah gayamu! Warnai rambut gratis cukup belanja min. Rp 50.000 🎨</p>
                        <p class="text-muted">25/06/2025</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination Buttons -->
        <div class="pagination">
            <button id="prevBtn" onclick="goToPage(currentPage - 1)" disabled>
                << </button>
                    <button onclick="goToPage(1)" class="active" id="page1">1</button>
                    <button onclick="goToPage(2)" id="page2">2</button>
                    <button id="nextBtn" onclick="goToPage(currentPage + 1)"> >></button>
        </div>
    </div>

    <script src="{{ asset('js/main/event/event.js') }}"></script>
@endsection



{{--
<!-- Event: Saporo -->
<div class="col-md-4 mb-4">
    <div class="card h-100">
        <a href="{{ route('event.saporo') }}">
            <img src="{{ asset('img/event/saporo/1.jpg') }}" class="card-img-top" alt="Festival Saporo">
        </a>
        <div class="card-body">
            <h5 class="card-title"><a href="{{ route('event.saporo') }}">⛫💨Saporo Spray Paint</a></h5>
            <p class="card-text">Event sapporo spray paint.</p>
            <p class="text-muted">25-06-2025</p>
        </div>
    </div>
</div> --}}
