<?php

namespace App\Http\Controllers;

use App\Models\Kredit;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use App\Models\Karyawan;

class HomeController extends Controller
{
    //
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->userType;
            $userId = Auth::id();

            // Mendapatkan tanggal awal dan akhir minggu ini
            $startDate = Carbon::now()->startOfWeek()->format('Y-m-d');
            $endDate = Carbon::now()->endOfWeek()->format('Y-m-d');
            ////////////////////////  Pemasukan
            // Mengambil data pemasukan berdasarkan id_user
            $pemasukan = Pemasukan::where('id_user', $userId)->get();
            // Hitung jumlah pemasukan hari ini
            $pemasukanHariIni = Pemasukan::where('id_user', $userId)
                ->whereDate('tgl_pemasukan', Carbon::today())->sum('jumlah');
            $pemasukanMingguIni = Pemasukan::where('id_user', $userId)
                ->whereBetween('tgl_pemasukan', [$startDate, $endDate])->sum('jumlah');
            $totalPemasukan = Pemasukan::where('id_user', $userId)->sum('jumlah');

            /////////////////// pengeluaran
            // Mengambil data pemasukan berdasarkan id_user
            $pengeluaran = Pengeluaran::where('id_user', $userId)->get();
            // Hitung jumlah Pengeluran hari ini
            $pengeluaranHariIni = Pengeluaran::where('id_user', $userId)
                ->whereDate('tgl_pengeluaran', Carbon::today())->sum('jumlah');
            $pengeluaranMingguIni = Pengeluaran::where('id_user', $userId)
                ->whereBetween('tgl_pengeluaran', [$startDate, $endDate])->sum('jumlah');
            $totalPengeluaran = Pengeluaran::where('id_user', $userId)->sum('jumlah');

            // kredit
            $kredit = Kredit::where('id_user', $userId)->get();

            $kreditHariIni = Kredit::where('id_user', $userId)
                ->where('status', 'lunas')
                ->whereDate('akhir_kredit', Carbon::today())->sum('jumlah');

            $kreditMingguIni = Kredit::where('id_user', $userId)
                ->where('status', 'lunas')
                ->whereBetween('akhir_kredit', [$startDate, $endDate])->sum('jumlah');

                $totalPengeluaranKredit = Kredit::where('id_user', $userId)
                ->where('status', 'lunas')
                ->sum('jumlah');


            $pengeluaranKredit = $kreditHariIni + $pengeluaranHariIni;
            $pengeluaranKreditMingguIni = $kreditMingguIni + $pengeluaranMingguIni;

            // Hitung sisa uang
            $sisaUang = $totalPemasukan - $totalPengeluaran - $totalPengeluaranKredit;

            // jumlah karyawan
            $karyawan = Karyawan::where('id_user', $userId)->count();


            if ($usertype == 'user') {
                return view('dashboard.index', compact('totalPemasukan', 'pemasukanHariIni', 'pemasukanMingguIni', 'totalPengeluaran', 'pengeluaranHariIni', 'pengeluaranMingguIni', 'sisaUang', 'karyawan', 'kredit', 'kreditHariIni', 'pengeluaranKredit', 'pengeluaranKreditMingguIni', 'pengeluaranKredit'));
            } else if ($usertype == 'admin') {
                return view('admin.index', compact('totalPemasukan', 'pemasukanHariIni', 'pemasukanMingguIni', 'totalPengeluaran', 'pengeluaranHariIni', 'pengeluaranMingguIni', 'sisaUang', 'karyawan', 'kredit', 'kreditHariIni', 'pengeluaranKredit', 'pengeluaranKreditMingguIni', 'pengeluaranKredit'));
            } else {
                return redirect()->back();
            }
        }
    }
}
