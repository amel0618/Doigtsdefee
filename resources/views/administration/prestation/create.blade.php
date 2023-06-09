@extends('layout.layouthf')
@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une prestation</title>
    <link rel="stylesheet" href="{{ asset('css/prestation.css') }}">
</head>
<body>
    <h1>Ajouter une nouvelle prestation</h1>

    <form method="POST" action="{{ route('admin.prestation.store') }}">
        @csrf

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de la prestation" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" placeholder="Description de la prestation" required></textarea>
        </div>

        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="number" class="form-control" id="prix" name="prix" placeholder="Prix de la prestation" required>
        </div>

        <div class="form-group">
            <label for="temps">Temps</label>
            <input type="text" class="form-control" id="temps" name="temps" placeholder="Temps nécessaire pour la prestation">
        </div>

        <div class="form-group">
            <label for="categorie">Type</label>
            <select class="form-control" id="types" name="type_id" required>
                <option value="">Sélectionnez une catégorie</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->nom }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="categorie">Categorie</label>
            <select class="form-control" id="categorie" name="categorie_id" required>
                <option value="">Sélectionnez une catégorie</option>
                @foreach($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

</body>
</html>
@endsection
