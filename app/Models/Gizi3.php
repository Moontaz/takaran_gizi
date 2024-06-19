<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gizi3 extends Model
{
    use HasFactory;

    protected $table = 'gizi3';
    protected $primaryKey = 'id_gizi3';
    public $timestamps = true;

    protected $fillable = [
        'kalsium',
        'fosfor',
        'magnesium',
        'besi',
        'iodium',
        'seng',
        'selenium',
        'mangan',
        'fluor',
        'kromium',
        'kalium',
        'natrium',
        'klor',
        'tembaga',
    ];

    public function kelompokUmur()
    {
        return $this->hasMany(KelompokUmur::class, 'id_gizi3', 'id_gizi3');
    }
}
