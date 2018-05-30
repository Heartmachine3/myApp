@extends('layouts.listview')

    @section('title', 'Jugadores')

    @section('listview')

        {!! Form::open(['route' => 'jugadores.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right' , 'role' => 'search'] ) !!}
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
                <th>Apellido</th>
                {{-- <th>Equipo</th> --}}
                <th>Seleccion</th>
            </thead>
            <tbody>
                @foreach ($jugadores as $jugador)
                    <tr>
                        <?php
                            $seleccion = \DB::table('tb_selecciones')->where('id', $jugador->seleccion_id)->value('nombre');
                        ?>
                        <td><a href="{{ route('jugadores.show', $jugador->id) }}">{{ $jugador->nombres  }}</a></td>
                        <td>{{ $jugador->apellidos  }}</td>
                        {{-- <td>{{ $jugador->equipo  }}</td> --}}
                        <td>{{ $seleccion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="float:right">
            {!! $jugadores->render() !!}
        </div>

    @endsection
