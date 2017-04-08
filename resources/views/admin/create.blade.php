@extends('layout.dashboard')

@section('paneltitle','Create Job Post')

@section('dashboard')
    <form action="/admin"  method="post">
    {{csrf_field()}}
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" name="c_name" class="form-control input-sm" placeholder="Company Name" required>
                </div>
                <div class="form-group">
                    <input type="text" name="c_fulladd"  class="form-control input-sm" placeholder="Company Full Address" required>
                </div>
                <div class="form-group">
                    <input type="text" name="c_contact"  class="form-control input-sm" placeholder="Company Contact Number" required>
                </div>
                <div class="form-group">
                    <input type="email" name="c_email"  class="form-control input-sm" placeholder="Company Email" required>
                </div>
                <div class="form-group">
                    <input type="text" name="job_postion"  class="form-control input-sm" placeholder="Job Position" required>
                </div>
                <div class="form-group">
                    <input type="submit"  value="Submit" class="btn btn-info">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea class="form-control input-sm" rows="11" name="job_req" placeholder="Job Requirements" required></textarea>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-success btn-on active">
                            <input type="radio" name="options"  value="1" checked="checked"> Open
                        </label>
                        <label class="btn btn-success btn-on">
                            <input type="radio" name="options"  value="0"> Close
                        </label>
                    </div>
                </div>                                                             
            </div>
        </div>
    </form>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif       
@endsection