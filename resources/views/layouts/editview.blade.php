@extends('layouts.base')

@section('content')
<br>
<div class="container-fluid">
    <h3 style="color:#585858">@yield('title', 'Default')</h3>
    <h4 style="color:#585858">@yield('title_name', 'Default')</h4>
    <div class="padding-md">

        @yield('editform')

        <div>
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#">Datos Basicos</a></li> 
            </ul> <br>
            <div class="from-group">

                @yield('editview')

            </div>
        </div>

        {!! Form::close() !!}
    </div>
</div>

@stop