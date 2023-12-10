<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebakaran extends Model
{
    use HasFactory;
    protected $table = 'kebakaran';
    protected $fillable = [
        'tanggal', 'kecamatan',
        'kelurahan', 'lokasi',
        'jenis', 'luas',
    ];
}
