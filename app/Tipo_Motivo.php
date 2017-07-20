<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Motivo extends Model
{
    protected $fillable = ['tipomotivonome'];

    public function motivo(){
        return $this->hasMany(Motivo::class);
    }
}
