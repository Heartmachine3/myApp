@extends('layouts.createview')

    @section('title', 'Crear Empleado')

    @section('createform')

        {!! Form::open(['route' => 'empleados.store', 'method' => 'POST'] ) !!}
        <button type="submit" class="btn btn-primary"> {{ __('Guardar') }} </button>
        <a class="btn btn-primary" href="">Cancelar</a><br><br>

    @endsection

    @section('createview')

    <?php
        $array_sucursal = [];
        $sucursales = \DB::table('tb_sucursales')->select('id', 'nombre')->get();
        foreach ($sucursales as $row)
        {
            $array_sucursal[$row->id] = $row->nombre;
        }
    ?>
        
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('identificacion', 'N° Identificacion', ['style' => 'color:#585858']) !!}
        {!! Form::text('identificacion', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('nombres', 'Nombres', ['style' => 'color:#585858']) !!}
        {!! Form::text('nombres', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('apellidos', 'Apellidos', ['style' => 'color:#585858']) !!}
        {!! Form::text('apellidos', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('telefono', 'Telefono', ['style' => 'color:#585858']) !!}
        {!! Form::text('telefono', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('cargo', 'Cargo', ['style' => 'color:#585858']) !!}
        {!! Form::text('cargo', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('sucursal_id', 'Sucursal', ['style' => 'color:#585858']) !!}
        {!! Form::select('sucursal_id', $array_sucursal, null, ['class' => 'form-control' , 'required'])!!}
    </div>

    @endsection