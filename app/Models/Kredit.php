<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kredit extends Model
{
    use HasFactory;
    protected $table = "tbl_kredits";
    protected $primaryKey = 'id_kredit';
    protected $fillable = [
        'id_user',
        'nama_kredit',
        'awal_kredit',
<<<<<<< HEAD
        'tenor',
=======
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
        'akhir_kredit',
        'jumlah',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }
}
