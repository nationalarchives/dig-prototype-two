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

    public function metadataHasBeenUploaded()
    {
        return $this->path_to_metadata_file;
    }

    public function metadataStatus()
    {
        return $this->metadataHasBeenUploaded() ? trans('editorial.batches.statuses.metadata_validated') : trans('editorial.batches.statuses.metadata_required');
    }
}
