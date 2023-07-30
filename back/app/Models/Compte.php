<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable = ['solde', 'num_compte', 'fournisseur', 'client_id'];
}
