@extends('layouts.createview')

    @section('title', 'Crear Ciudad')

    @section('createform')

        {!! Form::open(['route' => 'ciudades.store', 'method' => 'POST'] ) !!}
        <button type="submit" class="btn btn-primary"> {{ __('Guardar') }} </button>
        <a class="btn btn-primary" href="">Cancelar</a><br><br>

    @endsection

    @section('createview')

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
        {!! Form::text('CiudadNombre', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('PaisCodigo', 'Pais', ['style' => 'color:#585858']) !!}
        {!! Form::select('PaisCodigo', $array, null, ['class' => 'form-control' , 'required'])!!}
    </div>

    @endsection