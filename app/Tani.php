<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tani extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
