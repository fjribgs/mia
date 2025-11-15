<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'category_name'
    ];

    public function umkmCategory() {
        return $this->hasMany(UmkmCategory::class);
    }

    public function umkms()
    {
        return $this->belongsToMany(Umkm::class, 
        'umkm_categories', 
        'category_id', 
        'umkm_id');
    }
}
