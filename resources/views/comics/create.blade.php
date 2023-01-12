@extends('layout.main')

@section('content')
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Inserire il titolo">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" class="form-control" name="thumb" id="thumb"
                placeholder="Inserire la URL dell'immagine">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">prezzo</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="prezzo">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" name="type" id="type" placeholder="tipo di fumettto">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">serie</label>
            <input type="text" class="form-control" name="series" id="series" placeholder="Inserire la serie">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">sale date</label>
            <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="data di vendita">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Invia</button>
    </form>
@endsection
