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

    <p>Beauté des mains</p>
    <a class="link" href="{{ url('/prestations/mains') }}">Voir plus</a>
    

    <p>Beauté des pieds</p>
    <a class="link" href="{{ url('/prestations/pieds') }}">Voir plus</a>


</body>

</html>
@endsection