@extends('layouts.base')

@section('content')
<br>
<div class="container-fluid">
    <h3 style="color:#585858">@yield('title', 'Default')</h3>
    <div class="padding-md">
        
        @yield('searchdef')

        <div>
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#">Busqueda Basica</a></li> 
            </ul> <br>
            <div class="table-responsive">

                @yield('listview')
                
            </div>
        </div>
    </div>
</div>

{{--  @include('sweet::alert')  --}}

@stop