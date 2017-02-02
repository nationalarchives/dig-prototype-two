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

    public function filesTransferred()
    {
        return $this->path_to_transfer_file;
    }

    public function transferStatus()
    {
        $status = trans('editorial.batches.statuses.metadata_required');

        if($this->metadataHasBeenUploaded()) {
            $status = trans('editorial.batches.statuses.metadata_validated');
        }

        if($this->filesTransferred()) {
            $status = trans('editorial.batches.statuses.files_transferred');
        }

        return $status;
    }
}
