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
    <section class="container-fluid py-5 bg-batik-background">
        <div class="container">
            <div class="row g-5 align-items-start">
                <!-- Video Utama -->
                <div class="col-12 col-md-8">
                    <div class="main-video-container shadow rounded3">
                        <div class="ratio ratio-16x9">
                            <video id="mainVideo" controls class="w-100 h-100 rounded-0">
                                <source src="{{ $videos[0]['src'] ?? asset('video/fashion/batik.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <!-- Playlist -->
                <div class="col-12 col-md-4">
                    <h5 class="mb-3 fw-bold text-second">Playlist Video</h5>
                    <div id="videoPlaylist" class="d-flex flex-column gap-3">
                        @foreach ($videos as $video)
                            <div class="playlist-item d-flex align-items-center p-2 bg-dark bg-opacity-50 rounded2 text-white shadow-sm"
                                data-video="{{ $video['src'] }}" style="cursor:pointer;">
                                <div class="ratio ratio-16x9 playlist-video-thumb">
                                    <video muted preload="metadata" class="rounded playlist-video-thumb-inner">
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
