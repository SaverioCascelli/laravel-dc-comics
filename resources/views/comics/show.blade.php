@extends('layout.main')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->description }}</p>
    <a href="{{ route('comics.index') }}"> go back</a>
@endsection
