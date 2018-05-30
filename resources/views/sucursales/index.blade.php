@extends('layouts.listview')

    @section('title', 'Sucursales')

    @section('listview')

    {!! Form::open(['route' => 'sucursales.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right' , 'role' => 'search'] ) !!}
    <div class="input-group">
        {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre...']) !!}
        <span class="input-group-btn">
            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
        </span>
    </div>
    {!! Form::close() !!}
    
        <table class="table table-hover">
            <thead>
                <th>Nombre</th>
                <th>Empresa</th>
                <th>Ciudad</th>
                <th>Telefono</th>
                <th>Direccion</th>
            </thead>
            <tbody>
                @foreach ($sucursales as $sucursal)
                    <?php
                        $ciudad = \DB::table('tb_ciudades')->where('id', $sucursal->ciudad_id)->value('CiudadNombre');
                        $empresa = \DB::table('tb_empresas')->where('id', $sucursal->empresa_id)->value('razon_social');
                    ?>
                    <tr>
                        <td><a href="{{ route('sucursales.show', $sucursal->id) }}">{{ $sucursal->nombre  }}</a></td>
                        <td>{{ $empresa }}</td>
                        <td>{{ $ciudad }}</td>
                        <td>{{ $sucursal->telefono }}</td>
                        <td>{{ $sucursal->direccion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="float:right">
            {!! $sucursales->render() !!}
        </div>

    @endsection
