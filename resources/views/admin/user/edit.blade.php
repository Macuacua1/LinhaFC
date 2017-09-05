@extends('layouts.master')
@section('content')
    <div class="row no-m-t no-m-b">
        <div class="col s12 m12 l12">
            <div class="card white darken-1" style="width: 100%!important;">
                <div class="card-content ">
                    <span class="card-title">Actualizar Utilizador</span>
                    <div class="row">
                        <form class="col s12" role="form" id="form-criar-conta" method="POST" action="{{route('user.update',$users->id)}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="input-field col s12">
                                <input id="name" type="text" class="validate" id="nome" name="nome" disabled value="{{$users->nome}}">
                                <label for="nome">Nome</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate" name="email" disabled value="{{$users->email}}">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s12">
                                <select name="role_id">
                                    <option value="{{$users->role_id}}">{{$users->role->rolenome}}</option>
                                    @if($users->role_id=1)
                                        <option value="2">Conselheiro</option>
                                    @else
                                        <option value="1">Administrador</option>
                                    @endif
                                </select>
                                <label for="perfil">Perfil</label>
                            </div>
                            <div class="input-field col s12">
                                <select name="escritorio">
                                    <option value="{{$users->escritorio}}">{{$users->escritorio}}</option>
                                    <option value="Linha Central">Linha Central</option>
                                    <option value="Marracuene">Marracuene</option>
                                </select>
                                <label for="escritorio">Escritorio</label>
                            </div>
                            <div class="input-field col s12">
                                <select name="estado">
                                    <option value="{{$users->estado}}">{{$users->estado}}</option>
                                    @if(!$users->estado="activo")
                                        <option value="inactivo">inactivo</option>
                                    @else
                                        <option value="activo">Activo</option>
                                    @endif
                                </select>
                                <label for="estado">Estado</label>
                            </div>
                            <div class="row">
                                <button class="btn waves-effect waves-light right" type="submit" name="action">Actualizar
                                    <i class="material-icons right">update</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection