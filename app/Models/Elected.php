<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elected extends Model
{
    use HasFactory;

    protected $table = 'elected';
    protected $fillable = [
        'slug',
        'image',
        'election_id',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
