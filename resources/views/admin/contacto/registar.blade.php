@extends('layouts.master')
@section('content')

    <div class="row no-m-t no-m-b">
        <div class="col s12 m12 l12">
            <div class="card invoices-card">
                <div class="card-content">
                    <span class="card-title">Registo de Contacto</span>
                    <div class="row">
                        <form class="col s12" id="addcontacto" method="POST" action="/contacto" accept-charset="UTF-8">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="input-field col s6">
                                    <select name="tipo_contacto" id="tipo_contacto">
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="Telefone">Telefone</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Email">Email</option>
                                    </select>
                                    <label>Tipo de Contacto</label>
                                </div>
                                <div class="input-field col s6">
                                    <p class="p-v-xs">
                                        <input type="checkbox" name="anonimo[]" id="test6" value="sim"/>
                                        <label for="test6">Permanecer anonimo?</label>
                                    </p>
                                </div>
                            </div>
                                <div class="row">
                                <div class="input-field col s6">
                                    {{--<i class="material-icons prefix">account_circle</i>--}}
                                    <input id="icon_prefix" type="text" name="nome[]" class="validate">
                                    <label for="icon_prefix">Nome</label>
                                </div>
                                <div class="input-field col s6">
                                    {{--<i class="material-icons prefix">account_circle</i>--}}
                                    <input id="icon_prefix" type="text" name="apelido[]" class="validate">
                                    <label for="icon_prefix">Apelido</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 col m4">
                                    <div class="form-group">
                                    <select id="provincia_id" name="provincia_id" class="provincia">
                                        {{--<option value="" disabled selected>Choose your option</option>--}}
                                        @foreach($prov as $pro)
                                            <option value="{{$pro->id}}">{{$pro->provincianome}}</option>
                                        @endforeach
                                    </select>
                                    <label>Provincia</label>
                                        </div>
                                </div>
                                <div class="input-field col s12 col m4">
                                    <div class="form-group">
                                    <select  class="distritonome" name="distrito_id">
                                        <option value="0" disabled="true" selected="true">Distrito</option>
                                    </select>
                                    <label>Distrito</label>
                                        </div>
                                </div>
                                <div class="input-field col s12 col m4">
                                    <div class="form-group">
                                    <select class="localidadenome" name="localidade_id">
                                        <option value="0" disabled="true" selected="true">Localidade</option>
                                    </select>
                                    <label>Localidade</label>
                                        </div>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea id="icon_prefix2" class="materialize-textarea" name="descricao_local[]"></textarea>
                                    <label for="icon_prefix2">Descricao do local</label>
                                </div>
                                <div class="input-field col s6">
                                    {{--<i class="material-icons prefix">account_circle</i>--}}
                                    <input id="icon_prefix" type="number" class="validate" name="idade[]">
                                    <label for="icon_prefix">Idade</label>
                                </div>
                                <div class="input-field col s6">
                                    <p class="p-v-xs">
                                        <input name="genero[]" type="radio" id="test1" value="Masculino" />
                                        <label for="test1">Masculino</label>
                                        <input name="genero[]" type="radio" id="test2" value="Femenino"/>
                                        <label for="test2">Femenino</label>
                                    </p>
                                </div>

                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <select multiple="multiple" class="select2" name="idioma[]">
                                        <option value="" disabled selected>Choose more than one option</option>
                                        <option value="Portugues">Portugues</option>
                                        <option value="Changana">Changana</option>
                                        <option value="Chope">Chope</option>
                                        <option value="Sena">Sena</option>
                                        <option value="Ingles">Ingles</option>
                                        <option value="Outra">Outra</option>
                                        <option value="Desconhecida">Desconhecida</option>
                                    </select>
                                    <label>Linguas Faladas</label>
                                </div>
                                <div class="input-field col s6">
                                    <select name="conhecer_linha">
                                        <option value="0" disabled selected>Choose your option</option>
                                        <option value="TV">TV</option>
                                        <option value="Radio">Radio</option>
                                        <option value="Jornal">Jornal</option>
                                        <option value="Redes Sociais">Redes Sociais</option>
                                        <option value="Escola">Escola</option>
                                        <option value="Outra">Outra(o)s</option>
                                    </select>
                                    <label>De onde Conheceu a Linha?</label>
                                </div>
                                <div class="input-field col s6">
                                    <p class="p-v-xs">
                                        <input name="tipo" id="caso"  type="radio"value="yes" onclick="showHidecaso()">
                                        <label for="caso">Is Caso</label>

                                    </p>
                                </div>
                                <div class="input-field col s6">
                                    <p class="p-v-xs">
                                        <input name="tipo" id="naocaso" type="radio" value="yes" onclick="showHidecaso()">
                                        <label for="naocaso">Not Caso</label>
                                    </p>
                                </div>
                            </div>
                            <div class="row" id="case">
                                <div class="input-field col s12">
                                    <select name="motivo_id">
                                        <option value="" disabled selected>Escolhe a opcao</option>
                                        <option value="Informacao">Informacao</option>
                                        <option value="Engano">Engano</option>
                                        <option value="Elogio">Elogio</option>
                                    </select>
                                    <label>Motivo</label>
                                </div>
                            </div>
                            <div class="row" id="notcase">
                                <div class="input-field col s6">
                                    <select name="tipo_utente[]">
                                        <option value="contactante">Contactante</option>
                                        <option value="Contactante + Vitima">Contactante + Vitima</option>
                                        <option value="Contactante + Perpetrador">Contactante + Perpetrador</option>
                                    </select>
                                    <label>Tipo de Contactante</label>
                                </div>
                                <div class="input-field col s6">
                                    <p class="p-v-xs">
                                        <input type="checkbox" id="addpessoas" onclick="addpessoa()" value="yes"/>
                                        <label for="addpessoas">Adicionar mais pessoas</label>
                                    </p>
                                </div>

                                </div>
                            <div class="row" id="addmorepessoas">
                                <div class="input-field col s6">
                                    <select name="tipo_utente[]">
                                        <option value="Vitima">Vitima</option>
                                        <option value="Perpetrador">Perpetrador</option>
                                        <option value="Outro">Outro</option>
                                    </select>
                                    <label>Tipo de Contactante</label>
                                </div>
                                <div class="input-field col s6">
                                    <p class="p-v-xs">
                                        <input type="checkbox" id="anonimo" nome="anonino[]" value="sim"/>
                                        <label for="anonimo">Pemanecer anonimo?</label>
                                    </p>
                                </div>
                                </div>
                            <div class="row" id="addmorepessoas1">
                                <div class="input-field col s6">
                                    {{--<i class="material-icons prefix">account_circle</i>--}}
                                    <input id="icon_prefix" type="text" name="nome[]" class="validate">
                                    <label for="icon_prefix">Nome</label>
                                </div>
                                <div class="input-field col s6">
                                    {{--<i class="material-icons prefix">account_circle</i>--}}
                                    <input id="icon_prefix" type="text" name="apelido[]" class="validate">
                                    <label for="icon_prefix">Apelido</label>
                                </div>
                                <div class="input-field col s6">
                                    {{--<i class="material-icons prefix">account_circle</i>--}}
                                    <input id="icon_prefix" type="number" name="idade[]" class="validate">
                                    <label for="icon_prefix">Idade</label>
                                </div>
                                <div class="input-field col s6">
                                    <p class="p-v-xs">
                                        <input name="genero[]" type="radio" value="Masculino" id="test1" />
                                        <label for="test1">Masculino</label>
                                        <input name="genero[]" type="radio" id="test2" value="Femenino" />
                                        <label for="test2">Femenino</label>
                                    </p>
                                </div>
                                </div>
                            <div class="row" id="addmorepessoas2">
                                <div class="input-field col s6">
                                    {{--<i class="material-icons prefix">account_circle</i>--}}
                                    <input id="icon_prefix" type="text" class="validate" name="bi[]">
                                    <label for="icon_prefix">BI</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">email</i>
                                    <input id="icon_prefix" type="email" class="validate" name="email[]">
                                    <label for="icon_prefix">Email</label>
                                </div>
                                <div class="input-field col s4">
                                    {{--<input placeholder="" id="mask4" class="masked" type="text" data-inputmask="'mask': '(99) 999-9999'">--}}
                                    {{--<label for="mask4" class="active">Celular Principal</label>--}}
                                    <input id="icon_prefix" type="number" class="validate" name="cell1[]">
                                    <label for="icon_prefix">Celular Principal</label>
                                </div>
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="icon_prefix" type="number" class="validate" name="cell2[]">
                                    <label for="icon_prefix">Celular alternativo</label>
                                </div>
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="icon_prefix" type="number" class="validate" name="cell3[]">
                                    <label for="icon_prefix">Celular alternativo</label>
                                </div>
                                <div class="input-field col s6">
                                    <select name="situacao_educacional[]">
                                        <option value="Educacao Informal">Educacao Informal</option>
                                        <option value="Ensino primario">Ensino primario</option>
                                        <option value="Educacao Formal">Educacao Formal</option>
                                    </select>
                                    <label>Situacao Educacional</label>
                                </div>
                                <div class="input-field col s6">
                                    <select name="vive_com[]">
                                        <option value="Sozinho">Sozinho</option>
                                        <option value="Abrigo">Abrigo</option>
                                        <option value="Rua">Rua</option>
                                        <option value="Outro">Outro(a)</option>
                                    </select>
                                    <label id="combotam">Vive com quem/onde?</label>
                                </div>
                                <div class="input-field col s6">
                                    <select multiple="multiple" name="idioma[]">
                                        <option value="Portugues">Portugues</option>
                                        <option value="Changana">Changana</option>
                                        <option value="Chope">Chope</option>
                                        <option value="Sena">Sena</option>
                                        <option value="Ingles">Ingles</option>
                                        <option value="Outra">Outra</option>
                                        <option value="Desconhecida">Desconhecida</option>
                                    </select>
                                    <label>Linguas Faladas</label>
                                </div>
                                <div class="input-field col s6">
                                    <select name="relaco_vitima[]">
                                        <option value="Educacao Informal">Pai</option>
                                        <option value="Ensino primario">Tio</option>
                                        <option value="Educacao Formal">Outra</option>
                                    </select>
                                    <label id="combotam">Relacao com a Vitima</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea id="icon_prefix2" class="materialize-textarea" name="descricao_extendida"></textarea>
                                    <label for="icon_prefix2">Descricao do extendida</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea id="icon_prefix2" class="materialize-textarea" name="desc_antecedentes"></textarea>
                                    <label for="icon_prefix2">Descricao de antecedentes da familia da(s) vitima(s)</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea id="icon_prefix2" class="materialize-textarea" name="resumo_contacto"></textarea>
                                    <label for="icon_prefix2">Resumo do Contacto</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea id="icon_prefix2" class="materialize-textarea" name="impressao_atendente"></textarea>
                                    <label for="icon_prefix2">Impressao da(o) atendente</label>
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


    @endsection