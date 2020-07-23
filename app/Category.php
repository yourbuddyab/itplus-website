<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category','image','description'];
    public function service()
    {
        return $this->hasMany('App\Service','category_id','category_id');
    }
}
