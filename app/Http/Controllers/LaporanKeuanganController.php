<?php

namespace App\Http\Controllers;

use App\Models\Kredit;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use App\Models\TagihanB;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class LaporanKeuanganController extends Controller
{
    public function Laporan(Request $request)
    {
        $userId = Auth::id();

        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $pemasukans = Pemasukan::where('id_user', $userId)
            ->when($startDate && $endDate, function ($query) use ($startDate, $endDate) {
                return $query->whereBetween('tgl_pemasukan', [$startDate, $endDate]);
            })
            ->get();

        $pengeluarans = Pengeluaran::where('id_user', $userId)
            ->when($startDate && $endDate, function ($query) use ($startDate, $endDate) {
                return $query->whereBetween('tgl_pengeluaran', [$startDate, $endDate]);
            })
            ->get();

        $totalPengeluaran = $pengeluarans->sum('jumlah');
        $totalPemasukan = $pemasukans->sum('jumlah');

        $tagihans = TagihanB::where('id_user', $userId)
            ->where('status', 'Sudah Bayar')
            ->when($startDate && $endDate, function ($query) use ($startDate, $endDate) {
                return $query->whereBetween('akhir_tagihan', [$startDate, $endDate]);
            })
            ->get();

        $totalTagihan = $tagihans->sum('jumlah');

        $kredits = Kredit::where('id_user', $userId)
            ->where('status', 'lunas')
            ->when($startDate && $endDate, function ($query) use ($startDate, $endDate) {
                return $query->whereBetween('akhir_kredit', [$startDate, $endDate]);
            })
            ->get();

        $totalKredit = $kredits->sum('jumlah');

        $sisaUang = $totalPemasukan - $totalPengeluaran - $totalTagihan - $totalKredit;

        return view('pdf.laporan_pdf', compact('pemasukans', 'pengeluarans', 'totalPengeluaran', 'totalPemasukan', 'sisaUang', 'tagihans', 'totalTagihan','kredits','totalKredit', 'startDate', 'endDate'));
    }
}
