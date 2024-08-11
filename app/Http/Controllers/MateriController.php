<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kursus;
use App\Models\Materi;

class MateriController extends Controller
{
    public function index($kursusId)
    {
    $kursus = Kursus::findOrFail($kursusId);
    $materi = $kursus->materi;
    return view('materi.index', compact('kursus', 'materi'));
    }

    public function create(Kursus $kursus)
    {
        return view('materi.create', compact('kursus'));
    }

    public function store(Request $request, Kursus $kursus)
    {
        // $kursus->materi()->create($request->all());
        // return redirect()->route('materi.index', $kursus);
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'link_embed' => 'nullable|string',
        ]);
    
        $kursus->materi()->create($validated);
    
        // Set flash message
        return redirect()->route('materi.index', $kursus)->with('success', 'Data berhasil disimpan.');

    }

    public function edit(Kursus $kursus, Materi $materi)
    {
        return view('materi.edit', compact('kursus', 'materi'));
    }

    public function update(Request $request, Kursus $kursus, Materi $materi)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'link_embed' => 'nullable|string',
        ]);
    
        $materi->update($validated);
    
        return redirect()->route('materi.index', $kursus->id)->with('success', 'Materi berhasil diperbarui.');
    }

    public function destroy(Kursus $kursus, Materi $materi)
    {
        $materi->delete();

        return redirect()->route('materi.index', $kursus->id)->with('success', 'Materi berhasil dihapus.');
    }
}
