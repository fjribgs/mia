<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaboration extends Model
{
    use HasFactory;
    protected $table = 'collaborations';
    protected $fillable = [
        'requester_umkm',
        'partner_umkm',
        'message',
        'status',
    ];

    public function requesterUmkm() {
        return $this->belongsTo(Umkm::class, 'requester_umkm');
    }

    public function partnerUmkm() {
        return $this->belongsTo(Umkm::class, 'partner_umkm');
    }
}
