<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['montant', 'type_transac', 'code', 'compte_origine_id', 'compte_destinataire_id', 'client_id'];
}
