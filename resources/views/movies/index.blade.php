@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<main>
    <h1>All Movies</h1>
    <div class="row g-3">
        @foreach ($movies as $item)
            <div class="col-12 col-md-4 col-lg-3">
                @include('partials.card')
            </div>
        @endforeach
    </div>

</main>

@endsection