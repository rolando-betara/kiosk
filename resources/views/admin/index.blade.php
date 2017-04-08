@extends('layout.dashboard')

@section('paneltitle','Dashboard')

@section('dashboard')
   <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                   
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="list-group">
                <div class="list-group-item active "><h4 class="margin-zero">Latest Job Posting</h4></div>
                @foreach($jobs as $job)
                    <a href="{{'/job/' . $job->id}}" class="list-group-item">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="margin-zero">{{$job->job_position}}</h4>
                                <small>by: {{$job->company_name}}</small>
                            </div>
                            <div class="col-md-4">
                                <span class="badge">{{$job->created_at->diffforHumans()}}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
   </div>
@endsection