<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    protected $fillable = [
        'user_id',
        'umkm_id',
        'rating',
        'comment',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function umkm() {
        return $this->belongsTo(Umkm::class, 'umkm_id');
    }
}
