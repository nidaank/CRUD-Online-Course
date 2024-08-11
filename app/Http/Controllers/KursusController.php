<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kursus;

class KursusController extends Controller
{
    public function index()
    {
    $kursus = Kursus::all();
    return view('dashboard', compact('kursus'));
    }

    public function create()
    {
        return view('kursus.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'durasi' => 'required|integer',
        ]);
    
        Kursus::create($validated);
    
        // Set flash message
        return redirect()->route('dashboard')->with('success', 'Data berhasil disimpan.');
    }

    public function edit(Kursus $kursus)
    {
        return view('kursus.edit', compact('kursus'));
    }

    public function update(Request $request, $id)
    {
    $kursus = Kursus::findOrFail($id);

    // Validasi input
    $validated = $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'nullable|string',
        'durasi' => 'required|integer',
    ]);

    $kursus->update($validated);

    return redirect()->route('dashboard')->with('success', 'Kursus berhasil diperbarui.');
    }


    public function destroy(Kursus $kursus)
    {
        $kursus->delete();
        return redirect()->route('dashboard')->with('success', 'Kursus berhasil dihapus.');
    }
}
