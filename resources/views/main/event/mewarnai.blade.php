@extends('main.master_layout')
@section('konten')
    <link rel="stylesheet" href="{{ asset('css/main/event/mewarnai.css') }}" />

    <div class="container my-5">
        <div class="row d-flex align-items-start">
            <!-- Konten utama -->
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="text-center mb-5">✨BACK TO SCHOOL - LOMBA MEWARNAI✨</h2>

                <!-- Gambar 6 Juli -->
                <div class="row gx-3 justify-content-center mb-4">
                    <div class="col-md-6 mb-3 d-flex justify-content-center">
                        <img src="{{ asset('img/event&news/mewarnai/6juli-1.jpg') }}" class="img-fluid rounded shadow"
                            style="max-height: 380px; cursor:pointer;" alt="6 Juli 1"
                            onclick="openModal(this.src, this.alt)">
                    </div>
                    <div class="col-md-6 mb-3 d-flex justify-content-center">
                        <img src="{{ asset('img/event&news/mewarnai/6juli-2.jpg') }}" class="img-fluid rounded shadow"
                            style="max-height: 380px; cursor:pointer;" alt="6 Juli 2"
                            onclick="openModal(this.src, this.alt)">
                    </div>
                </div>

                <!-- Teks 1 -->
                <div class="mb-5 pe-lg-4">
                    <p class="fs-5">
                        Daftarkan buah hati Anda sekarang juga untuk mengikuti lomba mewarnai dalam rangka acara
                        <strong>BACK TO SCHOOL</strong> bersama <strong>@chiki_indonesia</strong> yang akan diadakan pada :
                    </p>
                    <p>
                        📆 <strong>Minggu, 6 Juli 2025</strong><br>
                        ⏰ <strong>09.00 WIB - Selesai</strong><br>
                        📍 <strong>Borma Gempol (Jl. Gempol Sari No. 9 Cimahi)</strong>
                    </p>
                    <p>
                        Kategori : TK & SD 1-3<br>
                        Link pendaftaran : <a href="https://s.id/LombaMewarnaiLTT"
                            target="_blank">s.id/LombaMewarnaiLTT</a><br>
                        Info lebih lanjut : 0822-1401-8470 / 0821-2376-7002
                    </p>
                </div>

                <!-- Gambar 13 Juli -->
                <div class="row gx-3 justify-content-center mb-4">
                    <div class="col-md-6 mb-3 d-flex justify-content-center">
                        <img src="{{ asset('img/event&news/mewarnai/13juli-1.jpg') }}" class="img-fluid rounded shadow"
                            style="max-height: 380px; cursor:pointer;" alt="13 Juli 1"
                            onclick="openModal(this.src, this.alt)">
                    </div>
                    <div class="col-md-6 mb-3 d-flex justify-content-center">
                        <img src="{{ asset('img/event&news/mewarnai/13juli-2.jpg') }}" class="img-fluid rounded shadow"
                            style="max-height: 380px; cursor:pointer;" alt="13 Juli 2"
                            onclick="openModal(this.src, this.alt)">
                    </div>
                </div>

                <!-- Teks 2 -->
                <div class="mb-5 pe-lg-4">
                    <p class="fs-5">
                        Daftarkan buah hati Anda sekarang juga untuk mengikuti lomba mewarnai dalam rangka acara
                        <strong>BACK TO SCHOOL</strong> bersama <strong>@kenko_id</strong> yang akan diadakan pada :
                    </p>
                    <p>
                        📆 <strong>Minggu, 13 Juli 2025</strong><br>
                        ⏰ <strong>08.00 WIB - Selesai</strong><br>
                        📍 <strong>Borma Cikutra (Jl. Cikutra Barat No. 66)</strong>
                    </p>
                    <p>
                        Kategori : TK<br>
                        Link pendaftaran : <a href="https://s.id/LombaMewarnaiLTT"
                            target="_blank">s.id/LombaMewarnaiLTT</a><br>
                        Info lebih lanjut : 0822-1401-8470 / 0821-2376-7002
                    </p>
                </div>

                <!-- Gambar 20 Juli -->
                <div class="row gx-3 justify-content-center mb-4">
                    <div class="col-md-6 mb-3 d-flex justify-content-center">
                        <img src="{{ asset('img/event&news/mewarnai/20juli-1.jpg') }}" class="img-fluid rounded shadow"
                            style="max-height: 380px; cursor:pointer;" alt="20 Juli 1"
                            onclick="openModal(this.src, this.alt)">
                    </div>
                    <div class="col-md-6 mb-3 d-flex justify-content-center">
                        <img src="{{ asset('img/event&news/mewarnai/20juli-2.jpg') }}" class="img-fluid rounded shadow"
                            style="max-height: 380px; cursor:pointer;" alt="20 Juli 2"
                            onclick="openModal(this.src, this.alt)">
                    </div>
                </div>

                <!-- Teks 3 -->
                <div class="mb-5 pe-lg-4">
                    <p class="fs-5">
                        Daftarkan buah hati Anda sekarang juga untuk mengikuti lomba mewarnai dalam rangka acara
                        <strong>BACK TO SCHOOL</strong> bersama <strong>@indomilk.kids</strong> yang akan diadakan pada :
                    </p>
                    <p>
                        📆 <strong>Minggu, 20 Juli 2025</strong><br>
                        ⏰ <strong>09.00 WIB - Selesai</strong><br>
                        📍 <strong>Borma Kerkof (Jl. Kerkof No.35, Leuwigajah)</strong>
                    </p>
                    <p>
                        Kategori : TK & SD (Kelas 1-3)<br>
                        Link pendaftaran : <a href="https://s.id/LombaMewarnaiLTT"
                            target="_blank">s.id/LombaMewarnaiLTT</a><br>
                        Info lebih lanjut : 0822-1401-8470 / 0821-2376-7004
                    </p>
                </div>

                <h2 class="text-center mb-5">✨ BACK TO SCHOOL - SIDU ✨</h2>
                <!-- Gambar 30 Juni -->
                <div class="row gx-3 justify-content-center mb-4">
                    <div class="col-md-6 mb-3 d-flex justify-content-center">
                        <img src="{{ asset('img/event&news/mewarnai/30juni-1.jpg') }}" class="img-fluid rounded shadow"
                            style="max-height: 480px; cursor:pointer;" alt="30 Juni 1"
                            onclick="openModal(this.src, this.alt)">
                    </div>
                </div>

                <!-- Teks 4 -->
                <div class="mb-5 pe-lg-4">
                    <p class="fs-5">
                        Dapatkan harga spesial mulai dari Rp 19.900 untuk buku tulis <strong>@sidu.id</strong> 🤩 Jangan
                        lupa ada lucky dipnya juga nih dengan min pembelian buku SIDU 3 pack
                    </p>
                    <p>
                        Program ini berlaku di semua cabang Prama Borma Group di bawah ini :<br>
                        📍 Prama Toserba Banjaran, Babakan Sari, Ciparay<br>
                        📍 Borma Buah Batu, Cikutra, Cijerah, Kerkof, Gempol<br>
                        📍 Prama Fresh Mekarwangi, Burangrang, Garuda, Perintis (Sarijadi)<br>
                        📍 Tikma Soreang
                    </p>
                    <p>
                        Buat yang beruntung bisa dapetin sepeda dan bisa langsung dibawa pulang 😉
                    </p>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar-sticky">
                    <h5 class="mb-3">Event & News Lainnya</h5>

                    <!-- Thumbnail 1 -->
                    <div class="card border-0 shadow-sm">
                        <a href="{{ route('news.donor') }}" class="text-decoration-none">
                            <img src="{{ asset('img/event&news/donor/1.jpg') }}" alt="Aksi Donor Darah"
                                class="sidebar-thumb-img">
                            <div class="card-body p-2">
                                <span class="badge bg-primary mb-1">Event</span>
                                <h6 class="card-title mb-1">🩸 Aksi Donor Darah</h6>
                            </div>
                        </a>
                    </div>

                    <!-- Thumbnail 2 -->
                    <div class="card border-0 shadow-sm">
                        <a href="{{ route('event.pbb') }}" class="text-decoration-none">
                            <img src="{{ asset('img/event&news/pbb1.jpg') }}" alt="Pelatihan PBB"
                                class="sidebar-thumb-img">
                            <div class="card-body p-2">
                                <span class="badge bg-primary mb-1">Event</span>
                                <h6 class="card-title mb-1">🎁 PBB Berhadiah</h6>
                            </div>
                        </a>
                    </div>

                    <!-- Thumbnail 3 -->
                    <div class="card border-0 shadow-sm">
                        <a href="{{ route('event.resep') }}" class="text-decoration-none">
                            <img src="{{ asset('img/event&news/resep/churros.jpg') }}" alt="Kegiatan Resep"
                                class="sidebar-thumb-img">
                            <div class="card-body p-2">
                                <span class="badge bg-primary mb-1">Event</span>
                                <h6 class="card-title mb-1">👨‍🍳 RECIPE</h6>
                            </div>
                        </a>
                    </div>

                    <!-- Thumbnail 4 -->
                    <div class="card border-0 shadow-sm">
                        <a href="{{ route('event.icecream') }}" class="text-decoration-none">
                            <img src="{{ asset('img/event&news/icecream/3.jpg') }}" alt="Ice Cream"
                                class="sidebar-thumb-img">
                            <div class="card-body p-2">
                                <span class="badge bg-primary mb-1">Event</span>
                                <h6 class="card-title mb-1">🍨 Ice Cream</h6>
                            </div>
                        </a>
                    </div>

                    <!-- Thumbnail 5 -->
                    <div class="card border-0 shadow-sm">
                        <a href="{{ route('event.sasha') }}" class="text-decoration-none">
                            <img src="{{ asset('img/event&news/sasha/1.jpg') }}" alt="Sasha Hair Color"
                                class="sidebar-thumb-img">
                            <div class="card-body p-2">
                                <span class="badge bg-primary mb-1">Event</span>
                                <h6 class="card-title mb-1">🧴 Sasha Hair Color</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk zoom gambar -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-0 border-0 position-relative">
                <button type="button" class="btn-close bg-warning" data-bs-dismiss="modal" aria-label="Close"></button>
                <img id="modalImage" src="" alt="" class="img-fluid d-block mx-auto" />
            </div>
        </div>
    </div>

    <script src="{{ asset('js/main/event/mewarnai.js') }}"></script>
@endsection
