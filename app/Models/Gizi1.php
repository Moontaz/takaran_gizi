<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gizi1 extends Model
{
    use HasFactory;

    protected $table = 'gizi1';
    protected $primaryKey = 'id_gizi1';
    public $timestamps = true;

    protected $fillable = [
        'energi',
        'protein',
        'total_lemak',
        'omega3',
        'omega6',
        'karbohidrat',
        'serat',
        'air',
    ];

    public function kelompokUmur()
    {
        return $this->hasMany(KelompokUmur::class, 'id_gizi1', 'id_gizi1');
    }
}
