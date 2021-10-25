<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
    public function division()
    {
        return $this->belongsTo(Division::class, "division_id");
    }
    public function choice()
    {
        return $this->belongsTo(Choice::class, "choice_id");
    }
}
