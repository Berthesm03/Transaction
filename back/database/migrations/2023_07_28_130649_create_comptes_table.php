<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('solde');
            $table->string('num_compte');
            $table->enum('fournisseur', ['om', 'wv', 'wr', 'cb']);
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade');        
        });
    }

    public function down()
    {
        Schema::dropIfExists('comptes');
    }
}
