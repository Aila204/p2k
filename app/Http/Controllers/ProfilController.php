<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Ambil data user yang sedang login
        return view('profil', compact('user')); // Kirim data ke view profil.blade.php
    }
}
