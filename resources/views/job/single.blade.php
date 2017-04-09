@extends('layout.job')

@section('job')
    <div class="panel panel-success">
        <div class="panel-heading"><h4 class="margin-zero">{{$item->job_position}}</h4></div>
        <div class="panel-body">
            <div class="container-fluid padding-none">
                <div class="list-group-item ls-gp">
                    <span class="badge bg-color">
                        @if($item->job_status === 0)
                            {{'Job Status: CLOSE'}}
                        @else
                            {{'Job Status: OPEN'}}
                        @endif
                    </span>
                    <h4 class="margin-zero">{{$item->company_name}}</h4>
                    <small>{{$item->created_at->diffforHumans()}}</small>
                </div>
            <h5>Job Requirements</h5>
            <pre>{{$item->job_requirements}}</pre>
        </div>
    </div>
@endsection