<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gizi2 extends Model
{
    use HasFactory;

    protected $table = 'gizi2';
    protected $primaryKey = 'id_gizi2';
    public $timestamps = true;

    protected $fillable = [
        'vitA',
        'vitD',
        'vitE',
        'vitK',
        'vitB1',
        'vitB2',
        'vitB3',
        'vitB5',
        'vitB6',
        'folat',
        'vitB12',
        'biotin',
        'kolin',
        'vitC',
    ];

    public function kelompokUmur()
    {
        return $this->hasMany(KelompokUmur::class, 'id_gizi2', 'id_gizi2');
    }
}
