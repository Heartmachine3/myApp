@extends('layouts.listview')

    @section('title', 'Paises')

    @section('listview')
    
        <table class="table table-hover">
            <thead>
                <th>Codigo Pais</th>
                <th>Nombre Pais</th>
            </thead>
            <tbody>
                @foreach ($paises as $pais)
                    <tr>
                        <td><a href="{{ route('paises.show', $pais->PaisCodigo) }}">{{ $pais->PaisCodigo  }}</a></td>
                        <td>{{ $pais->PaisNombre  }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="float:right">
            {!! $paises->render() !!}
        </div>

    @endsection
