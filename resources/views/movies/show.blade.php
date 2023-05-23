@extends('layout.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col text-center my-5">

                          <h1 class="text-white">Descrizione</h1>
                        <img src="{{ $movie->image }}" class="img-f mt-5" alt="...">

                        <p class="text-white">Titolo: {{ $movie->title }}</p>
                        <p class="text-white">Titolo Originale: {{$movie->original_title }}</p>
                        <p class="text-white">Nazionalità: {{$movie->nationality }}</p>
                        <p class="text-white">Data Uscita: {{$movie->date }}</p>
                        <p class="text-white">voto: {{$movie->vote }}</p>

                        <a class="btn btn-primary fs-6" href="{{route('home')}}" role="button">Torna alla home</a>


                </div>
            </div>
        </div>

@endsection
