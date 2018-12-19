<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function phones(){
        $this->hasMany('App\Phone');
    }

    public function addPhone(Phone $phone){
        return $phone->save();
    }
}
