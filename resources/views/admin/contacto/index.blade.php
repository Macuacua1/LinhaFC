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
                    <span class="card-title">Contactos</span>
                    <table id="example" class="display responsive-table datatable-example">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tipo de Contacto</th>
                            <th>Criado a </th>
                            <th>Inserido por</th>
                            <th>Resumo</th>
                            <th>Motivo</th>
                            {{--<th>Inserido por</th>--}}
                            {{--<th>Inserido por</th>--}}
                            <th>Accao</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($contactos as $contacto)
                            <tr>
                                <td>{{$contacto->id}}</td>
                                <td>{{$contacto->tipo_contacto}}</td>
                                <td>{{$contacto->created_at}}</td>
                                <td>{{$contacto->user->nome}}</td>
                                <td>{{$contacto->resumo_contacto}}</td>
                                <td>{{$contacto->motivo->motivonome}}</td>

                                <td><a href="{{route('contacto.show',$contacto->id)}}" class="btn-floating btn-tiny waves-effect waves-light green"  style="width: 30px;height: 30px"><i class="material-icons" style="padding-bottom: 10px;margin-bottom: 10px">visibility</i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection