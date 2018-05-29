@extends('layouts.detailview')

    @section('title','Consultar Empleado')
    @section('title_name', $empleado->nombres . ' ' . $empleado->apellidos)

    @section('buttons')

        <a class="btn btn-info" href="{{ route('empleados.index') }}">Ver Empleados</a>
        <a class="btn btn-primary" href="{{ route('empleados.edit', $empleado->id) }}">Editar</a>
        <a class="btn btn-danger" href="{{ route('empleados.destroy', $empleado->id) }}" onclick="return confirm('Deseas Eliminar este Registro?')">Eliminar</a>

    @endsection

    @section('detailview')

    <?php
        $sucursal = \DB::table('tb_sucursales')->where('id', $empleado->sucursal_id)->value('nombre');
    ?>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('identificacion', 'N° Identificacion', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$empleado->identificacion}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('nombres', 'Nombres', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$empleado->nombres}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('apellidos', 'Apellidos', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$empleado->apellidos}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('telefono', 'Telefono', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$empleado->telefono}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('cargo', 'Cargo', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$empleado->cargo}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('sucursal_id', 'Sucursal', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$sucursal}}</p>
    </div>

    @endsection
