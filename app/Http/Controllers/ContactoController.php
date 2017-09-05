<?php

namespace App\Http\Controllers;

use App\Contacto;
use App\Utente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        if(Session::has('utentes')) {
//            Session::forget('utentes');
//        }
//        return view('shop.index');
        $contactos=Contacto::all();
        return view('admin/contacto/index',compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('admin/contacto/registar');
        return view('admin/contacto/reg_contacto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function addUtente(Request $request){
//        $utentes= [$request->all()];
        $utentes= ['tipo_utente'=>$request->tipo_utente,'nome'=>$request->nome,'apelido'=>$request->apelido,'idade'=>$request->idade
            ,'genero'=>$request->genero,'idioma'=>$request->idioma,'conhecer_linha'=>$request->conhecer_linha,'descricao_local'=>$request->descricao_local,'vive_com'=>$request->vive_com
            ,'cell1'=>$request->cell1,'cell2'=>$request->cell2,'provincia_id'=>$request->provincia_id,'distrito_id'=>$request->distrito_id,'situacao_educacional'=>$request->situacao_educacional
            ,'relacao_vitima'=>$request->relacao_vitima,'descricao_extendida'=>$request->descricao_extendida,'localidade_id'=>$request->localidade_id];
//        dd($utentes);
        if($request->session()->has('utentes')) {
            $request->session()->push('utentes', $utentes);
        }else{
            $request->session()->push('utentes', $utentes);
        }
//        dd($utentes[0]['apelido']);
//        dd(count($utentes));
//        return view('shop.index');

    }
    public function addcontacto(Request $request){
        $contacto=Contacto::create(['tipo_contacto'=>$request->tipo_contacto,'anonimo'=>'nao',
            'desc_antecedentes'=>$request->desc_antecedentes,'resumo_contacto'=>$request->resumo_contacto,
            'impressao_atendente'=>$request->impressao_atendente,'motivo_id'=>$request->motivo_id,'user_id'=>Auth::user()->id]);
        if(Session::has('utentes')) {

            $utentes=Session::get('utentes');

            foreach($utentes as $value=>$key){
                $pessoa=new Utente();
               $pessoa->tipo_utente=$utentes[$value]['tipo_utente'];
                $pessoa->apelido=$utentes[$value]['apelido'];
                $pessoa->idade=$utentes[$value]['idade'];
                $pessoa->nome=$utentes[$value]['nome'];
                $pessoa->genero=$utentes[$value]['genero'];
                $pessoa->idioma=$utentes[$value]['idioma'];
                $pessoa->conhecer_linha=$utentes[$value]['conhecer_linha'];
                $pessoa->descricao_local=$utentes[$value]['descricao_local'];
                $pessoa->cell1=$utentes[$value]['cell1'];
                $pessoa->cell2=$utentes[$value]['cell2'];
                $pessoa->provincia_id=$utentes[$value]['provincia_id'];
                $pessoa->distrito_id=$utentes[$value]['distrito_id'];
                $pessoa->localidade_id=$utentes[$value]['localidade_id'];
                $pessoa->situacao_educacional=$utentes[$value]['situacao_educacional'];
                $pessoa->vive_com=$utentes[$value]['vive_com'];
                $pessoa->relacao_vitima=$utentes[$value]['relacao_vitima'];
               $pessoa->descricao_extendida=$utentes[$value]['descricao_extendida'];

                $pessoa->save();
                $contacto->utente()->attach($pessoa->id);
                Session::forget('utentes');
            }
        }
        return back()
            ->with('success','Gravado com Sucesso.');
    }
}
