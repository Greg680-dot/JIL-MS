@extends('layout')

@section('content')
    <div style="
        max-width: 600px; 
        margin: 60px auto; 
        background: linear-gradient(to right, #f9f9f9, #ffffff); 
        padding: 40px; 
        border-radius: 15px; 
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1); 
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    ">
        <h2 style="
            text-align: center; 
            color: #222; 
            margin-bottom: 30px;
        ">Ajouter un utilisateur</h2>

        <form action="{{ route('utilisateurs.store') }}" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
            @csrf

            <div style="display: flex; flex-direction: column;">
                <label for="nom" style="margin-bottom: 5px; font-weight: bold;">Nom</label>
                <input type="text" name="nom" id="nom" placeholder="Nom" required 
                    style="padding: 12px; border: 1px solid #ccc; border-radius: 8px; transition: all 0.3s;">
            </div>

            <div style="display: flex; flex-direction: column;">
                <label for="prenom" style="margin-bottom: 5px; font-weight: bold;">Prénom</label>
                <input type="text" name="prenom" id="prenom" placeholder="Prénom" required 
                    style="padding: 12px; border: 1px solid #ccc; border-radius: 8px; transition: all 0.3s;">
            </div>

            <div style="display: flex; flex-direction: column;">
                <label for="email" style="margin-bottom: 5px; font-weight: bold;">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" required 
                    style="padding: 12px; border: 1px solid #ccc; border-radius: 8px; transition: all 0.3s;">
            </div>

            <div style="display: flex; flex-direction: column;">
                <label for="role" style="margin-bottom: 5px; font-weight: bold;">Rôle</label>
                <select name="role" id="role" required 
                    style="padding: 12px; border: 1px solid #ccc; border-radius: 8px; background-color: white;">
                    <option value="">-- Sélectionner un rôle --</option>
                    <option value="Partenaire">Partenaire</option>
                    <option value="Employé">Employé</option>
                    <option value="Admin">Admin</option>
                </select>
            </div>

            <div style="display: flex; flex-direction: column;">
                <label for="mot_de_passe" style="margin-bottom: 5px; font-weight: bold;">Mot de passe</label>
                <input type="password" name="mot_de_passe" id="mot_de_passe" placeholder="Mot de passe" required 
                    style="padding: 12px; border: 1px solid #ccc; border-radius: 8px; transition: all 0.3s;">
            </div>

            <button type="submit" 
                style="
                    padding: 14px; 
                    background-color: #0044cc; 
                    color: white; 
                    border: none; 
                    border-radius: 8px; 
                    font-weight: bold; 
                    cursor: pointer;
                    transition: background-color 0.3s;
                "
                onmouseover="this.style.backgroundColor='#0033aa';"
                onmouseout="this.style.backgroundColor='#0044cc';">
                Ajouter l'utilisateur
            </button>
        </form>

        <div style="margin-top: 25px; text-align: center;">
            <a href="{{ route('utilisateurs.index') }}" 
                style="color: #0044cc; text-decoration: none; font-weight: bold;">
                ← Retour à la liste des utilisateurs
            </a>
        </div>
    </div>
@endsection
