@extends('layouts.listview')

    @section('title', 'Ciudades')

    @section('listview')

    {!! Form::open(['route' => 'ciudades.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right' , 'role' => 'search'] ) !!}
    <div class="input-group">
        {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre...']) !!}
        <span class="input-group-btn">
            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
        </span>
    </div>
    {!! Form::close() !!}
    
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
