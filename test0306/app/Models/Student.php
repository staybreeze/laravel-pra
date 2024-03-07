<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;
    // 放要join的table
    public function mobile(): HasOne
    {
        return $this->hasOne(mobile::class);
    }
}
