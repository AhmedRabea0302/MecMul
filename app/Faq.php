<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public function getDetails() {
        return $this->hasMany('App\FaqDetail', 'master_it', 'id');
    }
}
