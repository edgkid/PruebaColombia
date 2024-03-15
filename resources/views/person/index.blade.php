@extends('layouts.layout')
@section('content')
     <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Personas</h5>
                        <div class="ibox-tools" style="margin-top: -5px;">
                            <form role="form" method="GET" action="#">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="input-group mb-3">
                                    <input type="text" id="" name="filter"class="form-control" placeholder="Buscar">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button>

                                    </div>
                                    <a href="/people/create" class="btn btn-sm btn-white " style="border:none;">
                                                <span class="glyphicon glyphicon-plus" title="Agregar Rendiciòn"></span>
                                        </a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>DNI</th>
                                    <th>Nombre</th>
                                    <th>Fecha de Nacimeinto</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($people as $person)
                                <tr>
                                    <td>{{ $person->id }}</td>
                                    <td>{{ $person->dni }}</td>
                                    <td>{{ $person->name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($person->birthday)->format('d/m/Y') }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="/people/show/{{ $person->id}}" class="btn btn-sm btn-white ">
                                              <span class="glyphicon glyphicon-search" title="Consulta de registro"></span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@stop