<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    //
    public function index()
    {
        $pengeluarans = Pengeluaran::all();
        return view('pengeluaran.index', [
            'pengeluarans' => $pengeluarans
        ]);
    }

    public function store(Request $request)
    {
        //
        $validatedData = validator($request->all(), [
            'tgl_pengeluaran' => 'required|date',
            'jumlah' => 'required|integer',
            'sumber_pengeluaran' => 'required|string|max:255',
        ])->validate();

        $pengeluaran = new Pengeluaran($validatedData);
        $pengeluaran->save();

        return redirect(route('daftarPengeluaran'))->with('success', 'Data Berhasil Di Simpan');
    }

    public function edit(string $id)
    {
        //
        $pengeluaran = Pengeluaran::findOrFail($id);
        return view('pengeluaran.index', [
            'pengeluarans' => $pengeluaran
        ]);
    }


    public function update(Request $request, $id)
    {
        //
        $validatedData = validator($request->all(), [
            'tgl_pengeluaran' => 'required|date',
            'jumlah' => 'required|integer',
            'sumber_pengeluaran' => 'required|string|max:255',
        ])->validate();

        $pengeluaran = Pengeluaran::findOrFail($id);
        // Update the record with the validated data
        $pengeluaran->update($validatedData);

        $pengeluaran->update([
            'tgl_pengeluaran' => $request->tgl_pengeluaran,
            'jumlah' => $request->jumlah,
            'sumber_pengeluaran' => $request->sumber_pengeluaran,
        ]);
        return redirect(route('daftarPengeluaran'))->with('success', 'Data Berhasil DiUpdate');
    }

    public function destroy(string $id)
    {
        //
        $pengeluaran = Pengeluaran::findOrFail($id);
        $pengeluaran->delete();
        return redirect(route('daftarPengeluaran'))->with('success', 'Data Berhasil Dihapus');
    }
}
