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
                    <input type="text" class="form-control @error('title') is-invalid @elseif(old('title')) is-valid @enderror" 
                    name="title" value="{{old('title', $comic->title)}}">

                    @error('title')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Descrizione</label>
                    <textarea class="form-control @error('description') is-invalid @elseif(old('description')) is-valid @enderror" name="description">
                        {{old('description',$comic->description)}}
                    </textarea>

                    @error('description')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Immagine</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @elseif(old('thumb')) is-valid @enderror" name="thumb" 
                    placeholder="Inserire link" value="{{old('thumb', $comic->thumb)}}">

                    @error('thumb')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Prezzo</label>
                    <input type="number" class="form-control @error('price') is-invalid @elseif(old('price')) is-valid @enderror" name="price" 
                    value="{{old('price', $comic->price)}}">

                    @error('price')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Serie</label>
                    <input type="text" class="form-control @error('serie') is-invalid @elseif(old('serie')) is-valid @enderror" name="serie" 
                    value="{{old('serie', $comic->serie)}}">

                    @error('serie')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Tipologia</label>
                    <input type="text" class="form-control @error('type') is-invalid @elseif(old('type')) is-valid @enderror" name="type" 
                    value="{{old('type', $comic->type)}}">

                    @error('type')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Data di vendita</label>
                    <input type="date" class="form-control @error('sale_date') is-invalid @elseif(old('sale_date')) is-valid @enderror" name="sale_date" 
                    value="{{old('sale_date', $comic->sale_date)}}">

                    @error('sale_date')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <button class="btn btn-primary" type="submit">Salva modifica</button>
            </form>
        </div>
    </div>
@endsection