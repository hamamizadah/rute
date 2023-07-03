<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rute;

class RuteController extends Controller
{
    public function index(Request $request)
    {
        // $region = $request->input('region');
        // $level = $request->input('level');

        // $query = Rute::query();

        // if ($region) {
        //     $query->where('region', $region);
        // }

        // if ($level) {
        //     $query->where('level', $level);
        // }

        // $rute = $query->get();

        // return view('index', compact('rute'));
        return view('index');
    }

    public function create()
    {
        return view('rute.create');
    }

    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'name' => 'required',
            'region' => 'required',
            'level' => 'required',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Simpan data rute baru
        $rute = new Rute();
        $rute->name = $validatedData['name'];
        $rute->region = $validatedData['region'];
        $rute->level = $validatedData['level'];
        // tambahkan pengisian atribut lainnya sesuai kebutuhan
        $rute->save();

        return redirect()->route('home')->with('success', 'Rute berhasil ditambahkan.');
    }

    public function show(Rute $rute)
    {
        return view('rute.show', compact('rute'));
    }

    public function edit(Rute $rute)
    {
        return view('rute.edit', compact('rute'));
    }

    public function update(Request $request, Rute $rute)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'name' => 'required',
            'region' => 'required',
            'level' => 'required',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Update data rute
        $rute->name = $validatedData['name'];
        $rute->region = $validatedData['region'];
        $rute->level = $validatedData['level'];
        // tambahkan pengisian atribut lainnya sesuai kebutuhan
        $rute->save();

        return redirect()->route('rute.index')->with('success', 'Rute berhasil diperbarui.');
    }

    public function destroy(Rute $rute)
    {
        $rute->delete();

        return redirect()->route('rute.index')->with('success', 'Rute berhasil dihapus.');
    }

    public function dashboard()
    {
        // Logika untuk menampilkan rute-rute pada halaman dashboard
        // sesuai dengan kategori pengguna, misalnya berdasarkan level atau wilayah
        $rutes = Rute::all();

        return view('index', compact('rutes'));
    }
}
