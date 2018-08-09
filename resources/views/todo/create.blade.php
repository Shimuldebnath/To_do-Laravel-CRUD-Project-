@extends('Layout.app')
@section('body')
	<br>
	<a href="/todo" class="btn btn-info">Back</a>
	<div class="col-lg-4 col-lg-offset-4">
		<h2>{{substr(Route::currentRouteName(),5)}} item</h2>
		<form class="form-horizontal" action="/todo/@yield('editID')" method="post">
		{{csrf_field()}}
		@section('editMethod')
		@show
  			<fieldset>
    			<div class="form-group">
    				<div class="col-lg-10">
      					<input class="form-control" type="text" name="title" value="@yield('edittitle')" placeholder="Title">
      					<br>
    				</div>

            
      			<div class="col-lg-10">
      					<textarea class="form-control" name="body" placeholder="Body" id="Textarea" rows="5">@yield('editbody')</textarea>
      					<br>
    					<button type="submit" class="btn btn-success">Submit</button>
    				</div>

    			</div>
  			</fieldset>
		</form>
		@include('todo.errors')
	</div>
@endsection