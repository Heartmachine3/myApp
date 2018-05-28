@extends('layouts.createview')

    @section('title', 'Crear Jugador')

    @section('createform')

        {!! Form::open(['route' => 'jugadores.store', 'method' => 'POST'] ) !!}
        <button type="submit" class="btn btn-primary"> {{ __('Guardar') }} </button>
        <a class="btn btn-primary" href="">Cancelar</a><br><br>

    @endsection

    @section('createview')
        
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('nombres', 'Nombres', ['style' => 'color:#585858']) !!}
        {!! Form::text('nombres', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('apellidos', 'Appellidos', ['style' => 'color:#585858']) !!}
        {!! Form::text('apellidos', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('equipo', 'Equipo', ['style' => 'color:#585858']) !!}
        {!! Form::text('equipo', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    {{--  <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('phone', 'Telefono', ['style' => 'color:#585858']) !!}
        {!! Form::select('phone', config('enums.phonetypes'),null, ['class' => 'form-control'])!!}
    </div>  --}}

    @endsection