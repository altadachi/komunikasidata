<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tgskomdat;

class BerandaController extends Controller
{
    public function index()
    {
        $files = Tgskomdat::latest()->paginate(1);
        return view('welcome', compact('files'));
    }

    // public function cari(Request $request)
    // {
    //     $judul = $request->judul;
    //     $categories = Tgskomdat::where('judul', 'like', "%" . $judul . "%")->paginate(1);
    //     return view('welcome', compact('categories'));
    // }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $files = Tgskomdat::where('judul', 'like', "%" . $cari . "%")->paginate(5);
        return view('welcome', compact('files'));
    }
}
