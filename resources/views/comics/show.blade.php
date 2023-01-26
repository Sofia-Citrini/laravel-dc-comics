@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-4">
        <div class="img-container">
            <img src="{{$comic->thumb}}" alt="">
        </div>
    </div>
    <div class="col-8">
        <h2>{{$comic->title}}</h2>
        <div class="py-3">{{date('d/m/Y', strtotime($comic->sale_date))}}</div>
        <p>{{$comic->description}}</p>
        <div>Serie: <span class="fw-semibold">{{$comic->serie}}</span></div>
        <div>Tipologia: <span class="fw-semibold">{{$comic->type}}</span></div>
        <div class="fw-bold py-3">€ {{number_format($comic->price, 2, ',')}}</div>
    </div>
</div>

<a href="{{route('home')}}">Home</a>
<a class="ps-5" href="{{route('comics.index')}}">Tabella Fumetti</a>


    
@endsection