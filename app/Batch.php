<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable = ['name', 'type', 'series_id'];

    public function series()
    {
        return $this->belongsTo(Series::class);
    }

    public function records()
    {
        return $this->hasMany(Record::class);
    }
}
