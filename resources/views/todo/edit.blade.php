@extends('todo.create')
@section('editID',$item->id)

@section('edittitle',$item->title)
@section('editbody',$item->body)
@section('editMethod')
	{{method_field('PUT')}}
@endsection
