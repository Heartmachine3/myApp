@extends('layouts.listview')

    @section('title', 'Empleados')

    @section('listview')


    
        <table class="table table-hover">
            <thead>
                <th>Nombre</th>
                <th>Ciudad</th>
            </thead>
            <tbody>
                @foreach ($sedes as $sede)
                    <?php
                        $ciudad = \DB::table('tb_ciudades')->where('id', $sede->ciudad_id)->value('Ciudadnombre');
                    ?>
                    <tr>
                        <td><a href="{{ route('sedes.show', $sede->id) }}">{{ $sede->nombre }}</a></td>
                        <td>{{ $ciudad }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="float:right">
            {!! $sedes->render() !!}
        </div>

    @endsection
