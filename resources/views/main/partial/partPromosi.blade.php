@php
            $bulan = [
                '01' => 'Januari',
                '02' => 'Februari',
                '03' => 'Maret',
                '04' => 'April',
                '05' => 'Mei',
                '06' => 'Juni',
                '07' => 'Juli',
                '08' => 'Agustus',
                '09' => 'September',
                '10' => 'Oktober',
                '11' => 'November',
                '12' => 'Desember',
            ][date('m')];
        @endphp
<link rel="stylesheet" href="{{ asset('css/main/partial/partPromosi.css') }}">

<div class="container-fluid pt-0 my-3 px-0">
    <div class="text-center mx-auto mt-2" style="max-width: 600px;">
        <h1>Promosi <span class="text-primary">{{ $bulan }}</span></h1>
    </div>
    <div class="owl-carousel project-carousel">
        @foreach ($promoFinal as $promo)
            <div class="project-item pb-4 px-3">
                <img class="img-fluid rounded2" src="{{ $promo['gambar'] }}" alt="Promo {{ $promo['nama'] }}" />
                <div class="project-title">
                    <a href="javascript:void(0)" class="btn btn-light rounded-4 text-primary lead"
                        onclick="openPromoModal({{ $loop->index }})">
                        Beli Sekarang <i class="bi bi-cart" style="color: rgb(0,180,0)"></i>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Promo Modal -->
<div id="promoProductModal" class="promo-modal-overlay">
    <div class="promo-modal-content">
        <div class="promo-modal-header">
            <h2 class="promo-modal-title" id="promoModalTitle">Pilih Produk</h2>
            <button class="promo-close-btn" onclick="closePromoModal()">&times;</button>
        </div>

        <div id="promoModalBody">
        </div>

        <div class="promo-modal-actions">
            <button class="promo-btn-modal promo-btn-cancel" onclick="closePromoModal()">Batal</button>
            <button class="promo-btn-modal promo-btn-confirm" id="promoConfirmBtn" onclick="confirmPromoPurchase()">Beli
                Sekarang</button>
        </div>
    </div>
</div>

<script>
    window.promoModalData = @json($promoFinal);
    window.confirmPromoRoute = "{{ route('select.store') }}";
</script>
<script src="{{ asset('js/main/partial/partPromosi.js') }}"></script>
