@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Liste des habitants</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>CIN</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Ville</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($habitants as $habitant)
                            <tr>
                                <td>{{ $habitant->cin }}</td>
                                <td>{{ $habitant->nom }}</td>
                                <td>{{ $habitant->prenom }}</td>
                                <td>{{ $habitant->ville->ville }}</td>
                                <td>
                                    <a href="{{ route('habitants.edit', $habitant->id) }}" class="btn btn-primary">Editer</a>
                                    <form action="{{ route('habitants.destroy', $habitant->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('habitants.create') }}" class="btn btn-success">Ajouter un habitant</a>
            </div>
        </div>
    </div>
@endsection
