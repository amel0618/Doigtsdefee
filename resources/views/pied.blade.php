@extends('layout.layouthf')

@section('content')
    @foreach($categories as $categorie)
        <h2>{{ $categorie->nom }}</h2>
        <ul>
            @foreach($categorie->Prestations as $prestation)
                <li>{{ $prestation->nom }}</li>
                <li>{{ $prestation->description }}</li>
                <li>{{ $prestation->prix }}</li>
                <li>{{ $prestation->temps }}</li>
            @endforeach
        </ul>
    @endforeach
@endsection
