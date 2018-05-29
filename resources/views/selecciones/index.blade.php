@extends('layouts.listview')

    @section('title', 'Selecciones')

    @section('listview')


    
        <table class="table table-hover">
            <thead>
                <th>Nombre Seleccion</th>
                <th>Sede</th>
                <th>Pais</th>
                <th>Director Tecnico</th>
            </thead>
            <tbody>
                @foreach ($selecciones as $seleccion)
                    <?php
                    $sede = \DB::table('tb_sedes')->where('id', $seleccion->sede_id)->value('nombre');
                    $pais = \DB::table('tb_paises')->where('PaisCodigo', $seleccion->paiscodigo)->value('PaisNombre');
                    $dt = \DB::table('tb_directores_tecnicos')->where('id', $seleccion->director_tecnico_id)->value('nombres');
                    ?>
                    <tr>
                        <td><a href="{{ route('selecciones.show', $seleccion->id) }}">{{ $seleccion->nombre }}</a></td>
                        <td>{{ $sede }}</td>
                        <td>{{ $pais }}</td>
                        <td>{{ $dt }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="float:right">
            {!! $selecciones->render() !!}
        </div>

    @endsection
