@extends('layouts.base')

@section('content')

    <div class="container-fluid" style="backgroud-color:gainsboro">
        <h3 class="page-header" style="color:grey">Dashboard</h3>
        <div class="padding-md">
            <form action="">
                <input class="btn btn-primary" type="submit" value="Guardar">
                <a class="btn btn-primary" href="">Cancelar</a> <br> <br>
                <div>
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#">Datos Basicos</a></li> 
                    </ul> <br>
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label for="id_name">Nombre</label>
                            <input name="name" value="" id="id_name" class="form-control" placeholder="" type="text">
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label for="id_name">Nombre</label>
                            <input name="name" value="" id="id_name" class="form-control" placeholder="" type="text">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
