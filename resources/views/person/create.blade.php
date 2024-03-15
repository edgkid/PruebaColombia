@extends('layouts.layout')
@section('content')
	<div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                    	<h5>Nueva persona</h5>
                    </div>
                    <div class="ibox-content">

                    	<form role="form" method="POST" action="/expense_record/authenticate">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="row">
	            				<div class="col-lg-6">

									 <div class="form-group">
									    <select class="form-control" id="centroCosto">
									    	<option selected="true" disabled="disabled">seleccione centro de costos</option>
									      	<option>1</option>
									      	<option>2</option>
									      	<option>3</option>
									      	<option>4</option>
									      	<option>5</option>
									    </select>
									    <small id="centroCostoHelp" class="form-text text-muted">Centro de costos asociado a legajo de empleado.</small>
									 </div>

									 <div class="form-group">
									    <input type="text" id="cuitEmpleado" name="cuitEmpleado" class="form-control" placeholder="Cuit" >
									    <small id="legajoHelp" class="form-text text-muted">Cuit a partir de la empresa asociado al empleado.</small>
									 </div>

	            				</div>
	            				<div class="col-lg-6">

                                    <div class="form-group">
									    <input type="text" id="dni" name="dni" class="form-control" placeholder="" >
									    <small id="dni" class="form-text text-muted">DNI</small>
									 </div>

	            					<div class="form-group">
									    <input type="text" id="name" name="name" class="form-control" >
									    <small id="name" class="form-text text-muted">Nombre de persona.</small>
									 </div>

									 <div class="form-group">
     
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                    </div>
                                    <input class="form-control datepicker" placeholder="Seleccionar Fecha" type="text" value="2020/06/20" data-date-format="yyyy/mm/dd">
                                </div>

            </div>  

									 <button type="submit" class="btn btn-primary">Guardar</button>
	            				</div> 
	            			</div> 
                        </form>

                    	

                	</div>    	
                </div>
            </div>
        </div>
    </div>
@stop