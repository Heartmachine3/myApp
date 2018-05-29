@extends('layouts.editview')

@section('title', 'Editar Arbitro')
@section('title_name', $arbitro->nombres . ' ' . $arbitro->apellidos)

@section('editform')

    {!! Form::open(['route' => ['arbitros.update', $arbitro->id], 'method' => 'PUT']) !!}
    <button type="submit" class="btn btn-primary"> {{ __('Guardar') }} </button>
    <a class="btn btn-danger" href="{{ route('arbitros.show', $arbitro->id) }}">Cancelar</a><br><br>

@endsection

@section('editview')

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
    {!! Form::label('identificacion', 'N° Identificacion', ['style' => 'color:#585858']) !!}
    {!! Form::text('identificacion', $arbitro->identificacion, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
    {!! Form::label('nombres', 'Nombres', ['style' => 'color:#585858']) !!}
    {!! Form::text('nombres', $arbitro->nombres, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
    {!! Form::label('apellidos', 'Apellidos', ['style' => 'color:#585858']) !!}
    {!! Form::text('apellidos', $arbitro->apellidos, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

@endsection