<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TitikPanas extends Model
{
    use HasFactory;

    protected $table = "titik_panas";

    protected $fillable = [
        'kecamatan',
        'lokasi',
        'tanggal',
        'kerusakan',
        'jenis',
        'long',
        'lat',
        'status',
        'created_at',
        'updated_at'
    ];
}
