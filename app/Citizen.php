<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    public function scopeCompareName($query ,$fullName) 
    {
       return $query->where('full_name', $fullName);
    }
}
