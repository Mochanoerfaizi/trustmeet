<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;

class MateriController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'topik' => 'required|string|max:255',
            'modul' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        Materi::create($validated);

        return redirect()->back()->with('success', 'Materi berhasil ditambahkan!');
    }
}

