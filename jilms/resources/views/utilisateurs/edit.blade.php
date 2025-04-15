@extends('layout')

@section('content')
    <div style="max-width: 500px; margin: auto; background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1); margin-top: 50px; font-family: sans-serif;">
        <h2 style="text-align: center; color: #333;">Modifier l'utilisateur</h2>

        <form action="{{ route('utilisateurs.update', $utilisateur->id) }}" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
            @csrf
            @method('PUT')

            <input type="text" name="nom" value="{{ $utilisateur->nom }}" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">

            <input type="text" name="prenom" value="{{ $utilisateur->prenom }}" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">

            <input type="email" name="email" value="{{ $utilisateur->email }}" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">

            <input type="text" name="role" value="{{ $utilisateur->role }}" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">

            <input type="password" name="mot_de_passe" placeholder="Nouveau mot de passe (laisser vide pour ne pas changer)" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">

            <button type="submit" style="padding: 12px; background-color: #28a745; color: white; border: none; border-radius: 5px; font-weight: bold; cursor: pointer;">
                Mettre à jour
            </button>
        </form>
        <div style="margin-top: 20px; text-align: center;">
            <a href="{{ route('utilisateurs.index') }}" style="color: #0044cc; text-decoration: none; font-weight: bold;">
                ← Retour à la liste des utilisateurs
            </a>
        </div>
    </div>
@endsection

