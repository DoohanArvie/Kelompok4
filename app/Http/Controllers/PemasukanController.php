<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasukan;
use App\Models\Sumber;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
use App\Models\User;
use Illuminate\Support\Facades\Auth;

>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
use Illuminate\Support\Facades\Validator;

class PemasukanController extends Controller
{
    public function index()
    {
        $userId = Auth::id(); // Mengambil ID pengguna yang sedang login
        $pemasukans = Pemasukan::where('id_user', $userId)->get(); // Mengambil data pemasukan berdasarkan id_user
<<<<<<< HEAD
        $sumbers = Sumber::where('tipe_sumber', 'pemasukan')->get(); // Mengambil semua data sumber pemasukan dengan tipe 'pemasukan'

        $totalPemasukan = Pemasukan::where('id_user', $userId)->sum('jumlah');

        return view('pemasukan.index', compact('pemasukans', 'sumbers','totalPemasukan'));
=======
        return view('pemasukan.index', compact('pemasukans'));
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
    }

    public function create()
    {
<<<<<<< HEAD
        $sumbers = Sumber::where('tipe_sumber', 'pemasukan')->get();
        return view('pemasukan.create', ['sumbers' => $sumbers]);
=======
        //
        $sumbers = Sumber::where('tipe_sumber', 'pemasukan')->get();
        return view('pemasukan.create', [
            'sumbers' => $sumbers
        ]);
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required|integer',
            'id_sumber' => 'required|integer',
            'tgl_pemasukan' => 'required|date',
            'jumlah' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pemasukan = new Pemasukan();
        $pemasukan->id_user = $request->id_user;
        $pemasukan->id_sumber = $request->id_sumber;
        $pemasukan->tgl_pemasukan = $request->tgl_pemasukan;
        $pemasukan->jumlah = $request->jumlah;
        $pemasukan->save();

        return redirect(route('daftarPemasukan'))->with('success', 'Data Berhasil Disimpan');
    }

<<<<<<< HEAD
=======

>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
    public function edit(string $id)
    {
        $sumbers = Sumber::where('tipe_sumber', 'pemasukan')->get();
        $pemasukan = Pemasukan::findOrFail($id); // Ambil data pemasukan berdasarkan ID
        return view('pemasukan.edit', [
            'pemasukan' => $pemasukan, // Melewatkan data pemasukan ke view
            'sumbers' => $sumbers
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required|integer',
            'id_sumber' => 'required|integer',
            'tgl_pemasukan' => 'required|date',
            'jumlah' => 'required|numeric',
<<<<<<< HEAD
        ]);
=======
        ]); 
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pemasukan = Pemasukan::findOrFail($id);
        $pemasukan->id_user = $request->id_user;
        $pemasukan->id_sumber = $request->id_sumber;
        $pemasukan->tgl_pemasukan = $request->tgl_pemasukan;
        $pemasukan->jumlah = $request->jumlah;
        $pemasukan->save();

        return redirect(route('daftarPemasukan'))->with('success', 'Data Berhasil Diperbarui');
    }

    public function destroy(string $id)
    {
        $pemasukan = Pemasukan::findOrFail($id);
        $pemasukan->delete();
        return redirect(route('daftarPemasukan'))->with('success', 'Data Berhasil Dihapus');
    }
}
