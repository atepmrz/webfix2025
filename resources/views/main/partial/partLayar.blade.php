<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('css/main/partial/partLayar.css') }}" />

<section id="layar" class="container-fluid">
    <br>
    <div class="container-xxl py-3">
        <div class="container text-center" data-wow-delay="0.3s" style="max-width: 600px;">
            <h2 class="display-6 mb-4">Pilih Lokasi Prama Borma Group</h2>
        </div>

        <div class="row g-4">
            @foreach ($cabang as $i => $c)
                @php
                    $delay = number_format(0.1 + $i * 0.1, 1);
                @endphp
                <div class="col-lg-4 col-md-6 col-6 wow fadeInUp" data-wow-delay="{{ $delay }}s">
                    <div class="team-item rounded overflow-hidden shadow-sm">
                        <img class="img-fluid mb-2 location-image" src="{{ asset('img/lokasi/' . $c['gambar']) }}"
                            alt="Lokasi {{ $c['nama'] }}" loading="lazy" />
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary d-flex align-items-center justify-content-center"
                                style="width: 90px; height: 90px; border-radius: 10px 0 0 10px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>

                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4 team-info-container"
                                style="height: 90px; border-radius: 0 10px 10px 0;">
                                @if ($c['wa'])
                                    <a href="https://wa.me/{{ $c['wa'] }}" target="_blank"
                                        class="text-decoration-none text-dark">
                                        <h5>{{ $c['nama'] }}</h5>
                                        <div class="team-social">
                                            <h3 class="text-white mb-0">
                                                Layar <i class="fab fa-whatsapp" style="color: green"></i>
                                            </h3>
                                        </div>
                                    </a>
                                @else
                                    <div class="text-dark">
                                        <h5>{{ $c['nama'] }}</h5>
                                        <div class="team-social">
                                            <h4 class="text-white mb-0">New Store 🛒</h4>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
<script>
    new WOW().init();
</script>
