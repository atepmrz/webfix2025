<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CabangController extends Controller
{
    public static function getData()
    {
        return [
        ['nama' => 'Borma Gempol', 'wa' => '6282124639585', 'gambar' => 'bgp.jpg'],
        ['nama' => 'Borma Buah Batu', 'wa' => '6282123767001', 'gambar' => 'bbb.jpg'],
        ['nama' => 'Borma Cijerah', 'wa' => '6282127416745', 'gambar' => 'bcj.jpg'],
        ['nama' => 'Borma Cikutra', 'wa' => '6282123767002', 'gambar' => 'bck.jpg'],
        ['nama' => 'Borma Kerkof', 'wa' => '6282123767004', 'gambar' => 'bkk.jpg'],
        ['nama' => 'Prama Banjaran', 'wa' => '6282123766990', 'gambar' => 'pbj.jpg'],
        ['nama' => 'Prama Babakan Sari', 'wa' => '6282123766991', 'gambar' => 'pbs.jpg'],
        ['nama' => 'Prama Ciparay', 'wa' => '6281313088967', 'gambar' => 'pcp.jpg'],
        ['nama' => 'Prama Fresh Burangrang', 'wa' => '6281223725553', 'gambar' => 'fbr.jpg'],
        ['nama' => 'Prama Fresh Garuda', 'wa' => '6281322386181', 'gambar' => 'fgd.jpg'],
        ['nama' => 'Prama Fresh Mekarwangi', 'wa' => '6282164663838', 'gambar' => 'fmw.jpg'],
        ['nama' => 'Prama Fresh Perintis', 'wa' => '6282117433790', 'gambar' => 'fps.jpg'],
        ['nama' => 'Tikma Soreang', 'wa' => null, 'gambar' => 'tikma.jpg'],
    ];
    }
}