<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UmkmCategory extends Model
{
    use HasFactory;
    protected $table = 'umkm_categories';
    protected $fillable = [
        'umkm_id',
        'category_id',
    ];

    public function umkm() {
        return $this->belongsTo(Umkm::class, 'umkm_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
