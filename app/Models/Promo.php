<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;
    protected $table = 'promos';
    protected $fillable = [
        'umkm_id',
        'type',
        'name',
        'description',
        'start_date',
        'end_date',
        'discount_percent',
    ];

    // relations
    public function umkm() {
        return $this->belongsTo(Umkm::class, 'umkm_id');
    }

    // relations from other tables
    public function product() {
        return $this->hasOne(Promo::class);
    }
}
