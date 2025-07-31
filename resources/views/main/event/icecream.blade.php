@extends('main.master_layout')
@section('konten')
    <link rel="stylesheet" href="{{ asset('css/main/event/icecream.css') }}">

    <div class="container my-5">
        <div class="row d-flex align-items-start">
            <!-- Konten utama -->
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="text-center mb-5">✨ICE CREAM FAIR-KREASI HIAS ES KRIM✨</h2>

                <!-- Baris Gambar -->
                <div class="row gx-3 justify-content-center mb-4">
                    <div class="col-md-6 mb-3 d-flex justify-content-center">
                        <img src="{{ asset('img/event&news/icecream/1.jpg') }}" class="img-fluid rounded shadow"
                            style="max-height: 380px; cursor:pointer;" alt="Event Tikma Soreang"
                            onclick="openModal(this.src, this.alt)">
                    </div>
                    <div class="col-md-6 mb-3 d-flex justify-content-center">
                        <img src="{{ asset('img/event&news/icecream/2.jpg') }}" class="img-fluid rounded shadow"
                            style="max-height: 380px; cursor:pointer;" alt="Event Prama Babakan Sari"
                            onclick="openModal(this.src, this.alt)">
                    </div>
                </div>

                <!-- Teks -->
                <div class="mb-5 pe-lg-4">
                    <p class="fs-5">
                        Hias es krim sesukamu dan dapatkan pula tiket masuk ke <strong>Playland</strong> atau <strong>Koin
                            Carnival</strong> 🤩😍<br>
                        Dan menangkan voucher belanja <strong>Rp 200.000</strong> untuk peserta favorit! 🥰
                    </p>
                    <p>
                        📆 <strong>Sabtu, 28 Juni 2025</strong><br>
                        📍 <strong>Tikma Soreang</strong> & <strong>Prama Babakan Sari</strong>
                    </p>
                    <p>
                        🔗 Link pendaftaran: <a href="https://s.id/KreasiHiasEskrim"
                            target="_blank">s.id/KreasiHiasEskrim</a><br>
                        📞 Info lebih lanjut: 0822-1401-8470
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
                        <a href="{{ route('event.mewarnai') }}" class="text-decoration-none">
                            <img src="{{ asset('img/event&news/bck1.jpg') }}" alt="Lomba Mewarnai"
                                class="sidebar-thumb-img">
                            <div class="card-body p-2">
                                <span class="badge bg-primary mb-1">Event</span>
                                <h6 class="card-title mb-1">🎨 Lomba Mewarnai</h6>
                            </div>
                        </a>
                    </div>

                    <!-- Thumbnail 3 -->
                    <div class="card border-0 shadow-sm">
                        <a href="{{ route('event.pbb') }}" class="text-decoration-none">
                            <img src="{{ asset('img/event&news/pbb1.jpg') }}" alt="Pelatihan PBB" class="sidebar-thumb-img">
                            <div class="card-body p-2">
                                <span class="badge bg-primary mb-1">Event</span>
                                <h6 class="card-title mb-1">🎁 PBB Berhadiah</h6>
                            </div>
                        </a>
                    </div>

                    <!-- Thumbnail 4 -->
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

    <script src="{{ asset('js/main/event/icecream.js') }}"></script>
@endsection
