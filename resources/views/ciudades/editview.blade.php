@extends('layouts.editview')

@section('title', 'Editar Ciudad')
@section('title_name', $ciudad->CiudadNombre)

@section('editform')

    {!! Form::open(['route' => ['ciudades.update', $ciudad->id], 'method' => 'PUT']) !!}
    <button type="submit" class="btn btn-primary"> {{ __('Guardar') }} </button>
    <a class="btn btn-danger" href="{{ route('ciudades.show', $ciudad->id) }}">Cancelar</a><br><br>

@endsection

@section('editview')

    <?php
        $array = [];
        $paises = \DB::table('tb_paises')->select('PaisCodigo', 'PaisNombre')->get();
        foreach ($paises as $row)
        {
            $array[$row->PaisCodigo] = $row->PaisNombre;
        }
    ?>
    
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('CiudadNombre', 'Nombre Ciudad', ['style' => 'color:#585858']) !!}
        {!! Form::text('CiudadNombre', $ciudad->CiudadNombre, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('PaisCodigo', 'Pais', ['style' => 'color:#585858']) !!}
        {!! Form::select('PaisCodigo', $array, $ciudad->PaisCodigo, ['class' => 'form-control' , 'required'])!!}
    </div>

@endsection