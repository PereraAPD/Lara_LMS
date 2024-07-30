<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function branches()
    {
        return $this->hasMany(Branch::class);
    }

    public function divisions()
    {
        return $this->hasMany(Division::class);
    }
}
