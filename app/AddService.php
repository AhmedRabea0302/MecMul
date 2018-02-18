<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddService extends Model
{
    public function getDetails() {
        return $this->hasMany('App\AddServiceDetail', 'about_id', 'id');
    }
}
