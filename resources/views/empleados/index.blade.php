@extends('layouts.listview')

    @section('title', 'Empleados')

    @section('listview')

    {!! Form::open(['route' => 'empleados.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right' , 'role' => 'search'] ) !!}
    <div class="input-group">
        {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre...']) !!}
        <span class="input-group-btn">
            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
        </span>
    </div>
    {!! Form::close() !!}
    
        <table class="table table-hover">
            <thead>
                <th>N° Identificacion</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Telefono</th>
                <th>Cargo</th>
                <th>Sucursal</th>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                    <?php
                        $sucursal = \DB::table('tb_sucursales')->where('id', $empleado->sucursal_id)->value('nombre');
                    ?>
                    <tr>
                        <td><a href="{{ route('empleados.show', $empleado->id) }}">{{ $empleado->identificacion }}</a></td>
                        <td>{{ $empleado->nombres }}</td>
                        <td>{{ $empleado->apellidos }}</td>
                        <td>{{ $empleado->telefono }}</td>
                        <td>{{ $empleado->cargo }}</td>
                        <td>{{ $sucursal }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="float:right">
            {!! $empleados->render() !!}
        </div>

    @endsection
