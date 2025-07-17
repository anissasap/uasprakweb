<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JanjiTemu;

class JanjiTemuController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'tanggal' => 'required|date',
            'rujukan' => 'required',
            'phone' => 'required',
            'message' => 'nullable|string',
        ]);

        JanjiTemu::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'tanggal' => $validated['tanggal'],
            'rujukan' => $validated['rujukan'],
            'phone' => $validated['phone'],
            'keluhan' => $validated['message'],
        ]);

        return redirect()->back()->with('success', 'Jadwal berhasil dikirim!');
    }
}
