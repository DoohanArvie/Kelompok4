<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sumber;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengeluaran;
use Illuminate\Support\Facades\Validator;

class PengeluaranController extends Controller
{
    //
    public function index()
    {
        $userId = Auth::id(); // Mengambil ID pengguna yang sedang login
        $pengeluarans = Pengeluaran::where('id_user', $userId)->get(); // Mengambil data pengeluaran berdasarkan id_user
        $sumbers = Sumber::where('tipe_sumber', 'pengeluaran')->get(); // Mengambil data sumber pengeluaran
        return view('pengeluaran.index', compact('pengeluarans', 'sumbers'));
    }

    public function create()
    {
        // Ambil data karyawan
        $employees = Employee::all();

        // Ambil data sumber pengeluaran
        $sumbers = Sumber::where('tipe_sumber', 'pengeluaran')->get();
        
        return view('pengeluaran.create', [
            'sumbers' => $sumbers,
            'employees' => $employees // Kirim data karyawan ke tampilan
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required|integer',
            'id_sumber' => 'required|integer',
            'tgl_pengeluaran' => 'required|date',
            'jumlah' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pengeluaran = new Pengeluaran();
        $pengeluaran->id_user = $request->id_user;
        $pengeluaran->id_sumber = $request->id_sumber;
        $pengeluaran->tgl_pengeluaran = $request->tgl_pengeluaran;
        $pengeluaran->jumlah = $request->jumlah;
        $pengeluaran->save();

        return redirect(route('daftarPengeluaran'))->with('success', 'Data Berhasil Disimpan');
    }

    public function edit(string $id)
    {
        $sumbers = Sumber::where('tipe_sumber', 'pengeluaran')->get();
        $pengeluaran = Pengeluaran::findOrFail($id);
        return view('pengeluaran.edit', [
            'pengeluaran' => $pengeluaran,
            'sumbers' => $sumbers
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required|integer',
            'id_sumber' => 'required|integer',
            'tgl_pengeluaran' => 'required|date',
            'jumlah' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pengeluaran = Pengeluaran::findOrFail($id);
        $pengeluaran->id_user = $request->id_user;
        $pengeluaran->id_sumber = $request->id_sumber;
        $pengeluaran->tgl_pengeluaran = $request->tgl_pengeluaran;
        $pengeluaran->jumlah = $request->jumlah;
        $pengeluaran->save();

        return redirect(route('daftarPengeluaran'))->with('success', 'Data Berhasil Diperbarui');
    }

    public function destroy(string $id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        $pengeluaran->delete();
        return redirect(route('daftarPengeluaran'))->with('success', 'Data Berhasil Dihapus');
    }
}
