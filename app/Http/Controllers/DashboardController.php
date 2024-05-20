<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
      

        // Mendapatkan tanggal awal dan akhir minggu ini
        $startDate = Carbon::now()->startOfWeek()->format('Y-m-d');
        $endDate = Carbon::now()->endOfWeek()->format('Y-m-d');

        $totalPemasukan = Pemasukan::sum('jumlah'); // Hitung total semua pemasukan
        $totalPemasukanHariIni = Pemasukan::whereDate('tgl_pemasukan', Carbon::today())->sum('jumlah');
        $totalPemasukanMingguIni = Pemasukan::whereBetween('tgl_pemasukan', [$startDate, $endDate])->sum('jumlah');     // Menghitung total pemasukan minggu ini

        $totalPengeluaran = Pengeluaran::sum('jumlah'); // Hitung total semua pengeluaran
        $totalPengeluaranHariIni = Pengeluaran::whereDate('tgl_pengeluaran', Carbon::today())->sum('jumlah');
        $totalPengeluaranMingguIni = Pengeluaran::whereBetween('tgl_pengeluaran', [$startDate, $endDate])->sum('jumlah');// Menghitung total pengeluaran minggu ini         // Mengambil semua pengeluaran dalam rentang minggu ini
        
        // Hitung sisa uang
        $sisaUang = $totalPemasukan - $totalPengeluaran;


        return view("admin.index", compact('totalPemasukan','totalPemasukanHariIni', 'totalPemasukanMingguIni', 'totalPengeluaran', 'totalPengeluaranHariIni', 'totalPengeluaranMingguIni', 'sisaUang'));
    }
}
