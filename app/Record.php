<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
