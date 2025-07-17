<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'tanggal_kunjungan' => 'required|date',
            'pesan' => 'nullable|string',
        ]);

        // Kirim email ke admin (bisa diganti sesuai kebutuhan)
        \Mail::raw("Booking baru dari: {$validated['nama']}\nEmail: {$validated['email']}\nTanggal: {$validated['tanggal_kunjungan']}\nPesan: {$validated['pesan']}", function ($message) {
            $message->to('admin@klinik.com')
                    ->subject('Booking Kunjungan Dokter');
        });

        return redirect('/')->with('success', 'Booking berhasil dikirim!');
    }
}

