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

    public function hasBatchesWithMetadata()
    {
        $batchesWithMetadata = $this->batches()->where('path_to_metadata_file', '!=', '0')->count();

        return $batchesWithMetadata > 0;
    }
}
