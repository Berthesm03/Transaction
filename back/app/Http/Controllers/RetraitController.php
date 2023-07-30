<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class RetraitController extends Controller
{
    public function effectuerRetrait(Request $request)
    {
        $fournisseur = $request->input('fournisseur');
        $client_id = $request->input('client_id');
        // Supposons que vous avez également les informations sur le montant du retrait et le compte bénéficiaire dans la requête.
        $montantRetrait = $request->input('montant_retrait');
        $compteBeneficiaireId = $request->input('compte_beneficiaire_id');

        // ... Effectuez les vérifications nécessaires sur le montant du retrait, le compte bénéficiaire, etc.

        // Enregistrez le retrait dans la table "transactions"
        $transaction = Transaction::create([
            'fournisseur' => $fournisseur,
            'montant' => $montantRetrait,
            'type_transac' => 'retrait',
            'code' => '', // Vous pouvez laisser vide ou assigner un code si nécessaire.
            'compte_origine_id' => null, // Vous pouvez laisser null pour un retrait sans compte d'origine.
            'compte_destinataire_id' => $compteBeneficiaireId,
            'client_id' => $client_id,
        ]);

        // Mettez à jour le solde du compte bénéficiaire, si nécessaire.

        // ... Autres actions à effectuer pour le retrait ...

        // Retournez la réponse JSON avec les détails du retrait
        return response()->json([
            'message' => 'Retrait d\'argent effectué avec succès!',
            'montant_retrait' => $montantRetrait,
            'fournisseur' => $fournisseur,
            // ... Autres informations à renvoyer ...
        ]);
    }

    // ... Autres méthodes du contrôleur ...
}

