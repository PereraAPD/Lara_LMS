<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
