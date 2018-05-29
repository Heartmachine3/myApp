@extends('layouts.editview')

@section('title', 'Editar Pais')
@section('title_name', $pais->PaisNombre)

@section('editform')

    {!! Form::open(['route' => ['paises.update', $pais->PaisCodigo], 'method' => 'PUT']) !!}
    <button type="submit" class="btn btn-primary"> {{ __('Guardar') }} </button>
    <a class="btn btn-danger" href="{{ route('paises.show', $pais->PaisCodigo) }}">Cancelar</a><br><br>

@endsection

@section('editview')

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('PaisCodigo', 'Codigo Pais', ['style' => 'color:#585858', 'text-transform:uppercase' ]) !!}
        {!! Form::text('PaisCodigo', $pais->PaisCodigo, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('PaisNombre', 'Nombre Pais', ['style' => 'color:#585858']) !!}
        {!! Form::text('PaisNombre', $pais->PaisNombre, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

@endsection