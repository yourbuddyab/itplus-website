<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable  = ['service_id','description','image', 'feature', 'pimages'];
    public function products()
    {
        return $this->belongsTo('App\Service','service_id','id');
    }
}
