@extends('layout.layouthf')
@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Modifier une prestation</title>
    <link rel="stylesheet" href="{{ asset('css/prestation.css') }}">
</head>
<body>
    <h1>Modifier la prestation</h1>

    <form method="POST" action="{{ route('admin.prestation.update', $prestation->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $prestation->nom }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ $prestation->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="number" class="form-control" id="prix" name="prix" value="{{ $prestation->prix }}" required>
        </div>

        <div class="form-group">
            <label for="temps">Temps</label>
            <input type="text" class="form-control" id="temps" name="temps" value="{{ $prestation->temps }}">
        </div>

        <div class="form-group">
            <label for="categorie">Types</label>
            <select class="form-control" id="type" name="type_id" required>
                <option value="">Sélectionnez un type de soin</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{ $prestation->type_id == $type->id ? 'selected' : '' }}>{{ $type->nom }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="categorie">Categorie</label>
            <select class="form-control" id="categorie" name="categorie_id" required>
                <option value="">Sélectionnez une catégorie</option>
                @foreach($categories as $categorie)
                    <option value="{{ $categorie->id }}" {{ $prestation->categorie_id == $categorie->id ? 'selected' : '' }}>{{ $categorie->nom }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>

</body>
</html>
@endsection
