<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{

    protected $fillable = ['name', 'address', 'number', 'url', 'mobile', 'car_models', 'services', 'categories', 'promotions'];
    public $primaryKey = 'id';
    protected $table = 'shops';
    public $timestamps = false;

    public function user() {
        return $this->belongsTo('App\User');
    }
}
