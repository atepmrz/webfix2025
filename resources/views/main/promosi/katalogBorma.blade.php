@extends('main.master_layout')

@section('konten')
    <link href="{{ asset('dist/open-image-modal.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main/promosi/katalogBorma.css') }}" />

    <section id="slider" class="pt-5">
        <div class="container">
            <div class="slider">
                <div class="owl-carousel">
                    @foreach ($files as $file)
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="{{ asset($file) }}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Carousel End -->

    <section id="donwload" class="container-fluid">
        <div class="container">
            <div class="row text-center">
                <div class="col-offset-5">
                    <a href="{{ url('/pdf/mailerPramaBorma.pdf') }}" class="btn btn-danger text-center"
                        style="border-radius: 5px"><i class="fa fa-download"></i>
                        Download Katalog Prama Borma
                    </a>
                </div>
            </div>
        </div>
    </section>

   <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"
        integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/main/promosi/katalogBorma.js') }}"></script>
    <script src="{{ asset('dist/open-image-modal.js') }}"></script>
@endsection
