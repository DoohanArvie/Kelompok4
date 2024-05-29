<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KaryawanController extends Controller
{
    //
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('karyawan.index', [
            'karyawans' => $karyawans
        ]);
    }

    public function create()
    {
        //
        return view('karyawan.create');
    }
    public function store(Request $request)
    {
        //
        $validatedData = validator($request->all(), [
            'nama' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'gaji' => 'required|integer',
            'alamat' => 'required|string|max:255',
            'umur' => 'required|integer',
            'kontak' => 'required|string|max:255',
        ])->validate();

        $karyawan = new Karyawan($validatedData);
        $karyawan->save();

        return redirect(route('daftarKaryawan'))->with('success', 'Data Berhasil Di Simpan');
    }


    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawan.edit', [
            'karyawan' => $karyawan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $validatedData = validator($request->all(), [
            'nama' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'gaji' => 'required|integer',
            'alamat' => 'required|string|max:255',
            'umur' => 'required|integer',
            'kontak' => 'required|string|max:255',
        ])->validate();

        $karyawan = Karyawan::findOrFail($id);
        // Update the record with the validated data
        $karyawan->update($validatedData);

        $karyawan->update([
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'gaji' => $request->gaji,
            'alamat' => $request->alamat,
            'umur' => $request->umur,
            'kontak' => $request->kontak,
        ]);
        return redirect(route('daftarKaryawan'))->with('success', 'Data Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();
        return redirect(route('daftarKaryawan'))->with('success', 'Data Berhasil Dihapus');
    }
}
