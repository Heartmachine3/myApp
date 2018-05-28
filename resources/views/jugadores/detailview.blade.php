@extends('layouts.detailview')

    @section('title','Consultar Jugador')
    @section('title_name', $jugador->nombres . " " . $jugador->apellidos)

    @section('buttons')

        <a class="btn btn-info" href="{{ route('jugadores.index') }}">Ver Jugadores</a>
        <a class="btn btn-primary" href="{{ route('jugadores.edit', $jugador->id) }}">Editar</a>
        <a class="btn btn-danger" href="{{ route('jugadores.destroy', $jugador->id) }}" onclick="return confirm('Deseas Eliminar este Registro?')">Eliminar</a>

    @endsection

    @section('detailview')
    
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('nombres', 'Nombres', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$jugador->nombres}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('apellidos', 'Apellidos', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$jugador->apellidos}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('equipo', 'Equipo', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$jugador->equipo}}</p>
    </div>

    @endsection
