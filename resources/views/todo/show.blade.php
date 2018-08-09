@extends('Layout.app')

@section('body')
	<br>
	<div class="col-lg-offset-4 col-lg-4"><h2>{{$item->title}}</h2></div>
	

	<div class="col-lg-offset-4 col-lg-4"><h1>{{$item->body}}</h1>
@endsection