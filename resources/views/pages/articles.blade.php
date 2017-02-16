@extends('templates.master')

@section('title','Articles')

@section('content')

	<ul>
	@foreach($articles as $article)
		<li>Name : {{$article->name}} | Author : {{$article->author}}</li>
	@endforeach
	</ul>

@endsection