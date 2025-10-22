<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravolt\Indonesia\Models\Village;

class UmkmRoute extends Model
{
    use HasFactory;
    protected $table = 'umkm_routes';
    protected $fillable = [
        'umkm_id',
        'village_id',
        'day_of_week',
        'start_time',
        'end_time',
    ];

    public function umkm() {
        return $this->belongsTo(Umkm::class, 'umkm_id');
    }

    public function village() {
        return $this->belongsTo(Village::class, 'village_id');
    }
}
