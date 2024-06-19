<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_review extends Model
{
    use HasFactory;

    protected $table = 'ulasan';
    protected $fillable = [
        'review'
    ];

    // public function pengguna()
    // {
    //     return $this->belongsTo(Pengguna::class, 'user_id', 'id');
    // }
}
