<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compte; // Assurez-vous d'importer le modèle Compte

class DepotController extends Controller
{
    public function effectuerDepot(Request $request)
    {
        // Valider les données reçues dans la requête
        $request->validate([
            'solde' => 'required|integer',
            'num_compte' => 'required|string',
            'fournisseur' => 'required|in:om,wv,wr,cb',
            'client_id' => 'required|exists:clients,id',
        ]);

        // Créer le dépôt dans la table "comptes"
        $compte = Compte::create([
            'solde' => $request->solde,
            'num_compte' => $request->num_compte,
            'fournisseur' => $request->fournisseur,
            'client_id' => $request->client_id,
        ]);

        // Retourner une réponse avec le dépôt créé
        return response()->json(['message' => 'Dépôt effectué avec succès', 'data' => $compte], 201);
    }
}
