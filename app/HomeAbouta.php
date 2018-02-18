<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeAbouta extends Model
{
    protected  $table='home_aboutas';
    public function getDetails() {
        return $this->hasMany('App\HomeAboutaDetail', 'about_id', 'id');
    }
}
