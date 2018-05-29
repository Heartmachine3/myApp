@extends('layouts.listview')

    @section('title', 'Sucursales')

    @section('listview')


    
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
