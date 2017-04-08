@extends('layout.app')

@section('content')
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">KIOSK</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/admin">Dashboard</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form class="navbar-form navbar-left">
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </li> 
                </ul>
            </div>
        </div>
    </nav>
    <div class="margin-top">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-success">
                    <div class="panel-heading"><h4 class="margin-zero">{{$item->job_position}}</h4></div>
                    <div class="panel-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-7">
                                <h4 class="margin-zero">{{$item->company_name}}</h4>
                                <small>{{$item->created_at->diffforHumans()}}</small>
                            </div>
                            <div class="col-md-5">
                               <h4 class="margin-zero">
                                <span class="label label-success">
                                    @if($item->job_status === 0)
                                        {{'Job Status: CLOSE'}}
                                    @else
                                        {{'Job Status: OPEN'}}
                                    @endif
                                </span>
                                </h4>
                            </div>
                        </div>
                        <h5>Job Requirements</h5>
                        <div class="well well-sm">
                            {{$item->job_requirements}}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection