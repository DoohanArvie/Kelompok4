<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Pemasukan; // Import your model if not already imported
use App\Models\Pengeluaran; // Import your model if not already imported

class LaporanKeuanganController extends Controller
{
    public function downloadLaporan()
    {
        // Fetch data needed to render the dashboard
        $pemasukanHariIni = Pemasukan::whereDate('created_at', today())->sum('amount');
        $pengeluaranKredit = Pengeluaran::whereDate('created_at', today())->sum('amount');
        // Fetch other necessary data...

        // Render the dashboard view
        $pdf = PDF::loadView('dashboard-pdf', [
            'pemasukanHariIni' => $pemasukanHariIni,
            'pengeluaranKredit' => $pengeluaranKredit,
            // Pass other data to the view as needed...
        ]);

        // Download the PDF file with a specific name
        return $pdf->download('laporan-keuangan.pdf');
    }
}
