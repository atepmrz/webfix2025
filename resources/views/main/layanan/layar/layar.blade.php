@extends('main.master_layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/main/layanan/layar/layar.css') }}">
@endsection

@section('konten')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-0 mb-0 wow fadeIn bg-warning" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row">
                <!-- Judul Teks -->
                <div class="col-12 text-center mb-4">
                    <h1 class="display-3 text-white animated slideInRight">Layanan Antar</h1>
                </div>

                <!-- Gambar -->
                <div class="col-12 col-lg-8 offset-lg-2 text-center">
                    <img class="rounded-soft-img wow fadeInUp" src="{{ asset('img/header/layar-header.jpg') }}"
                        alt="header layar">
                </div>
            </div>
        </div>

    </div>
    <!-- Page Header End -->
    @include('main.partial.partLayar')
@endsection
