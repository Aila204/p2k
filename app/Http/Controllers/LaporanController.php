<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    // Tampilkan semua laporan
    public function index()
    {
        $laporans = Laporan::latest()->get();
        return view('dasbordAdmin', compact('laporans'));
    }

    // Tampilkan form tambah
    public function create()
    {
        return view('laporan.create');
    }

    // Simpan laporan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_melapor' => 'required|date',
            'lokasi_kerusakan' => 'required|string|max:255',
            'deskripsi_kerusakan' => 'nullable|string',
        ]);

        Laporan::create($validated);

        return redirect()->route('dasbord')->with('success', 'Laporan berhasil disimpan.');
    }

    // Tampilkan 1 laporan
    public function show($id)
    {
        $laporan = Laporan::findOrFail($id);
        return view('laporan.show', compact('laporan'));
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $laporan = Laporan::findOrFail($id);
        return view('dasbord', compact('laporan'));
    }

    // Update laporan
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_melapor' => 'required|date',
            'lokasi_kerusakan' => 'required|string|max:255',
            'deskripsi_kerusakan' => 'nullable|string',
        ]);

        $laporan = Laporan::findOrFail($id);
        $laporan->update($validated);

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil diperbarui.');
    }

    // Hapus laporan
    public function destroy($id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->delete();

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil dihapus.');
    }
}
