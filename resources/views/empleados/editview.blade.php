@extends('layouts.editview')

@section('title', 'Editar Empleado')
@section('title_name', $empleado->nombres . ' ' . $empleado->apellidos )

@section('editform')

    {!! Form::open(['route' => ['empleados.update', $empleado->id], 'method' => 'PUT']) !!}
    <button type="submit" class="btn btn-primary"> {{ __('Guardar') }} </button>
    <a class="btn btn-danger" href="{{ route('empleados.show', $empleado->id) }}">Cancelar</a><br><br>

@endsection

@section('editview')

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
        {!! Form::text('identificacion', $empleado->identificacion, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('nombres', 'Nombres', ['style' => 'color:#585858']) !!}
        {!! Form::text('nombres', $empleado->nombres, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('apellidos', 'Apellidos', ['style' => 'color:#585858']) !!}
        {!! Form::text('apellidos', $empleado->apellidos, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('telefono', 'Telefono', ['style' => 'color:#585858']) !!}
        {!! Form::text('telefono', $empleado->telefono, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('cargo', 'Cargo', ['style' => 'color:#585858']) !!}
        {!! Form::text('cargo', $empleado->cargo, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('sucursal_id', 'Sucursal', ['style' => 'color:#585858']) !!}
        {!! Form::select('sucursal_id', $array_sucursal, $empleado->sucursal_id, ['class' => 'form-control' , 'required'])!!}
    </div>

@endsection