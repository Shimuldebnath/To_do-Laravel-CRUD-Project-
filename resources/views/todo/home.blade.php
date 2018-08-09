@extends('Layout.app')

@section('body')
	<br>
	@include('todo.partial.message')
	<a href="todo/create" class="btn btn-info">Add new!</a>
	<div class="col-lg-6 col-lg-offset-3">
		<center><h2>Todo lists</h2></center>
		<ul class="list-group col-lg-8">
		@foreach($todos as $todo)

  			<li class="list-group-item">
    			<a href="{{'/todo/'.$todo->id}}">{{$todo->title}}</a>
    			<span class="pull-right">{{$todo->created_at->diffforhumans()}}</span>
  			</li>
  			<!--<br>

  			<li class="list-group-item">
    			{{$todo->body}}
    			<span class="pull-right">{{$todo->created_at->diffforhumans()}}</span>
  			</li>
  			<br><br>--> 
  		@endforeach
		</ul>

		<ul class="list-group col-lg-4">
		@foreach($todos as $todo)
  			<li class="list-group-item">
    			<a href="{{'/todo/'.$todo->id.'/edit'}}">Edit</a>
    			<form class="form-group pull-right" action="{{'/todo/'.$todo->id}}" method="post">
    			{{csrf_field()}}
    			{{method_field('DELETE')}}
    			<input type="submit" value="delete"></form>
  			</li>
  		@endforeach
		</ul>
	</div>

@endsection