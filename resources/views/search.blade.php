@extends('layout.app')

@section('content')
  <div class="verticalAlign ">
		<form method="GET" action="/job">
		
			<div class="input-group input-group-lg">
				<input type="text" name="search" class="form-control" placeholder="Job Position">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-success">Search</button>
				</span>
			</div>
		</form>
		<ol class="breadcrumb bread-bg">
			<li><a href="/job">View All</a></li>
		</ol>
	</div>
@endsection