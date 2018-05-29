@extends('layouts.listview')

    @section('title', 'Empleados')

    @section('listview')


    
        <table class="table table-hover">
            <thead>
                <th>Identificacion</th>
                <th>Nombres</th>
                <th>Apellidos</th>
            </thead>
            <tbody>
                @foreach ($arbitros as $arbitro)
                    <tr>
                        <td><a href="{{ route('arbitros.show', $arbitro->id) }}">{{ $arbitro->identificacion }}</a></td>
                        <td>{{ $arbitro->nombres }}</td>
                        <td>{{ $arbitro->apellidos }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="float:right">
            {!! $arbitros->render() !!}
        </div>

    @endsection
