<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $fillable=['estado_contacto','anonimo','desc_antecedentes','resumo_contacto','impressao_atendente'
        ,'motivo_id','caso_id'];

    public function motivo(){
        return $this->belongsTo(Motivo::class,'motivo_id');
    }
    public function caso(){
        return $this->belongsTo(Caso::class,'caso_id');
    }
    public function utente(){
        return $this->belongsToMany(Utente::class,'utente_id');
    }


}
