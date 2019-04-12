<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{

    public $primaryKey = 'id';
    protected $table = 'shops';

    public function user() {
        return $this->belongsTo('App\User');
    }
}
