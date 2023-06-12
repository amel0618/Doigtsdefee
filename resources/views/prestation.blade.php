@extends('layout.layouthf')
@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('content')


<!DOCTYPE html>
<link rel="stylesheet" href="{{ asset('css/prestation.css') }}">
<html>

<head>
    <title>Prestations</title>
</head>

<body>
    <h1>Nos prestations</h1>
    @if(auth()->check() && auth()->user()->hasRole('admin'))
        <div class="admin-link">
            <a class="link" href="{{ route('admin.prestation.index') }}">Admin: Gestion des prestations</a>
        </div>
    @endif
    <div class="presta-main">
        <img src="{{ asset('image/photo0.png') }}" alt="Logo">
        <p>Beauté des mains</p>
        <a class="link" href="{{ route('prestation-mains') }}">Voir plus</a>
    </div>
    <div class="presta-pied">
        <img src="{{ asset('image/photo0.png') }}" alt="Logo">
        <p>Beauté des pieds</p>
        <a class="link" href="{{ route('prestation-pieds') }}">Voir plus</a>
    </div>

</body>

</html>
@endsection
