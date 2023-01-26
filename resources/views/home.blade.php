@extends("layouts.app")

@section('content')

<h3 class="text-center">Scopri tutti i nostri fumetti</h3>

<div class="row py-3 g-3">

    @foreach ($comics as $comic)
        <div class="col-2">
            <div class="card" style="height: 15rem">
                <div class="ratio ratio-4x3 img-container" >
                    <img src="{{$comic->thumb}}" class="img-fluid">
                </div>
                
                <div class="card-body">
                  <a class="card-title" href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a>
                </div>
            </div>
        </div>   
    @endforeach
</div>

<a class="btn btn-primary my-4" href="{{route('comics.index')}}">Tabella Fumetti</a>
    
@endsection