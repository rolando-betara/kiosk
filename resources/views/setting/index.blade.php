@extends('layout.dashboard')

@section('paneltitle','Dashboard')

@section('dashboard')
   <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <form class="form-horizontal" action='/settings' method="POST">
                {{ csrf_field() }}
                    <fieldset>
                        <div id="legend">
                            <legend class="">Create User Account</legend>
                        </div>

                        <div class="control-group">
                            <label class="control-label"  for="username">Username</label>
                            <div class="controls">
                                <input type="text" id="username" name="username" placeholder="" class="form-control input-xlarge">
                            </div>
                        </div>
                    
                        <div class="control-group">
                            <label class="control-label" for="fullname">Full name</label>
                            <div class="controls">
                                <input type="text" id="fullname" name="fullname" placeholder="" class="form-control input-xlarge">
                            </div>
                        </div>
                    
                        <div class="control-group">
                            <label class="control-label" for="password">Password</label>
                            <div class="controls">
                                <input type="password" id="password" name="password" placeholder="" class="form-control input-xlarge">
                            </div>
                        </div>
                    
                        <div class="control-group">
                            <label class="control-label"  for="password_confirm">Password (Confirm)</label>
                            <div class="controls">
                                <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="form-control input-xlarge">
                            </div>
                        </div>
                        <br>
                        <div class="control-group">
                            <div class="controls">
                                <button class="btn btn-success" type="submit">Create Account</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-9"></div>
        </div>
   </div>
@endsection