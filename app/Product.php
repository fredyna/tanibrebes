<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function tani()
    {
        return $this->belongsTo(Tani::class);
    }
}
