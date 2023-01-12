@extends('layout.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">type</th>
                <th scope="col">price</th>
                <th scope="col">actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>
                        <a href="{{ route('comics.show', $comic) }}">detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    <a href="{{ route('comics.create') }}" class="button">add</a>
@endsection
