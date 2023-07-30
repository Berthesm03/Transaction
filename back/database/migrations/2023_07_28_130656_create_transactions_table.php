<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('montant');
            $table->enum('type_transac', ['depot', 'retrait', 'C_by_C']);
            $table->string('code');
            $table->foreignId('compte_origine_id')->constrained('comptes')->onDelete('cascade');
            $table->foreignId('compte_destinataire_id')->nullable()->constrained('comptes')->onDelete('cascade');
            $table->foreignId('client_id')->default(0)->change();
            });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
