@extends('layouts.listview')

    @section('title', 'Arbitros')

    @section('listview')

    {!! Form::open(['route' => 'arbitros.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right' , 'role' => 'search'] ) !!}
    <div class="input-group">
        {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre...']) !!}
        <span class="input-group-btn">
            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
        </span>
    </div>
    {!! Form::close() !!}
    
        <table class="table table-hover">
            <thead>
                <th>Identificacion</th>
                <th>Nombres</th>
                <th>Apellidos</th>
            </thead>
            <tbody>
                @foreach ($arbitros as $arbitro)
                    <tr>
                        <td><a href="{{ route('arbitros.show', $arbitro->id) }}">{{ $arbitro->identificacion }}</a></td>
                        <td>{{ $arbitro->nombres }}</td>
                        <td>{{ $arbitro->apellidos }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="float:right">
            {!! $arbitros->render() !!}
        </div>

    @endsection
