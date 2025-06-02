<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita; // sesuaikan dengan model yang kamu gunakan

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua data post dari database
        $posts = berita::all();

        // Kirim data ke view 'home'
        return view('home', compact('posts'));
    }
}
