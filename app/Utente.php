<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utente extends Model
{
    protected $fillable = ['tipo_utente','nome','apelido','idade','genero','email','idioma'
        ,'conhecer_linha','descricao_local','cell1','cell2','cell3','descricao_utente','bi','situacao_educacional'
        ,'vive_com','relacao_vitima','descricao_extendida','provincia_id','distrito_id','localidade_id'];

    public function provincia(){
        return $this->belongsTo(Provincia::class,'provincia_id');
    }
    public function distrito(){
        return $this->belongsTo(Distrito::class,'distrito_id');
    }
    public function localidade(){
        return $this->belongsTo(Localidade::class,'localidade_id');
    }
    public function contacto(){
        return $this->belongsToMany(Contacto::class,'contacto_id');
    }

}
