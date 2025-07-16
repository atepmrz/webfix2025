<div>
    <style>
        .rounded2 {
            border-radius: 10px;
        }
    </style>

    <div class="container-fluid pt-0 my-3 px-0">
        <div class="text-center mx-auto mt-2" style="max-width: 600px;">
            <h1 class="display-5 mb-4">Promosi <span class="text-primary">{{ date('F') }}</span></h1>
        </div>

        <div class="owl-carousel project-carousel">
            @foreach ($files as $promo)
            <a class="project-item pb-4 px-3 py-3" href="{{ url('/layar')}}">
                <img class="img-fluid rounded2" src="{{ $promo }}" alt="Promo" />
                <div class="project-title">
                    <button class="btn btn-light rounded-4 text-primary lead">
                        Beli Sekarang <i class="bi bi-cart" style="color: rgb(0,180,0)"></i>
                    </button>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>