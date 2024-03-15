@extends('layouts.layout')
@section('content')
     <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Persona</h5>
                        <p>{{$person->name}}</p>
                    </div>
                    <div class="ibox-content">
                        <p>dni: {{$person->dni}}</p>
                        <p>Fecha de nacimiento:  <td>{{ \Carbon\Carbon::parse($person->birthday)->format('d/m/Y') }}</td></p>
                    </div>
                </div> 
            </div>
        </div>
    </div>
@stop