<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about_us';
    protected $fillable = ['name', 'phone', 'email', 'description', 'address'];
}
