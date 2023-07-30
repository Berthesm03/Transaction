<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compte;

class CompteController extends Controller
{
    public function index()
    {
        $comptes = Compte::all();
        return response()->json($comptes);
    }

    public function show($id)
    {
        $compte = Compte::find($id);

        if (!$compte) {
            return response()->json(['error' => 'Compte introuvable.'], 404);
        }

        return response()->json($compte);
    }

    public function store(Request $request)
    {
        $request->validate([
            'solde' => 'required|numeric|min:0',
            // Ajoutez d'autres règles de validation pour vos champs ici
        ]);

        $compte = new Compte();
        $compte->solde = $request->input('solde');
        // Renseignez les autres champs du compte ici si nécessaire
        $compte->save();

        return response()->json(['message' => 'Compte créé avec succès !']);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'solde' => 'required|numeric|min:0',
            // Ajoutez d'autres règles de validation pour vos champs ici
        ]);

        $compte = Compte::find($id);

        if (!$compte) {
            return response()->json(['error' => 'Compte introuvable.'], 404);
        }

        $compte->solde = $request->input('solde');
        // Mettez à jour les autres champs du compte ici si nécessaire
        $compte->save();

        return response()->json(['message' => 'Compte mis à jour avec succès !']);
    }

    public function destroy($id)
    {
        $compte = Compte::find($id);

        if (!$compte) {
            return response()->json(['error' => 'Compte introuvable.'], 404);
        }

        $compte->delete();

        return response()->json(['message' => 'Compte supprimé avec succès !']);
    }
}
