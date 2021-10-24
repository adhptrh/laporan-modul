<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    protected $hidden = [
        "user"
    ];

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,"created_by");
    }

    public function getResult()
    {
        
    }
}
