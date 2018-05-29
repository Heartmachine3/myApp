@extends('layouts.detailview')

    @section('title','Consultar Seleccion')
    @section('title_name', $seleccion->nombre)

    @section('buttons')

        <a class="btn btn-info" href="{{ route('selecciones.index') }}">Ver Seleccion</a>
        <a class="btn btn-primary" href="{{ route('selecciones.edit', $seleccion->id) }}">Editar</a>
        <a class="btn btn-danger" href="{{ route('selecciones.destroy', $seleccion->id) }}" onclick="return confirm('Deseas Eliminar este Registro?')">Eliminar</a>

    @endsection

    @section('detailview')

    <?php
        $sede = \DB::table('tb_sedes')->where('id', $seleccion->sede_id)->value('nombre');
        $pais = \DB::table('tb_paises')->where('PaisCodigo', $seleccion->paiscodigo)->value('PaisNombre');
        $dt = \DB::table('tb_directores_tecnicos')->where('id', $seleccion->director_tecnico_id)->value('nombres');
    ?>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('nombre', 'Nombre', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$seleccion->nombre}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('sede_id', 'Sede', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$sede}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('PaisCodigo', 'Pais', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$pais}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('director_tecnico_id', 'Director Tecnico', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$dt}}</p>
    </div>

    @endsection
