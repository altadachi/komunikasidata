<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tgskomdat;
use Illuminate\Support\Facades\Storage;
use Response;

class TgskomdatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function addData()
    {
        return view('add-data');
    }


    public function storeTgskomdat(Request $request)
    {
        $judul = $request->judul;
        $kategori = $request->kategori;
        $keterangan = $request->keterangan;
        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);
        $data = new Tgskomdat();
        $data->judul = $judul;
        $data->kategori = $kategori;
        $data->keterangan = $keterangan;
        $data->gambar = $imageName;
        $data->save();
        return back()
            ->with('success', 'Data Telah berhasil di input');
    }


    public function getData()
    {
        $data = Tgskomdat::orderBy('id', 'DESC')->get();
        // $tbls = Tgskomdat::orderBy('id', 'DESC')->paginate(2);
        // return view('view-data', compact('tbls'));
        return view('view-data', compact('data'));
    }


    public function editData($id)
    {
        $data = Tgskomdat::find($id);
        return view('edit-data', compact('data'));
    }

    public function updateData(Request $request)
    {


        $data = Tgskomdat::find($request->id);
        $data->judul = $request->judul;
        $data->kategori = $request->kategori;
        $data->keterangan = $request->keterangan;

        if ($request->file != '') {
            $path = public_path() . '/public/images/';

            //code for remove old file
            if ($data->file != ''  && $data->file != null) {
                $file_old = $path . $data->file;
                unlink($file_old);
            }

            //upload new file
            $file = $request->file('file');
            // $filename = $file;
            $filename = time() . '.' . $file->extension();
            // $file->move($path, $filename);
            $file->move(public_path('images'), $filename);
            //for update in table
            $data->update(['gambar' => $filename]);
            $data->gambar = $filename;
        }

        $data->save();


        return back()->with('success', 'Data Telah berhasil di input');
    }

    public function hapus($id)
    {
        # hapus data
        $tbldata = Tgskomdat::find($id);
        $tbldata->delete();

        //alihkan halaman ke awal/index
        return redirect('view-data');
    }
}
