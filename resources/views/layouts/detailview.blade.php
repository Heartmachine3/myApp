@extends('layouts.base')

@section('content')
<br>
<div class="container-fluid">
    <h3 style="color:#585858">@yield('title', 'Default')</h3>
    <h4 style="color:#585858">@yield('title_name', 'Default')</h4>
    <div class="padding-md">
        
        @yield('buttons') <br> <br>

        <div>
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#">Datos Basicos</a></li> 
            </ul> <br>
            <div class="tab-content">

                @yield('detailview')

            </div>
        </div>
    </div>
</div>

{{--  @include('sweet::alert')  --}}

@stop