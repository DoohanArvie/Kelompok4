<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class KaryawanController extends Controller
{
    //
    public function index()
    {
        $userId = Auth::id();
        $karyawans = Karyawan::where('id_user', $userId)->get();
        return view('karyawan.index', compact('karyawans'));
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
            'id_user'=> 'required|integer',
            'nama' => 'required|string|max:255',
<<<<<<< HEAD
            'npwp' => 'nullable|string|max:255',
=======
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
            'posisi' => 'required|string|max:255',
            'gaji' => 'required|integer',
            'alamat' => 'required|string|max:255',
            'umur' => 'required|integer',
            'kontak' => 'required|string|max:255',
<<<<<<< HEAD
            'bpjs' => 'required|string|max:255',
            'tgl_gajian' => 'required|date',
=======
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
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
            'id_user'=> 'required|integer',
            'nama' => 'required|string|max:255',
<<<<<<< HEAD
            'npwp' => 'nullable|string|max:255',
=======
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
            'posisi' => 'required|string|max:255',
            'gaji' => 'required|integer',
            'alamat' => 'required|string|max:255',
            'umur' => 'required|integer',
            'kontak' => 'required|string|max:255',
<<<<<<< HEAD
            'bpjs' => 'required|string|max:255',
            'tgl_gajian' => 'required|date'
=======
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
        ])->validate();

        $karyawan = Karyawan::findOrFail($id);
        // Update the record with the validated data
        $karyawan->update($validatedData);

        $karyawan->update([
            'id_user'=> $request->id_user,
            'nama' => $request->nama,
<<<<<<< HEAD
            'npwp' => $request->npwp,
=======
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
            'posisi' => $request->posisi,
            'gaji' => $request->gaji,
            'alamat' => $request->alamat,
            'umur' => $request->umur,
            'kontak' => $request->kontak,
<<<<<<< HEAD
            'bpjs' => $request->bpjs,
            'tgl_gajian' => $request->tgl_gajian,

=======
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
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
