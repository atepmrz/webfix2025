<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('created_at', 'desc')->get();
        return view('main.pesan.message', compact('messages'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ],[
            'name.required' => 'Nama wajib di isi',
            'email.email' => 'format Email tidak sesuai',
            'email.required' => 'Email wajib di isi',
            'subject.required' => 'Subject wajib di isi',
            'message.required' => 'Message wajib di isi',
        ]);

        Message::create($validated);

        if ($request->ajax()) {
            return response()->json(['message' => 'Pesan berhasil dikirim!']);
        }

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}
