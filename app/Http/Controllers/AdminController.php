<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $dataMsg = Message::orderBy('created_at', 'desc')->get();
        return view('user.dashboard', compact('dataMsg'));
    }
}
