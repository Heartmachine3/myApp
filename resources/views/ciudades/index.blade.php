@extends('layouts.listview')

    @section('title', 'Ciudades')

    @section('listview')
    
        <table class="table table-hover">
            <thead>
                <th>Nombre Ciudad</th>
                <th>Codigo Pais</th>
            </thead>
            <tbody>
                @foreach ($ciudades as $ciudad)
                    <tr>
                        <td><a href="{{ route('ciudades.show', $ciudad->id) }}">{{ $ciudad->CiudadNombre  }}</a></td>
                        <td>{{ $ciudad->PaisCodigo  }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="float:right">
            {!! $ciudades->render() !!}
        </div>

    @endsection
