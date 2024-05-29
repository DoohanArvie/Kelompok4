<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = "tbl_karyawans";
    protected $primaryKey = 'id_karyawan';

    protected $fillable = [
        "nama",
        "posisi",
        "gaji",
        "alamat",
        "umur",
        "kontak",
    ];
}
