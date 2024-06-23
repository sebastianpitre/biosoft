<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avistamiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_id',
        'ave_id',
        'numero_avistamientos',
        'fecha',

    ];

    public function ave()
    {
        return $this->belongsTo(Ave::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
