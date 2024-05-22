@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<main>
    <h1>{{ $movie->title }}</h1>
    <img src="{{$movie->image}}" alt="{{ $movie->title }}">

</main>

@endsection