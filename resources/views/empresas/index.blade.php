@extends('layouts.listview')

    @section('title', 'Empresas')

    @section('listview')

    {!! Form::open(['route' => 'empresas.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right' , 'role' => 'search'] ) !!}
    <div class="input-group">
        {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre...']) !!}
        <span class="input-group-btn">
            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
        </span>
    </div>
    {!! Form::close() !!}
    
        <table class="table table-hover">
            <thead>
                <th>Nit</th>
                <th>Razon Social</th>
                <th>Nombre Empresa</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Ciudad</th>
            </thead>
            <tbody>
                @foreach ($empresas as $empresa)
                    <?php
                        $ciudad = \DB::table('tb_ciudades')->where('id', $empresa->ciudad_id)->value('CiudadNombre');
                    ?>
                    <tr>
                        <td>{{ $empresa->nit }}</td>
                        <td><a href="{{ route('empresas.show', $empresa->id) }}">{{ $empresa->razon_social  }}</a></td>
                        <td>{{ $empresa->nombre_negocio }}</td>
                        <td>{{ $empresa->telefono }}</td>
                        <td>{{ $empresa->direccion }}</td>
                        <td>{{ $ciudad }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="float:right">
            {!! $empresas->render() !!}
        </div>

    @endsection
