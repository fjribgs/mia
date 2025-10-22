<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'umkm_id',
        'category_id',
        'promo_id',
        'name',
        'description',
        'price',
        'status',
        'is_best_seller',
        'image',
    ];

    // relations
    public function umkm() {
        return $this->belongsTo(Umkm::class, 'umkm_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function promo() {
        return $this->belongsTo(Promo::class, 'promo_id');
    }

    // relations from other tables
    public function post() {
        return $this->hasOne(Post::class);
    }
}
