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
        "id_user",
        "nama",
        "posisi",
        "gaji",
        "alamat",
        "umur",
        "kontak",
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }

    public function pengeluarans()
    {
        return $this->hasMany('App\Models\Pengeluaran', 'id_user', 'id_user');
    }

}
