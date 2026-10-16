<?php

namespace App\Http\Controllers;

use App\Mail\PermintaanBaru;
use App\Models\Permintaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PermintaanController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'layanan'    => 'required|string|max:100',
            'jumlah'     => 'required|integer|min:1|max:10000',
            'tanggal'    => 'nullable|date',
            'perusahaan' => 'required|string|max:150',
            'kontak'     => 'required|string|max:150',
        ]);

        $data['kode'] = 'HPP-' . strtoupper(Str::random(5));

        Permintaan::create([
            'kode'        => $data['kode'],
            'layanan'     => $data['layanan'],
            'jumlah'      => $data['jumlah'],
            'mulai_tugas' => $data['tanggal'] ?? null,
            'perusahaan'  => $data['perusahaan'],
            'kontak'      => $data['kontak'],
        ]);

        try {
            Mail::to(['wallacegrisven3@gmail.com'])->send(new PermintaanBaru($data));
        } catch (\Throwable $e) {
            Log::error('Gagal kirim email: ' . $e->getMessage());
        }

        return response()->json(['ok' => true, 'kode' => $data['kode']]);
    }
}