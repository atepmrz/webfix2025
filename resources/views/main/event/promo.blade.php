@extends('main.master_layout')

@section('konten')

    <div class="container my-5">
        <div class="row d-flex align-items-start">
            <div class="col-lg-10 mb-4 mb-lg-0 mx-auto">
                <h1 class="text-center mb-5">✨PROMO AGUSTUS✨</h1>

                <div class="row justify-content-center mb-4">
                    <div class="col-md-5 mb-3" style="margin-right: 40px;">
                        <h3 class="text-center mb-3">Katalog Borma</h3>
                        <div class="d-flex justify-content-center">
                            <a href="{{ url('/katalog-pramaborma') }}"><img src="{{ asset('img/promo/borma/1.jpg') }}" class="img-fluid rounded shadow"
                                style="max-height: 450px; width: auto; cursor:pointer;" alt="katalogborma"></a>
                        </div>
                    </div>
                    
                    <div class="col-md-5 mb-3" style="margin-left: 40px;">
                        <h3 class="text-center mb-3">Katalog Fresh</h3>
                        <div class="d-flex justify-content-center">
                            <a href="{{ url('/katalog-pramafresh') }}"><img src="{{ asset('img/promo/fresh/HAL1.jpeg') }}" class="img-fluid rounded shadow"
                                style="max-height: 450px; width: auto; cursor:pointer;" alt="katalogfresh"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener("load", function() {
            const spinner = document.getElementById('spinner');
            if (spinner) {
                spinner.classList.remove('show');
            }
        });
    </script>
@endsection