<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{

    protected $fillable = ['name', 'address', 'number', 'url'];
    public $primaryKey = 'id';
    protected $table = 'shops';
    public $timestamps = false;

    public function user() {
        return $this->belongsTo('App\User');
    }
}
