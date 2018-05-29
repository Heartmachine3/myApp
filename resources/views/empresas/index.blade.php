@extends('layouts.listview')

    @section('title', 'Empresas')

    @section('listview')


    
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
