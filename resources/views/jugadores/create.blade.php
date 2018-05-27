@extends('layouts.createview')

    @section('title', 'Crear Jugador')

    @section('createform')

        {!! Form::open(['route' => 'jugadores.store', 'method' => 'POST'] ) !!}
        <button type="submit" class="btn btn-primary"> {{ __('Guardar') }} </button>
        <a class="btn btn-primary" href="">Cancelar</a><br><br>

    @endsection
    
    @section('createview')
        
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        <label for="password-confirm" style="color:#585858">Confirmar Contraseña</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>

    @endsection