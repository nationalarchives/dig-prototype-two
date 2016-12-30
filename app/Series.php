<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function batches()
    {
        return $this->hasMany(Batch::class);
    }
}
