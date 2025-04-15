<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;


class UtilisateurController extends Controller
{
    public function index() {
        $utilisateurs = Utilisateur::all();
        return view('utilisateurs.index', compact('utilisateurs'));
    }

    public function create() {
        return view('utilisateurs.create');
    }

    public function store(Request $request) {
        $request->validate([
           
            'nom' => 'required',
            'prenom'=> 'required',
            'email' => 'required|email|unique:utilisateurs',
            'role' => 'required',
            'mot_de_passe' => 'required',
        ]);

        Utilisateur::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'role' => $request->role,
            'mot_de_passe' => bcrypt($request->mot_de_passe),
        ]);

        return redirect()->route('utilisateurs.index');
    }

    public function edit($id) {
        $utilisateur = Utilisateur::findOrFail($id);
        return view('utilisateurs.edit', compact('utilisateur'));
    }

    public function update(Request $request, $id) {
        $utilisateur = Utilisateur::findOrFail($id);
        $utilisateur->update($request->all());
        return redirect()->route('utilisateurs.index');
    }

    public function destroy($id) {
        Utilisateur::destroy($id);
        return redirect()->route('utilisateurs.index');
    }
}
