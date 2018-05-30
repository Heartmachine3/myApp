@extends('layouts.listview')

    @section('title', 'Paises')

    @section('listview')

    {!! Form::open(['route' => 'paises.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right' , 'role' => 'search'] ) !!}
    <div class="input-group">
        {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre...']) !!}
        <span class="input-group-btn">
            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
        </span>
    </div>
    {!! Form::close() !!}
    
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
