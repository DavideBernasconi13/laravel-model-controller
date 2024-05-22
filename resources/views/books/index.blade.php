@extends('layouts.app')

@section('title', 'Books')

@section('content')
<main>
    <h1>All Books</h1>
    <!-- <ul> -->
    <div class="row g-3">
        @foreach ($books as $item)
            <div class="col-12 col-md-4 col-lg-3">
                @include('partials.card')
            </div>
        @endforeach
    </div>

    <!-- </ul> -->

</main>

@endsection