@extends('main')
@section('css')
<style type="text/css">
.entry:not(:first-of-type)
{
    margin-top: 10px;
}

.glyphicon
{
    font-size: 12px;
}
.text-uppercase{
    text-transform:uppercase;
}
</style>		
@endsection
@section('contenido')
{{-- MENSAJE DE EXITO --}}
@if(Session::has('msnExito'))
	<div class="alert alert-success square fade in alert-dismissable">
		<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
		<strong>Enhorabuena!</strong>
		{{ Session::get('msnExito') }}
	</div>
@endif
{{-- MENSAJE DE ERROR --}}
@if(Session::has('msnError'))
	<div class="alert alert-danger square fade in alert-dismissable">
		<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
		<strong>Auchh!</strong>
		Algo ha salido mal.	{{ Session::get('msnError') }}
	</div>
@endif
	<div class="the-box">
		 <div class="panel panel-primary">
                    <div class="panel-heading" >
                      <h3 class="panel-title">NUEVA HOJA DE SERVICIO</h3>
                    </div>
                    <div class="panel-body">
                       	<form>
                       	<div class="row">
                       		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          		<label>Fecha:</label>
                            	<input type="text" class="form-control text-uppercase" id="numregistro" name="numregistro" value="">
                        	</div>
                        	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          		<label>Numero Hoja:</label>
                            	<input type="text" class="form-control text-uppercase" id="numregistro" name="numregistro" value="">
                        	</div>
                        	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          		<label>Hora Inicio:</label>
                            	<input type="text" class="form-control text-uppercase" id="numregistro" name="numregistro" value="">
                        	</div>
                        	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          		<label>Hora Fin:</label>
                            	<input type="text" class="form-control text-uppercase" id="numregistro" name="numregistro" value="">
                        	</div>

                       	</div>
                       	<br>
                       	<div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                          <div> 
                            <label>Seleccione La Empresa:</label>
                            <select class="form-control" name="establecimiento" id="establecimiento">
                              <option selected>SUPER REPUESTOS</option>
                             
                            </select>

                          </div>  
                        </div>
                         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                          <div> 
                            <label>Seleccione el Trabajador:</label>
                            <select class="form-control" name="establecimiento" id="establecimiento">
                              <option selected>JUAN PEREZ</option>
                             
                            </select>

                          </div>  
                        </div>
                        </div> 
                        <br> 
                        <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          		<label>Tipo de Servicio:</label>
                            	<select class="form-control" name="establecimiento" id="establecimiento">
                             		 <option selected>MANTENIMIENTO PREVENTIVO</option>
                           		 </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label>Seleccione el archivo:</label>
                            <input type="file" class="form-control" id="numregistro" name="numregistro" value="">
                        </div>
                        </div>
                        <br>
                        <div alging="center" class="col-xs-2 col-sm-3 col-md-3 col-lg-3">
                            <input type="submit" class="btn btn-primary" id="numregistro">
                        </div>
                        </div>


                      </form>
                    </div>
              </div>
	</div>
@endsection
@section('js')
@endsection