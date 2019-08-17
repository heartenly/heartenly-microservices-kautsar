<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailProfile extends Model
{
    public function scopeAccountId($query,$idUser){
        return $query->where('id_account', $idUser);
    }
}
