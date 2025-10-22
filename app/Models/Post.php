<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'umkm_id',
        'product_id',
        'image',
        'title',
        'content',
        'post_date',
        'is_deleted',
    ];

    public function umkm() {
        return $this->belongsTo(Umkm::class, 'umkm_id');
    }

    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
