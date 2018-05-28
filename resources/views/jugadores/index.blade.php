@extends('layouts.listview')

    @section('title', 'Jugadores')

    @section('listview')
    
        <table class="table table-hover">
            <thead>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Equipo</th>
            </thead>
            <tbody>
                @foreach ($jugadores as $jugador)
                    <tr>
                        <td><a href="{{ route('jugadores.show', $jugador->id) }}">{{ $jugador->nombres  }}</a></td>
                        <td>{{ $jugador->apellidos  }}</td>
                        <td>{{ $jugador->equipo  }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="float:right">
            {!! $jugadores->render() !!}
        </div>

    @endsection
