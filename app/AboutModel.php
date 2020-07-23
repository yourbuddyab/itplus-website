<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
    protected $table = 'about_us';
    protected $fillable = ['about'];
}
