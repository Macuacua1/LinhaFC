@extends('layouts.master')
@section('content')

    <div class="row no-m-t no-m-b">
        <div class="col s12 m12 l12">
            <div class="card invoices-card">
                <div class="card-content">
                    <span class="card-title" style="color:#0277bb!important;">Registo de Contacto</span>
                    <div class="row">
                        <form class="col s12" id="addcontacto" method="POST"  accept-charset="UTF-8">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="input-field col s6">
                                    <select name="tipo_contacto" id="tipo_contacto">
                                        <option value="" disabled selected>--Seleccione a opcao--</option>
                                        <option value="Telefone">Telefone</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Email">Email</option>
                                    </select>
                                    <label class="selectsize">Tipo de Contacto</label>

                                </div>
                                <div class="input-field col s6 intro-text" >
                                    <a class="btn waves-effect waves-light  modal-trigger" href="#modal2" style="margin-left: 100px;z-index: -1050!important;"><i class="material-icons left">add</i>utente</a>
                                </div>
                                </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <p class="p-v-xs">
                                        <input name="tipo" id="caso"  type="radio"value="yes" onclick="showHidecaso()">
                                        <label for="caso">Caso</label>

                                    </p>
                                </div>
                                <div class="input-field col s6">
                                    <p class="p-v-xs">
                                        <input name="tipo" id="naocaso" type="radio" value="yes" onclick="showHidecaso()">
                                        <label for="naocaso">Nao Caso</label>
                                    </p>
                                </div>
                                </div>
                                <div class="row" id="iscaso">
                                    <div class="chips" style="margin-bottom: 0;padding-bottom: 0">

                                    </div>
                                    <div class="input-field col s12 intro-text">
                                        <a class="btn waves-effect waves-light modal-trigger" href="#modal2" style="margin-top: 0;padding-top:0;margin-left: 530px;z-index: -1050!important;"><i class="material-icons left">add</i>envolvidos</a>
                                    </div>
                                <div class="input-field col s12">
                                    {{--<i class="material-icons prefix">mode_edit</i>--}}
                                    <textarea id="icon_prefix2" class="materialize-textarea" name="desc_antecedentes"></textarea>
                                    <label for="icon_prefix2">Descricao de antecedentes da familia da(s) vitima(s)</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    {{--<i class="material-icons prefix">mode_edit</i>--}}
                                    <textarea id="icon_prefix2" class="materialize-textarea" name="resumo_contacto"></textarea>
                                    <label for="icon_prefix2">Resumo do Contacto</label>
                                </div>
                                <div class="input-field col s12">
                                    {{--<i class="material-icons prefix">mode_edit</i>--}}
                                    <textarea id="icon_prefix2" class="materialize-textarea" name="impressao_atendente"></textarea>
                                    <label for="icon_prefix2">Impressao da(o) atendente</label>
                                </div>

                            </div>
                            <div class="row" id="notcaso">
                                <div class="input-field col s12">
                                    <select name="motiv_id">
                                        <option value="" disabled selected>--Seleccione a opcao--</option>
                                        <option value="Informacao">Informacao</option>
                                        <option value="Engano">Engano</option>
                                        <option value="Elogio">Elogio</option>
                                    </select>
                                    <label class="selectsize">Motivo</label>
                                </div>
                            </div>
                            <div class="row" id="iscasoo">
                                <div class="input-field col s6">
                                    <select name="tipo_motivo_id" id="categoriamotivo" class="categoriamotivo">
                                        <option value="" disabled selected>--Categoria do Motivo--</option>
                                        @foreach($motiv as $mot)
                                            <option value="{{$mot->id}}">{{$mot->tipomotivonome}}</option>
                                        @endforeach
                                    </select>
                                    <label class="selectsize">Categoria do Motivo</label>
                                </div>
                                <div class="input-field col s6">
                                        <select id="motivo"  class="motivonome" name="motivo_id">
                                            <option value="0" disabled="true" selected="true">--Motivo--</option>
                                        </select>
                                    <label class="selectsize">Motivo</label>
                                </div>
                            </div>

                            <div class="row">
                                <button class="btn waves-effect waves-light right" id="registar-contacto" name="registar-contacto">Gravar
                                    <i class="material-icons right">save</i>
                                </button>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal2" class="modal modal-fixed-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 250.516304347826px;">
                    <div class="modal-content">
                        <h4 style="color:#0277bb!important;">Dados Pessoais</h4>
                        <form class="form-horizontal" role="form" id="form_add">
                        <div class="row" id="">
                            <div class="input-field col s6">
                                <select name="tipo_utente">
                                    <option value="" disabled selected>--Seleccione a opcao--</option>
                                    <option value="Vitima">Vitima</option>
                                    <option value="Perpetrador">Perpetrador</option>
                                    <option value="Outro">Outro</option>
                                </select>
                                <label class="selectsize">Tipo de Contactante</label>
                            </div>
                            <div class="input-field col s6">
                                <p class="p-v-xs">
                                    <input type="checkbox" id="anonimo" nome="anonino" value="sim"/>
                                    <label for="anonimo">Pemanecer anonimo?</label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                               <input id="icon_prefix" type="text" name="nome" class="validate">
                                <label for="icon_prefix">Nome</label>
                            </div>
                            <div class="input-field col s12">
                               <input id="icon_prefix" type="text" name="apelido" class="validate">
                                <label for="icon_prefix">Apelido</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 col m4">
                                <div class="form-group">
                                    <select id="provincia-id" name="provincia_id" class="provincia">
                                        <option value="" disabled selected>--Provincia--</option>
                                        @foreach($prov as $pro)
                                            <option value="{{$pro->id}}">{{$pro->provincianome}}</option>
                                        @endforeach
                                    </select>
                                    <label class="selectsize">Provincia</label>
                                </div>
                            </div>
                            <div class="input-field col s12 col m4">
                                <div class="form-group">
                                    <select id="distrito"  class="distritonome" name="distrito_id">
                                        <option value="0" disabled="true" selected="true">--Distrito--</option>
                                    </select>
                                    <label class="selectsize">Distrito</label>
                                </div>
                            </div>
                            <div class="input-field col s12 col m4">
                                <div class="form-group">
                                    <select id="localidade" class="localidadenome" name="localidade_id">
                                        <option value="0" disabled="true" selected="true">--Localidade--</option>
                                    </select>
                                    <label class="selectsize">Localidade</label>
                                </div>
                            </div>
                            <div class="input-field col s12">
                                {{--<i class="material-icons prefix">mode_edit</i>--}}
                                <textarea id="icon_prefix2" class="materialize-textarea" name="descricao_local"></textarea>
                                <label for="icon_prefix2">Descricao do local</label>
                            </div>
                            <div class="input-field col s6">
                                {{--<i class="material-icons prefix">account_circle</i>--}}
                                <input id="icon_prefix" type="number" class="validate" name="idade">
                                <label for="icon_prefix">Idade</label>
                            </div>
                            <div class="input-field col s6">
                                <p class="p-v-xs">
                                    <input name="genero" type="radio" id="test1" value="Masculino" />
                                    <label for="test1">Masculino</label>
                                    <input name="genero" type="radio" id="test2" value="Femenino"/>
                                    <label for="test2">Femenino</label>
                                </p>
                            </div>

                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <select  class="select2" name="idioma"> {{--multiple="multiple"--}}
                                    <option value="" disabled selected>--Seleccione a opcao--</option>
                                    <option value="Portugues">Portugues</option>
                                    <option value="Changana">Changana</option>
                                    <option value="Chope">Chope</option>
                                    <option value="Sena">Sena</option>
                                    <option value="Ingles">Ingles</option>
                                    <option value="Outra">Outra</option>
                                    <option value="Desconhecida">Desconhecida</option>
                                </select>
                                <label class="selectsize">Linguas Faladas</label>
                            </div>
                            <div class="input-field col s12">
                                <select name="conhecer_linha">
                                    <option value="0" disabled selected>--Seleccione a opcao--</option>
                                    <option value="TV">TV</option>
                                    <option value="Radio">Radio</option>
                                    <option value="Jornal">Jornal</option>
                                    <option value="Redes Sociais">Redes Sociais</option>
                                    <option value="Escola">Escola</option>
                                    <option value="Outra">Outra(o)s</option>
                                </select>
                                <label class="selectsize">De onde Conheceu a Linha?</label>
                            </div>
                            <div class="input-field col s12 col m12">
                                <div class="form-group">
                                    <select name="situacao_educacional">
                                        <option value="" disabled selected>--Seleccione a opcao--</option>
                                        <option value="Educacao Informal">Educacao Informal</option>
                                        <option value="Ensino primario">Ensino primario</option>
                                        <option value="Educacao Formal">Educacao Formal</option>
                                    </select>
                                    <label class="selectsize">Situacao Educacional</label>
                                </div>
                            </div>
                            <div class="input-field col s12 col m12">
                                <div class="form-group">
                                    <select name="vive_com">
                                        <option value="" disabled selected>--Seleccione a opcao--</option>
                                        <option value="Sozinho">Sozinho</option>
                                        <option value="Abrigo">Abrigo</option>
                                        <option value="Rua">Rua</option>
                                        <option value="Outro">Outro(a)</option>
                                    </select>
                                    <label class="selectsize">Vive com quem/onde?</label>
                                </div>
                            </div>
                            <div class="input-field col s12 col m12">
                                <div class="form-group">
                                    <select name="relacao_vitima">
                                        <option value="" disabled selected>--Seleccione a opcao--</option>
                                        <option value="Pai">Pai</option>
                                        <option value="Tio">Tio</option>
                                        <option value="Outra">Outra</option>
                                    </select>
                                    <label class="selectsize">Relacao com a Vitima</label>
                                </div>
                            </div>
                            <div class="input-field col s6">
                                {{--<i class="material-icons prefix">phone</i>--}}
                              <input id="icon_prefix" type="number" class="validate" name="cell1">
                                <label for="icon_prefix">Celular Principal</label>
                            </div>
                            <div class="input-field col s6">
                                {{--<i class="material-icons prefix">phone</i>--}}
                                <input id="icon_prefix" type="number" class="validate" name="cell2">
                                <label for="icon_prefix">Celular alternativo</label>
                            </div>
                            <div class="input-field col s12">
                                {{--<i class="material-icons prefix">mode_edit</i>--}}
                                <textarea id="icon_prefix2" class="materialize-textarea" name="descricao_extendida"></textarea>
                                <label for="icon_prefix2">Descricao do extendida</label>
                            </div>
                        </div>
                            </form>
                       </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat " id="add">Adicionar</a>
                        <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat ">Fechar</a>
                    </div>
                </div>


@endsection