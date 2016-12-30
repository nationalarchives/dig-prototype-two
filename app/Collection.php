<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function series()
    {
        return $this->hasMany(Series::class);
    }
}
