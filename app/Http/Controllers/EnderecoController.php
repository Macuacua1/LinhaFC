<?php

namespace App\Http\Controllers;

use App\Distrito;
use App\Localidade;
use App\Provincia;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function provfunct(){

        $prov=Provincia::all();//get data from table
//        dd($prov);
        return view('admin/contacto/registar',compact('prov'));//sent data to view

    }

    public function findDistrito(Request $request){


        //if our chosen id and products table prod_cat_id col match the get first 100 data

        //$request->id here is the id of our chosen option id
        $data=Distrito::select('distritonome','id')->where('provincia_id',$request->id)->get();
        return response()->json($data);//then sent this data to ajax success
    }


    public function findLocalidade(Request $request){

//        //it will get price if its id match with product id
//        $p=Product::select('price')->where('id',$request->id)->first();
//
//        return response()->json($p);
        //$request->id here is the id of our chosen option id
        $data=Localidade::select('localidadenome','id')->where('distrito_id',$request->id)->get();
        return response()->json($data);//then sent this data to ajax success
    }
public function addcontacto(Request $request){
    dd($request->all());
}

}
