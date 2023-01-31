@extends('layouts.app')

@section('content')
    <h3 class="text-center py-3">Nuovo fumetto</h3>

    <div class="row justify-content-center my-3">
        <div class="col-7">
            <form action="{{route('comics.store')}}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Titolo</label>
                    <input type="text" class="form-control @error('title') is-invalid @elseif(old('title')) is-valid @enderror" 
                    name="title" value="{{$errors->has('title') ? '' : old('title')}}">

                    @error('title')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Descrizione</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description"> {{old('description')}}</textarea>


                    @error('description')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Immagine</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @elseif(old('thumb')) is-valid @enderror" name="thumb" 
                    placeholder="Inserire un link" value="{{$errors->has('thumb') ? '' : old('thumb')}}">

                    @error('thumb')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Prezzo</label>
                    <input type="number" class="form-control @error('price') is-invalid @elseif(old('price')) is-valid @enderror" name="price" 
                    value="{{$errors->has('price') ? '' : old('price')}}">

                    @error('price')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Serie</label>
                    <input type="text" class="form-control @error('serie') is-invalid @elseif(old('serie')) is-valid @enderror" name="serie"
                    value="{{$errors->has('serie') ? '' : old('serie')}}">

                    @error('serie')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Tipologia</label>
                    <input type="text" class="form-control @error('type') is-invalid @elseif(old('type')) is-valid @enderror" name="type"
                    value="{{$errors->has('type') ? '' : old('type')}}">

                    @error('type')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">Data di vendita</label>
                    <input type="date" class="form-control @error('sale_date') is-invalid @elseif(old('sale_date')) is-valid @enderror" name="sale_date" 
                    value="{{$errors->has('sale_date') ? '' : old('sale_date')}}">

                    @error('sale_date')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <button class="btn btn-primary" type="submit">Salva prodotto</button>
            </form>
        </div>
    </div>
@endsection