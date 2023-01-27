@extends('layouts.app')

@section('content')
    <h3 class="text-center py-3">Modifica fumetto</h3>

    <div class="row justify-content-center my-3">
        <div class="col-7">
            <form action="{{route('comics.update', $comic->id)}}" method="POST">
                @csrf

                @method('put')

                <div class="mb-3">
                    <label class="form-label">Titolo</label>
                    <input type="text" class="form-control" name="title" value="{{$comic->title}}">
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="floatingTextarea" name="description">{{$comic->description}}</textarea>
                    <label for="floatingTextarea">Descrizione</label>
                  </div>
                <div class="mb-3">
                    <label class="form-label">Immagine</label>
                    <input type="text" class="form-control" name="thumb" placeholder="Inserire link" value="{{$comic->thumb}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Prezzo</label>
                    <input type="number" class="form-control" name="price" value="{{$comic->price}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Serie</label>
                    <input type="text" class="form-control" name="serie" value="{{$comic->serie}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tipologia</label>
                    <input type="text" class="form-control" name="type" value="{{$comic->type}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Data di vendita</label>
                    <input type="date" class="form-control" name="sale_date" value="{{$comic->sale_date}}">
                </div>

                <button class="btn btn-primary" type="submit">Salva modifica</button>
            </form>
        </div>
    </div>
@endsection