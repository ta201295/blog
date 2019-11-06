@extends('main')

@section('title', '| About')

@section('content')   
	<div class="row">
		<div class="col-md-12">
			<h1>About {{ $data['fullname'] }}</h1>
			<p>Email me at {{ $data['email'] }}</p>
		</div>
	</div>
    
@endsection


