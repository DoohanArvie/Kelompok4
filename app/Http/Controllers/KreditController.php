<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Kredit;
use App\Models\Sumber;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;


class KreditController extends Controller
{


    public function index()
    {
        $userId = Auth::id();
        $kredits = Kredit::where('id_user', $userId)->get();
        // Tenggat waktu adalah besok
        $tenggatWaktu = Carbon::tomorrow();

        // Tanggal pengingat adalah sehari sebelumnya
        $tanggalPengingat = $tenggatWaktu->subDay();

        // Ambil kredit yang jatuh tempo pada tanggal pengingat
        $kreditBelumLunas = Kredit::where('id_user', $userId)
            ->where('status', 'belum Lunas')
            ->where('akhir_kredit', $tanggalPengingat)
            ->get();

        return view('kredit.index', compact('kredits', 'kreditBelumLunas', 'tenggatWaktu', 'tanggalPengingat'));
    }

    public function create()
    {
        return view('kredit.create');
    }

    public function store(Request $request)
    {
        $validatedData = validator($request->all(), [
            'id_user' => 'required|integer',
            'nama_kredit' => 'required|string|max:255',
            'awal_kredit' => 'required|date',
            'akhir_kredit' => 'required|date',
            'jumlah' => 'required|integer',
            'status' => 'required|string|max:255',
        ])->validate();

        $kredit = new Kredit($validatedData);
        $kredit->save();

        return redirect(route('daftarKredit'))->with('success', 'Data Berhasil Di Simpan');
    }

    public function edit(string $id)
    {
        $kredit = Kredit::findOrFail($id);
        return view('kredit.edit', [
            'kredit' => $kredit
        ]);
    }
    public function update(Request $request, $id)
    {
        //
        $validatedData = validator($request->all(), [
            'id_user' => 'required|integer',
            'nama_kredit' => 'required|string|max:255',
            'awal_kredit' => 'required|date',
            'akhir_kredit' => 'required|date',
            'jumlah' => 'required|integer',
            'status' => 'required|string|max:255',
        ])->validate();

        $kredit = Kredit::findOrFail($id);
        // Update the record with the validated data
        $kredit->update($validatedData);

        $kredit->update([
            'id_user' => $request->id_user,
            'nama_kredit' => $request->nama_kredit,
            'awal_kredit' => $request->awal_kredit,
            'akhir_kredit' => $request->akhir_kredit,
            'jumlah' => $request->jumlah,
            'status' => $request->status,
        ]);
        return redirect(route('daftarKredit'))->with('success', 'Data Berhasil DiUpdate');
    }

    public function destroy(string $id)
    {
        //
        $kredit = Kredit::findOrFail($id);
        $kredit->delete();
        return redirect(route('daftarKredit'))->with('success', 'Data Berhasil Dihapus');
    }
}
