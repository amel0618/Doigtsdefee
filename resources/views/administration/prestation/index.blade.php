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
<a href="{{ route('admin.prestation.create') }}" class="btn btn-primary">Créer une nouvelle prestation</a>

    <!-- Display the Prestations -->
    @if ($prestationsmain->count())
        <!-- Add button to create a new prestation -->

        <!-- Table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Catégories</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <h2>Liste des prestations des mains</h2>
                @foreach ($prestationsmain as $prestationmain)
                <tr>
                    <td>{{ $prestationmain->categorie->nom }}</td>
                    <td>{{ $prestationmain->nom }}</td>
                    <td>{{ $prestationmain->description }}</td>
                    <td>{{ $prestationmain->prix }}</td>

                    <td>
                        <!-- Add edit and delete buttons -->
                        @if(Auth::check() && Auth::user()->hasRole('admin'))
                            <a href="{{ route('admin.prestation.edit', $prestationmain->id) }}" class="btn btn-primary">Modifier</a>
                            <form action="{{ route('admin.prestation.destroy', $prestationmain->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    @if ($prestationspied->count())

        <!-- Table -->
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Catégories</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <h2>Liste des prestations des pieds</h2>
            @foreach ($prestationspied as $prestationpied)
                <tr>
                    <td>{{ $prestationpied->categorie->nom }}</td>
                    <td>{{ $prestationpied->nom }}</td>
                    <td>{{ $prestationpied->description }}</td>
                    <td>{{ $prestationpied->prix }}</td>

                    <td>
                        <!-- Add edit and delete buttons -->
                        @if(Auth::check() && Auth::user()->hasRole('admin'))
                            <a href="{{ route('admin.prestation.edit', $prestationpied->id) }}" class="btn btn-primary">Modifier</a>
                            <form action="{{ route('admin.prestation.destroy', $prestationpied->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif


</body>

</html>
@endsection
