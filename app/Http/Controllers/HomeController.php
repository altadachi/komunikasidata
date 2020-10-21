<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tgskomdat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tbldata = Tgskomdat::all();
        return view('home', ['home' => $tbldata]);
    }



    // public function edit($id)
    // {
    //     $tbldata = Tgskomdat::find($id);
    //     return view('edit-data', ['tbldata' => $tbldata]);
    //     return redirect('home');
    // }
}
