<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }
}
