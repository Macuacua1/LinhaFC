@extends('layouts.master')
@section('content')
    <div class="row no-m-t no-m-b">
        <div class="col s12 m12 l12">
            {{--<a href="{{route('user.create')}}" class="btn-floating btn-small waves-effect waves-light primary right"><i class="material-icons right">add</i></a>--}}

            <div class="card invoices-card">
                <div class="card-content">
                    <div class="card-options">
                        <input type="text" class="expand-search" placeholder="Search" autocomplete="off">
                    </div>
                    <span class="card-title">Utilizadores</span>
                    <table id="example" class="display responsive-table datatable-example">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Perfil</th>
                            <th>Estado</th>
                            <th>Accao</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->nome}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role->rolenome}}</td>
                                <td>{{$user->estado}}</td>

                                <td><a href="{{route('user.edit',$user->id)}}" class="btn-floating btn-tiny waves-effect waves-light green"><i class="material-icons">edit</i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection