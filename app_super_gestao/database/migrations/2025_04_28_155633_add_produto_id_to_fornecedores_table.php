<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('fornecedores', function (Blueprint $table) {
            Schema::table('fornecedores', function (Blueprint $table) {
                $table->unsignedBigInteger('produto_id')->nullable(); // Adiciona a coluna como bigint
                $table->foreign('produto_id')->references('id')->on('produtos'); // Define a chave estrangeira
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->dropForeign(['produto_id']); // Remove a chave estrangeira
            $table->dropColumn('produto_id');    // Remove a coluna
        });
    }
};
