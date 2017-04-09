@extends('layout.job')

@section('job')
    <div class="list-group">
        <div class="list-group-item active "><h4 class="margin-zero">Latest Job Posting</h4></div>
            @foreach($jobs as $job)
                <a href="{{'/job/' . $job->id}}" class="list-group-item">
                    <span class="badge">{{$job->created_at->diffforHumans()}}</span>
                    <h4 class="margin-zero">{{$job->job_position}}</h4>
                    <small>by: {{$job->company_name}}</small>
                </a>
            @endforeach
            <div class="text-center">
                 {{ $jobs->links() }}
            </div>
        </div>
    </div>
@endsection