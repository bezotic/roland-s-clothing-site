@extends('layouts.masters')

@section('top-script')

@stop

@section('content')


	<div class="container">
			
		<div class="col-md-4">
			<p>{{{$data}}}</P>
			<p>{{{$data['orderItem']}}}</P>
		</div>

	<div>
	

@stop

@section('bottom-script')


@stop