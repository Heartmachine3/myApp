@extends('layouts.base')

@section('content')
    <br>
    <div class="container-fluid">
        <h3 style="color:#585858">Crear Usuarios</h3>
        <div class="padding-md">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <button type="submit" class="btn btn-primary">
                    {{ __('Guardar') }}
                </button>
                <a class="btn btn-primary" href="">Cancelar</a> <br> <br>
                <div>
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#">Datos Basicos</a></li> 
                    </ul> <br>
                    <div class="form-group row">

                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label for="id_nombres" style="color:#585858">Nombre</label>
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label for="id_apellidos" style="color:#585858">Email</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label for="id_apellidos" style="color:#585858">Contraseña</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label for="password-confirm" style="color:#585858">Confirmar Contraseña</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                </div>                    
            </form>
        </div>
    </div>
    
@stop
