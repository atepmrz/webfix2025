@extends('main.master_layout')
@section('konten')
    <link rel="stylesheet" href="{{ asset('css/main/event/donor.css') }}" />

    <div class="container my-5">
        <div class="row d-flex align-items-start">
            <!-- Konten utama -->
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="text-center mb-5">🩸AKSI NYATA DONOR DARAH🩸</h2>

                <div class="text-center mb-4">
                    <img src="{{ asset('img/event&news/donor/1.jpg') }}" alt="Aksi Donor Darah" class="img-fluid rounded"
                        style="
                        max-width: 80%;
                        max-height: 400px;
                        cursor: pointer;
                        object-fit: contain;
                    "
                        onclick="openModal(this.src, this.alt)">
                </div>

                <div class="pe-lg-4">
                    <p class="fs-5 fw-bold">Setetes Darah, Selamatkan Jiwa Vol.5</p>
                    <p class="fs-5">
                        Saatnya jadi <strong>pahlawan kemanusiaan!</strong> Donorkan darahmu dan bantu mereka yang sedang
                        berjuang untuk hidup ❤️
                    </p>

                    <p>
                        📅 <strong>Sabtu, 9 Agustus 2025</strong><br>
                        ⏰ <strong>09.00 - 13.00 WIB</strong><br>
                        📍 <strong>Entrance Borma Gempol</strong>
                    </p>

                    <p class="fs-5 fw-bold text-success">
                        🎁 Dapatkan gift menarik bagi pendonor yang lolos!!
                    </p>

                    <p class="fs-5 fw-bold mt-4">
                        🔗 Daftar sekarang:
                        <br>
                        <a href="https://bit.ly/ANDD_Borma9Aug" target="_blank">https://bit.ly/ANDD_Borma9Aug</a>
                    </p>

                    <p class="mt-4 fs-5 fst-italic">
                        Setetes darah, Sejuta Harapan, Bersama kita bantu sesama.
                    </p>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar-sticky">
                    <h5 class="mb-3">Event & News Lainnya</h5>

                    <div class="card border-0 shadow-sm">
                        <a href="{{ route('event.mewarnai') }}" class="text-decoration-none">
                            <img src="{{ asset('img/event&news/bck1.jpg') }}" alt="Lomba Mewarnai"
                                class="sidebar-thumb-img">
                            <div class="card-body p-2">
                                <span class="badge bg-primary mb-1">Event</span>
                                <h6 class="card-title mb-1">🎨 Lomba Mewarnai</h6>
                            </div>
                        </a>
                    </div>

                    <div class="card border-0 shadow-sm">
                        <a href="{{ route('event.pbb') }}" class="text-decoration-none">
                            <img src="{{ asset('img/event&news/pbb1.jpg') }}" alt="Pelatihan PBB" class="sidebar-thumb-img">
                            <div class="card-body p-2">
                                <span class="badge bg-primary mb-1">Event</span>
                                <h6 class="card-title mb-1">🎁 PBB Berhadiah</h6>
                            </div>
                        </a>
                    </div>

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

    <!-- Modal Zoom Gambar -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-0 border-0 position-relative">
            <button type="button" class="btn-close bg-warning" data-bs-dismiss="modal" aria-label="Close"></button>
            <img id="modalImage" src="" alt="" class="img-fluid d-block mx-auto" />
        </div>
    </div>
</div>


    <script src="{{ asset('js/main/event/donor.js') }}"></script>
@endsection
