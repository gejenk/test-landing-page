<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        // Simpan ke database atau kirim email
        // Untuk sekarang, redirect ke halaman sukses
        return back()->with('success', 'Terima kasih! Pesan Anda telah diterima.');
    }

    public function subscribeNewsletter(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ]);

        // Simpan email ke database
        return back()->with('success', 'Terima kasih telah berlangganan newsletter kami!');
    }
}