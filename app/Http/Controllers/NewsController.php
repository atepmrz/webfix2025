<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
     public function donor()
    {
        return view('main.event.donor'); // file berada di views/main/event/donor.blade.php
    }

    public function promo()
    {
        return view('main.event.promo'); // = views/main/event/promo.blade.php
    }
}
