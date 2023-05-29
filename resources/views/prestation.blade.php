@extends('layout.layouthf')

@section('content')


<!DOCTYPE html>
<link rel="stylesheet" href="{{ asset('css/prestation.css') }}">
<html>

<head>
    <title>Prestations</title>
</head>

<body>
    <h1>Nos prestations</h1>
    <div class="main">
        <img src="{{ asset('image/photo0.png') }}" alt="Logo">
        <p>Beauté des mains</p>
        <a class="link" href="{{ url('/prestations/mains') }}">Voir plus</a>
    </div>
    <div class="pied">
        <img src="{{ asset('image/photo0.png') }}" alt="Logo">
        <p>Beauté des pieds</p>
        <a class="link" href="{{ url('/prestations/pieds') }}">Voir plus</a>
    </div>

</body>

</html>
@endsection