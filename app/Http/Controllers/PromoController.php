<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function showBanner(){
        return view('main.home');
    }

    public function showMailerBorma()
    {
        $files = [];
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'svg'];
        $directory = public_path('img/promo/borma/');

        if (is_dir($directory)) {
            $allFiles = scandir($directory);

            foreach ($allFiles as $file) {
                if ($file === '.' || $file === '..') {
                    continue;
                }

                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed_extensions)) {
                    $files[] = 'img/promo/borma/' . $file;
                }
            }

            natsort($files);
            $files = array_values($files);
        }

        return view('main.promosi.katalogBorma', compact('files'));
    }
   public function showMailerFresh()
    {
        $files = [];
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'svg'];
        $directory = public_path('img/promo/fresh/');

        if (is_dir($directory)) {
            $allFiles = scandir($directory);

            foreach ($allFiles as $file) {
                if ($file === '.' || $file === '..') {
                    continue;
                }

                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed_extensions)) {
                    $files[] = 'img/promo/fresh/' . $file;
                }
            }
             natsort($files);
            $files = array_values($files);
        }
        return view('main.promosi.katalogFresh', compact('files'));
    }
    public function showPromoGajian()
    {
        $files = [];
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'svg'];
        $directory = public_path('img/promo/gajian');

        if (is_dir($directory)) {
            $allFiles = scandir($directory);

            foreach ($allFiles as $file) {
                if ($file === '.' || $file === '..') continue;

                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed_extensions)) {
                    $files[] = 'img/promo/gajian/' . $file;
                }
            }
        }
        return view('main.promosi.proGajian', compact('files'));
    }

    public function showPromoCarnival()
    {
        $files = [];
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'svg'];
        $directory = public_path('img/promo/carnival');

        if (is_dir($directory)) {
            $allFiles = scandir($directory);

            foreach ($allFiles as $file) {
                if ($file === '.' || $file === '..') continue;

                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed_extensions)) {
                    $files[] = 'img/promo/carnival/' . $file;
                }
            }
        }

        return view('main.promosi.proCarnival', compact('files'));
    }

    public function showPromoJSM()
    {
        $files = [];
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'svg'];
        $directory = public_path('img/promo/jsm');

        if (is_dir($directory)) {
            $allFiles = scandir($directory);

            foreach ($allFiles as $file) {
                if ($file === '.' || $file === '..') continue;

                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed_extensions)) {
                    $files[] = 'img/promo/jsm/' . $file;
                }
            }
        }

        return view('main.promosi.proJsm', compact('files'));
    }

    public function showPromoFashion()
{
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

    return view('main.promosi.proFashion', compact('videos'));
}
    public function showPromoHome()
    {
        $promoList = collect([
            [
                'nama' => 'BREXCELLE',
                'file' => 'brexcelle',
                'harga' => 17500,
                'produk' => [
                    ['nama' => 'Rujak Cireng Rasa Original', 'harga' => 17500, 'satuan' => 'pcs']
                ]
            ],
            [
                'nama' => 'KANZLER',
                'file' => 'kanzler',
                'harga' => 135000,
                'produk' => [
                    ['nama' => 'Kanzler Cocktail 500gr', 'harga' => 45000, 'satuan' => 'pcs'],
                    ['nama' => 'Kanzler Chicken Nugget 450gr', 'harga' => 45000, 'satuan' => 'pcs'],
                    ['nama' => 'Kanzler Crispy Chicken Nugget', 'harga' => 45000, 'satuan' => 'pcs']
                ]
            ],
            [
                'nama' => 'PERFECTIO',
                'file' => 'perfectio',
                'harga' => 33000,
                'produk' => [
                    ['nama' => 'Chicken Skin 300gr', 'harga' => 33000, 'satuan' => 'pcs'],
                ]
            ],
            [
                'nama' => 'YOSEO CREAMIX',
                'file' => 'yoseo',
                'harga' => 55400,
                'produk' => [
                    ['nama' => 'Choco Granola', 'harga' => 9250, 'satuan' => 'pcs'],
                    ['nama' => 'Honey Granola', 'harga' => 9250, 'satuan' => 'pcs'],
                    ['nama' => 'Cookies&Cream 90ml', 'harga' => 9250, 'satuan' => 'pcs'],
                    ['nama' => 'Caramel Tpg Nut Crunch', 'harga' => 9250, 'satuan' => 'pcs'],
                    ['nama' => 'Bluberry Chs Cake', 'harga' => 9200, 'satuan' => 'pcs'],
                    ['nama' => 'Stawberry Chs Cake', 'harga' => 9200, 'satuan' => 'pcs']
                ]
            ],
            [
                'nama' => 'Harga Special',
                'file' => 'special1',
                'harga' => 24000,
                'produk' => [
                    ['nama' => 'Coca-cola', 'harga' => 8000, 'satuan' => 'pcs'],
                    ['nama' => 'Fanta', 'harga' => 8000, 'satuan' => 'pcs'],
                    ['nama' => 'Sprite 1L', 'harga' => 8000, 'satuan' => 'pcs']
                ]
            ],
            [
                'nama' => 'Harga Special',
                'file' => 'special2',
                'harga' => 8800,
                'produk' => [
                    ['nama' => 'Chiki Twist Rasa Jagung Bakar', 'harga' => 8800, 'satuan' => 'pcs']
                ]
            ],
            // [
            //     'nama' => 'Sahabat Alam Telur Kampung 6s & 10s',
            //     'file' => 'promojuly6',
            //     'harga' => 63360,
            //     'diskon' => true, 
            //     'diskon_persen' => 10, 
            //     'produk' => [
            //         ['nama' => 'Sahabat Alam Telur Kampung 6s', 'harga' => 25250, 'satuan' => 'pack', 'diskon' => true, 'diskon_persen' => 10],
            //         ['nama' => 'Sahabat Alam Telur Kampung 10s', 'harga' => 38550, 'satuan' => 'pack', 'diskon' => true, 'diskon_persen' => 10]
            //     ]
            // ],
            // [
            //     'nama' => 'Kanzler Singles Bakso Keju, Kanzler Singles Bakso Original, Kanzler Singles Bakso Hot, Kanzler Singles Bakso Gochujang, Fiesta Crispy Bubble 400g, Fiesta Stikie 400g',
            //     'file' => 'promojuly8',
            //     'harga' => 116000,
            //     'produk' => [
            //         ['nama' => 'Kanzler Singles Bakso Keju', 'harga' => 6900, 'satuan' => 'pcs'],
            //         ['nama' => 'Kanzler Singles Bakso Original', 'harga' => 6900, 'satuan' => 'pcs'],
            //         ['nama' => 'Kanzler Singles Bakso Hot', 'harga' => 6900, 'satuan' => 'pcs'],
            //         ['nama' => 'Kanzler Singles Bakso Gochujang', 'harga' => 6900, 'satuan' => 'pcs'],
            //         ['nama' => 'Fiesta Crispy Bubble 400g', 'harga' => 41500, 'satuan' => 'pcs'],
            //         ['nama' => 'Fiesta Stikie 400g', 'harga' => 46900, 'satuan' => 'pcs']
            //     ]
            // ],
            // [
            //     'nama' => 'Semangka Merah',
            //     'file' => 'promojuly9',
            //     'harga' => 990,
            //     'produk' => [
            //         ['nama' => 'Semangka Merah', 'harga' => 990, 'satuan' => '100g']
            //     ]
            // ],
        ]);

       $promoFinal = $promoList
            ->map(function ($promo) {
                $extensions = ['.jpg', '.jpeg', '.png'];
                foreach ($extensions as $ext) {
                    $path = 'img/promo/items/' . $promo['file'] . $ext;
                    if (file_exists(public_path($path))) {
                        $promo['gambar'] = asset($path);
                        
                        if (isset($promo['produk'])) {
                            $promo['produk'] = collect($promo['produk'])->map(function ($item) {
                                $satuan = $item['satuan'] ?? 'pcs';
                                if (isset($item['diskon']) && $item['diskon']) {
                                    $item['harga_formatted'] = 'Diskon ' . $item['diskon_persen'] . '%';
                                } else {
                                    $item['harga_formatted'] = 'Rp. ' . number_format($item['harga'], 0, ',', '.') . '/' . $satuan;
                                }
                                return $item;
                            })->toArray();
                        }
                        
                        return $promo;
                    }
                }
                return null;
            })
            ->filter()
            ->values();

        return view('main.home', compact('promoFinal'));
    }

    public function showSelectStore(Request $request)
    {
        $produk = $request->get('produk', 'Produk');
        $harga = $request->get('harga', 0);

        $produkArray = json_decode($produk, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            $satuan = $request->get('satuan', 'pcs');
            $produkArray = [['nama' => $produk, 'harga' => $harga, 'satuan' => $satuan]];
        }

        foreach ($produkArray as &$item) {
            if (in_array($item['nama'], ['Sahabat Alam Telur Kampung 6s', 'Sahabat Alam Telur Kampung 10s'])) {
                $item['diskon'] = true;
                $item['diskon_persen'] = 10;
                $item['harga_formatted'] = 'Diskon 10%';
            } else {
                $item['diskon'] = false;
                $item['harga_formatted'] = 'Rp. ' . number_format($item['harga'], 0, ',', '.') . '/' . ($item['satuan'] ?? 'pcs');
            }
        }

        $satuan = count($produkArray) === 1 ? ($produkArray[0]['satuan'] ?? 'pcs') : 'pcs';


      $stores = collect([['nama' => 'Borma Gempol', 'wa' => '6282124639585', 'gambar' => 'bgp.jpg'], ['nama' => 'Borma Cijerah', 'wa' => '6282127416745', 'gambar' => 'bcj.jpg'], ['nama' => 'Borma Cikutra', 'wa' => '6282123767002', 'gambar' => 'bck.jpg'], ['nama' => 'Borma Kerkof', 'wa' => '6282123767004', 'gambar' => 'bkk.jpg'], ['nama' => 'Prama Banjaran', 'wa' => '6282123766990', 'gambar' => 'pbj.jpg'], ['nama' => 'Prama Babakan Sari', 'wa' => '6282123766991', 'gambar' => 'pbs.jpg'], ['nama' => 'Prama Ciparay', 'wa' => '6281313088967', 'gambar' => 'pcp.jpg'], ['nama' => 'Prama Fresh Burangrang', 'wa' => '6281223725553', 'gambar' => 'fbr.jpg'], ['nama' => 'Prama Fresh Garuda', 'wa' => '6281322386181', 'gambar' => 'fgd.jpg'], ['nama' => 'Prama Fresh Mekarwangi', 'wa' => '6282164663838', 'gambar' => 'fmw.jpg'], ['nama' => 'Prama Fresh Perintis', 'wa' => '6282117433790', 'gambar' => 'fps.jpg']]);

        $storesFinal = $stores->map(function ($store) {
            $store['gambar'] = asset('img/lokasi/' . $store['gambar']);
            return $store;
        });
        
        return view('main.layanan.layar.selectStore', compact('produk', 'harga', 'satuan', 'produkArray', 'storesFinal'));
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Promo $promo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promo $promo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promo $promo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promo $promo)
    {
        //
    }
}
