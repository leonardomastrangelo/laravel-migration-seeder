@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>Home page</h1>

    <ul>
        @foreach ($trains as $train)
        <li>
            {{$train->agency}}
        </li>
        @endforeach
    </ul>
</main>

@endsection
