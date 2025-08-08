@extends('main.master_layout')

@section('konten')

    <div class="container my-5">
        <div class="row d-flex align-items-start">
            <div class="col-lg-10 mb-4 mb-lg-0 mx-auto">
                <h1 class="text-center mb-5">✨PROMO AGUSTUS✨</h1>

                <div class="row justify-content-center mb-4">
                    <div class="col-md-5 mb-3" style="margin-right: 40px;">
                        <h3 class="text-center mb-3">Katalog borma</h3>
                        <div class="d-flex justify-content-center">
                            <a href="{{ url('/katalog-pramaborma') }}"><img src="{{ asset('img/promo/borma/1.jpg') }}" class="img-fluid rounded shadow"
                                style="max-height: 450px; width: auto; cursor:pointer;" alt="katalog"></a>
                        </div>
                        <p class="text-center mt-3 text-muted">
                            Info selengkapnya bisa klik <a href="{{ url('/katalog-pramaborma') }}" class="text-decoration-none">link ini ya</a> atau bisa klik gambar yang di atas
                        </p>
                    </div>
                    
                    <div class="col-md-5 mb-3" style="margin-left: 40px;">
                        <h3 class="text-center mb-3">Katalog fresh</h3>
                        <div class="d-flex justify-content-center">
                            <a href="{{ url('/katalog-pramafresh') }}"><img src="{{ asset('img/promo/fresh/HAL1.jpeg') }}" class="img-fluid rounded shadow"
                                style="max-height: 450px; width: auto; cursor:pointer;" alt="katalog"></a>
                        </div>
                        <p class="text-center mt-3 text-muted">
                            Info selengkapnya bisa klik <a href="{{ url('/katalog-pramafresh') }}" class="text-decoration-none">link ini ya</a> atau bisa klik gambar yang di atas
                        </p>
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