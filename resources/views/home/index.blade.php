@extends('layouts.app')
	@section('title', $viewData["title"])
	@section('content')
	<div class="row">
	<div class="col-md-6 col-lg-4 mb-2">
	<img src="{{ asset('/img/handphone.png') }}" class="img-fluid rounded">
	</div>
	<div class="col-md-6 col-lg-4 mb-2">
	<img src="{{ asset('/img/motor.png') }}" class="img-fluid rounded">
	</div>
	<div class="col-md-6 col-lg-4 mb-2">
	<img src="{{ asset('/img/laptop.png') }}" class="img-fluid rounded">
	</div>
	</div>
@endsection
