<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokUmur extends Model
{
    use HasFactory;

    protected $table = 'kelompok_umur';
    protected $primaryKey = 'id_kel';
    public $timestamps = true;

    protected $fillable = [
        'batas_awal',
        'batas_akhir',
        'bulan_tahun',
        'status',
        'id_gizi1',
        'id_gizi2',
        'id_gizi3',
    ];

    public function gizi1()
    {
        return $this->belongsTo(Gizi1::class, 'id_gizi1', 'id_gizi1');
    }

    public function gizi2()
    {
        return $this->belongsTo(Gizi2::class, 'id_gizi2', 'id_gizi2');
    }

    public function gizi3()
    {
        return $this->belongsTo(Gizi3::class, 'id_gizi3', 'id_gizi3');
    }
}
