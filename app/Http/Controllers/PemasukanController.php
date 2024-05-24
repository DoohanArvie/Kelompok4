<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

use App\Models\Pemasukan;


class PemasukanController extends Controller
{
  public function index()
  {
    //
    $pemasukans = Pemasukan::all();
    return view('pendapatan.index', [
      'pemasukans' => $pemasukans
    ]);
  }

  public function store(Request $request)
  {
    //
    $validatedData = validator($request->all(), [
      'tgl_pemasukan' => 'required|date',
      'jumlah' => 'required|integer',
      'sumber_pemasukan' => 'required|string|max:255',
    ])->validate();

    $pemasukan = new Pemasukan($validatedData);
    $pemasukan->save();

    return redirect(route('daftarPemasukan'))->with('success', 'Data Berhasil Di Simpan');
  }

  public function edit(string $id)
  {
    //
    $pemasukan = Pemasukan::findOrFail($id);
    return view('pendapatan.index', [
      'pemasukans' => $pemasukan
    ]);
  }


  public function update(Request $request, $id)
  {
    //
    $validatedData = validator($request->all(), [
      'tgl_pemasukan' => 'required|date',
      'jumlah' => 'required|integer',
      'sumber_pemasukan' => 'required|string|max:255',
    ])->validate();

    $pemasukan = Pemasukan::findOrFail($id);
    // Update the record with the validated data
    $pemasukan->update($validatedData);

    $pemasukan->update([
      'tgl_pemasukan' => $request->tgl_pemasukan,
      'jumlah' => $request->jumlah,
      'sumber_pemasukan' => $request->sumber_pemasukan,
    ]);
    return redirect(route('daftarPemasukan'))->with('success', 'Data Berhasil DiUpdate');
  }

  public function destroy(string $id)
    {
        $pemasukan = Pemasukan::findOrFail($id);
        $pemasukan->delete();
        return redirect(route('daftarPemasukan'))->with('success', 'Data Berhasil Dihapus');
    }
}
