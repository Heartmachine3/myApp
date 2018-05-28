@extends('layouts.editview')

@section('title', 'Editar Jugador')
@section('title_name', $jugador->nombres . " " . $jugador->apellidos)

@section('editform')

    {!! Form::open(['route' => ['jugadores.update', $jugador->id], 'method' => 'PUT']) !!}
    <button type="submit" class="btn btn-primary"> {{ __('Guardar') }} </button>
    <a class="btn btn-danger" href="{{ route('jugadores.show', $jugador->id) }}">Cancelar</a><br><br>

@endsection

@section('editview')

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('nombres', 'Nombres', ['style' => 'color:#585858']) !!}
        {!! Form::text('nombres', $jugador->nombres, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('apellidos', 'Appellidos', ['style' => 'color:#585858']) !!}
        {!! Form::text('apellidos', $jugador->apellidos, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('equipo', 'Equipo', ['style' => 'color:#585858']) !!}
        {!! Form::text('equipo', $jugador->equipo, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

@endsection