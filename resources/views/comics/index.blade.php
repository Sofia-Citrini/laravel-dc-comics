@extends('layouts.app')

@section('content')

<h3 class="text-center py-3">Tabella fumetti</h3>

<table class="table table-striped">
    <thead>
        <tr>
          <th scope="col">Titolo</th>
          <th scope="col">Descrizione</th>
          <th scope="col">Serie</th>
          <th scope="col">Tipologia</th>
          <th scope="col">Data di vendita</th>
          <th scope="col">Prezzo</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic)
            <tr>
                <td>{{$comic->title}}</td>
                <td>{{Str::limit($comic->description, 60)}}</td>
                <td>{{$comic->serie}}</td>
                <td>{{$comic->type}}</td>
                <td>{{date('d-m-Y', strtotime($comic->sale_date))}}</td>
                <td>€ {{number_format($comic->price, 2, ',')}}</td>
            </tr>
        @endforeach
      </tbody>
</table>

    
@endsection