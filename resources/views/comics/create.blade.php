@extends('layouts.app')

@section('content')
    <h3 class="text-center py-3">Nuovo fumetto</h3>

    <div class="row justify-content-center my-3">
        <div class="col-7">
            <form action="{{route('comics.store')}}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Titolo</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="floatingTextarea" name="description"></textarea>
                    <label for="floatingTextarea">Descrizione</label>
                  </div>
                <div class="mb-3">
                    <label class="form-label">Immagine</label>
                    <input type="text" class="form-control" name="thumb" placeholder="Inserire link">
                </div>
                <div class="mb-3">
                    <label class="form-label">Prezzo</label>
                    <input type="text" class="form-control" name="price">
                </div>
                <div class="mb-3">
                    <label class="form-label">Serie</label>
                    <input type="text" class="form-control" name="serie">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tipologia</label>
                    <input type="text" class="form-control" name="type">
                </div>
                <div class="mb-3">
                    <label class="form-label">Data di vendita</label>
                    <input type="date" class="form-control" name="sale_date">
                </div>

                <button class="btn btn-primary" type="submit">Salva prodotto</button>
            </form>
        </div>
    </div>
@endsection