<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class AddHomeController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        return view('layouts.private.home.index', compact('homes'));
    }

    public function create()
    {
        return view('layouts.private.home.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'hero' => 'required',
            'deskripsi' => 'required',
            'foto1' => 'required',
            'foto2' => 'required',
            'foto3' => 'required',
        ]);

        Home::create($request->all());

        return redirect()->route('home.index')
            ->with('success', 'Data Home berhasil ditambahkan.');
    }

    public function edit(Home $home)
    {
        return view('layouts.private.home.edit', compact('home'));
    }

    public function update(Request $request, Home $home)
    {
        $request->validate([
            'hero' => 'required',
            'deskripsi' => 'required',
            'foto1' => 'required',
            'foto2' => 'required',
            'foto3' => 'required',
        ]);

        $home->update($request->all());

        return redirect()->route('home.index')
            ->with('success', 'Data Home berhasil diperbarui.');
    }

    public function destroy(Home $home)
    {
        $home->delete();

        return redirect()->route('home.index')
            ->with('success', 'Data Home berhasil dihapus.');
    }
}
