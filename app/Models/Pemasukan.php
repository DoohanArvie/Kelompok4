<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use HasFactory;
    protected $table = "pemasukans";
    protected $primaryKey = 'id_pemasukan';

    protected $fillable = [
        "tgl_pemasukan",
        "jumlah",
        "sumber_pemasukan",
    ];
}
