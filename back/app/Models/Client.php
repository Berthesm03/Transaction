<?php

// app/Models/Client.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    // Relation avec le modèle Transaction
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'client_id', 'id');
    }

    // Autres attributs et méthodes du modèle Client...
}
