@extends('layouts.createview')

    @section('title', 'Crear Arbitro')

    @section('createform')

        {!! Form::open(['route' => 'arbitros.store', 'method' => 'POST'] ) !!}
        <button type="submit" class="btn btn-primary"> {{ __('Guardar') }} </button>
        <a class="btn btn-primary" href="">Cancelar</a><br><br>

    @endsection

    @section('createview')
        
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('identificacion', 'N° Identificacion', ['style' => 'color:#585858']) !!}
        {!! Form::text('identificacion', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('nombres', 'Nombre', ['style' => 'color:#585858']) !!}
        {!! Form::text('nombres', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('apellidos', 'Apellidos', ['style' => 'color:#585858']) !!}
        {!! Form::text('apellidos', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    @endsection