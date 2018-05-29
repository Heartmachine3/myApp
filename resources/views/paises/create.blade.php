@extends('layouts.createview')

    @section('title', 'Crear Pais')

    @section('createform')

        {!! Form::open(['route' => 'paises.store', 'method' => 'POST'] ) !!}
        <button type="submit" class="btn btn-primary"> {{ __('Guardar') }} </button>
        <a class="btn btn-primary" href="">Cancelar</a><br><br>

    @endsection

    @section('createview')
        
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('PaisCodigo', 'Codigo Pais', ['style' => 'color:#585858']) !!}
        {!! Form::text('PaisCodigo', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('PaisNombre', 'Nombre Pais', ['style' => 'color:#585858']) !!}
        {!! Form::text('PaisNombre', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    {{--  <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('phone', 'Telefono', ['style' => 'color:#585858']) !!}
        {!! Form::select('phone', config('enums.phonetypes'),null, ['class' => 'form-control'])!!}
    </div>  --}}

    @endsection