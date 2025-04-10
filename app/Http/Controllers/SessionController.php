<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index() {
        echo '<ul>';
        echo '<li><a href="/buat-session">Login</a></li>';
        echo '<li><a href="/akses-session">Masuk Ke Toko</a></li>';
        echo '<li><a href="/hapus-session">Logout</a></li>';
        echo '</ul>';
    }
    
    public function buatSession() {
        session(['hakAkses' => 'admin', 'nama' => 'Tegar']);
        echo '<p>Berhasil Masuk</p>';
    }

    public function aksesSession(Request $request) {
        echo 'Selamat Datang Di Toko Madura, Kami Open 24 Jam';
        echo '<hr>';
        echo session('hakAkses');
        echo '<hr>';
        echo session('nama');
        echo '<hr>';
    }

    public function hapusSession() {
        session()->forget('hakAkses');
        session()->forget('nama');
        echo '<p>Berhasil menghapus session</p>';
    }
}
