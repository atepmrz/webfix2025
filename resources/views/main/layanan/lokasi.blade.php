@extends('main.master_layout')
@section('konten')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-2 mb-0 wow fadeIn bg-success" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Lokasi</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}" class="text-white">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('/lokasi') }}" class="text-white">Layanan</a>
                    </li>
                    {{-- <li class="breadcrumb-item active" aria-current="page">Lokasi</li> --}}
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    @include('main.partial.partLokasi')
@endsection
