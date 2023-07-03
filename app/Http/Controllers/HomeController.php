<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Menampilkan halaman tambah rute.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('rute.create');
    }

    /**
     * Menampilkan halaman dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        // Tambahkan logika bisnis yang diperlukan untuk halaman dashboard di sini
        return view('dashboard');
    }
}
