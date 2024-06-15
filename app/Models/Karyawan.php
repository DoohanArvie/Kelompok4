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
<<<<<<< HEAD
        "npwp",
=======
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
        "posisi",
        "gaji",
        "alamat",
        "umur",
        "kontak",
<<<<<<< HEAD
        "bpjs",
        "tgl_gajian",
=======
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }
}
