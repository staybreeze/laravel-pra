<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    // 放要join的table
    public function mobileRelation(): HasOne
    {
        return $this->hasOne(Mobile::class);
    }
}




