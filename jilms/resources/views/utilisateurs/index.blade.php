@extends('layout')

@section('content')
    <div style="max-width: 1000px; margin: auto; padding: 30px; font-family: sans-serif;">
        <h2 style="text-align: center; color: #333;">Liste des Utilisateurs</h2>
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <!-- Bouton Ajouter -->
   
    <!-- Formulaire de recherche -->
    <form action="{{ route('utilisateurs.index') }}" method="GET" style="display: flex; gap: 10px;">
        <input type="text" name="search" placeholder="Rechercher..." value="{{ request('search') }}"
               style="padding: 8px 12px; border: 1px solid #ccc; border-radius: 5px; width: 200px;">
        <button type="submit" style="padding: 8px 16px; background-color: #28a745; color: white; border: none; border-radius: 5px;">
            Rechercher
        </button>
    </form>
</div>


        <div style="text-align: right; margin-bottom: 20px;">
            <a href="{{ route('utilisateurs.create') }}" style="padding: 10px 20px; background-color: #0044cc; color: white; text-decoration: none; border-radius: 5px;">+ Ajouter un utilisateur</a>
        </div>

        <table style="width: 100%; border-collapse: collapse; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            <thead style="background-color: #f2f2f2;">
                <tr>
                    <th style="padding: 12px; border: 1px solid #ddd;">ID</th>
                    <th style="padding: 12px; border: 1px solid #ddd;">Nom</th>
                    <th style="padding: 12px; border: 1px solid #ddd;">Prénom</th>
                    <th style="padding: 12px; border: 1px solid #ddd;">Email</th>
                    <th style="padding: 12px; border: 1px solid #ddd;">Rôle</th>
                    <th style="padding: 12px; border: 1px solid #ddd;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($utilisateurs as $user)
                    <tr>
                        <td style="padding: 12px; border: 1px solid #ddd;">{{ $user->id }}</td>
                        <td style="padding: 12px; border: 1px solid #ddd;">{{ $user->nom }}</td>
                        <td style="padding: 12px; border: 1px solid #ddd;">{{ $user->prenom }}</td>
                        <td style="padding: 12px; border: 1px solid #ddd;">{{ $user->email }}</td>
                        <td style="padding: 12px; border: 1px solid #ddd;">{{ $user->role }}</td>
                        <td style="padding: 12px; border: 1px solid #ddd;">
                            <a href="{{ route('utilisateurs.edit', $user->id) }}" style="padding: 6px 12px; background-color: #ffc107; color: white; border-radius: 4px; text-decoration: none; margin-right: 5px;">Modifier</a>
                            <form action="{{ route('utilisateurs.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Supprimer cet utilisateur ?')" style="padding: 6px 12px; background-color: #dc3545; color: white; border: none; border-radius: 4px;">Supprimer</button>
                            </form>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection



