<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cetak extends Model
{
    use HasFactory;

    protected $tabe = 'cetaks';
    protected $fillable = [
        'nama',
        'no_surat',
        'lampiran',
        'keterangan',
    ];
}
