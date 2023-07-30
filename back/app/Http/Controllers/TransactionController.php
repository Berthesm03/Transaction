<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction; // Assurez-vous d'importer le modèle Transaction

class TransactionController extends Controller
{
    public function faireDepot(Request $request)
    {
        // Valider les données reçues dans la requête
        $request->validate([
            'montant' => 'required|integer',
            'code' => 'nullable|string',
            'compte_origine_id' => 'required|exists:comptes,id',
            'client_id' => 'required|exists:clients,id',
        ]);

        // Créer le dépôt dans la table "transactions"
        $transaction = Transaction::create([
            'montant' => $request->montant,
            'type_transac' => 'depot',
            'code' => $request->code,
            'compte_origine_id' => $request->compte_origine_id,
            'client_id' => $request->client_id,
        ]);

        // Retourner une réponse avec la transaction de dépôt créée
        return response()->json(['message' => 'Dépôt effectué avec succès', 'data' => $transaction], 201);
    }
}
