@extends('layouts.listview')

    @section('title', 'Empleados')

    @section('listview')

    {!! Form::open(['route' => 'sedes.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right' , 'role' => 'search'] ) !!}
    <div class="input-group">
        {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre...']) !!}
        <span class="input-group-btn">
            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
        </span>
    </div>
    {!! Form::close() !!}
    
        <table class="table table-hover">
            <thead>
                <th>Nombre</th>
                <th>Ciudad</th>
            </thead>
            <tbody>
                @foreach ($sedes as $sede)
                    <?php
                        $ciudad = \DB::table('tb_ciudades')->where('id', $sede->ciudad_id)->value('Ciudadnombre');
                    ?>
                    <tr>
                        <td><a href="{{ route('sedes.show', $sede->id) }}">{{ $sede->nombre }}</a></td>
                        <td>{{ $ciudad }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="float:right">
            {!! $sedes->render() !!}
        </div>

    @endsection
