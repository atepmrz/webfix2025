@extends('main.master_layout')
@section('konten')
    <link rel="stylesheet" href="{{ asset('css/main/promosi/proFashion.css') }}" />
    <!-- Page Header -->
    <div class="container-fluid page-header py-2 mb-0 wow fadeIn bg-warning" data-wow-delay="0.1s">
        <div class="container py-4">
            <h1 class="display-3 text-white animated slideInRight">Promo Fashion</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}" class="text-white">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('/promo-fashion') }}" class="text-white">Promosi</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Section Full Background Batik -->
    <section class="container-fluid py-5"
        style="background-color:rgb(253, 237, 163); background-size:cover; background-position:center;">
        {{-- style="background-image:url({{ asset('img/promo/fashion/bg-batik.jpg') }}); background-size:cover;
    background-position:center;"> --}}

        <div class="container">
            <div class="row g-5 align-items-start">
                <!-- Video Utama -->
                <div class="col-12 col-md-8">
                    <div class="rounded3 overflow-hidden shadow" style="border-radius: 16px; background-color: #fef7e5;">
                        <div class="ratio ratio-16x9">
                            <video id="mainVideo" controls class="w-100 h-100" style="border-radius: 0;">
                                <source src="{{ asset('video/fashion/batik.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
                <!-- Playlist -->
                <div class="col-12 col-md-4">
                    <h5 class="mb-3 fw-bold text-second">Playlist Video</h5>

                    @php
                        $videos = [
                            [
                                'src' => asset('video/fashion/batik.mp4'),
                                'title' => 'Video Batik',
                                'desc' => 'Motif Nusantara',
                            ],
                            [
                                'src' => asset('video/fashion/fashion1.mp4'),
                                'title' => 'Fashion Modern',
                                'desc' => 'Gaya Masa Kini',
                            ],
                            [
                                'src' => asset('video/fashion/fashion2.mp4'),
                                'title' => 'Koleksi Elegan',
                                'desc' => 'Untuk Acara Resmi',
                            ],
                        ];
                    @endphp

                    <div id="videoPlaylist" class="d-flex flex-column gap-3">
                        @foreach ($videos as $video)
                            <div class="playlist-item d-flex align-items-center p-2 bg-dark bg-opacity-50 rounded2 text-white shadow-sm"
                                data-video="{{ $video['src'] }}" style="cursor:pointer; border-radius: 12px;">
                                <div class="ratio ratio-16x9" style="width: 120px; min-width: 100px;">
                                    <video muted preload="metadata" class="rounded" style="border-radius: 10px;">
                                        <source src="{{ $video['src'] }}#t=5" type="video/mp4">
                                    </video>
                                </div>
                                <div class="ms-3">
                                    <strong class="d-block">{{ $video['title'] }}</strong>
                                    <small>{{ $video['desc'] }}</small>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JS -->
    <script src="{{ asset('js/main/promosi/proFashion.js') }}"></script>
@endsection
