@extends('layout.app')

@section('content')
    <div class="container-fluid m-t">
        <div class="row">
            <div class="col-md-2">
                <div class="panel panel-info">
                    <div class="panel-heading ">KIOSK MENU</div>
                    <div class="panel-body">
                       <ul class="nav nav-pills nav-stacked">
                         <li class="{{ Request::is('admin') ? 'active' : '' }}"><a href="{{ url('/admin') }}">Dashboard</a></li>
                         <li class="{{ Request::is('admin/create') ? 'active' : '' }}"><a href="{{ url('/admin/create') }}">Add Job</a></li>
                         <li class="{{ Request::is('admin/edit') ? 'active' : '' }}"><a href="">Edit Job</a></li>
                         <li class="{{ Request::is('admin/delete') ? 'active' : '' }}"><a href="">Delete Job</a></li>
                         <li class="{{ Request::is('settings') ? 'active' : '' }}"><a href="{{ url('/settings') }}">Settings</a></li>
                       </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">@yield('paneltitle')</h3>
                        </div>
                        <div class="panel-body">
                            @section('dashboard')
                                @show
                        </div>
                    </div>   



                      
                    </div>
                </div>
            </div>
        </div>
    </div>   
@endsection