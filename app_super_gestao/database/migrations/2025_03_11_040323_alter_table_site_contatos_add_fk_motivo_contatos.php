<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //? Adicionando a coluna motivo_contatos_id
        Schema::table("site_contatos", function (Blueprint $table) {
            $table->unsignedBigInteger("motivo_contatos_id");
        });


        //? Executar uma query SQL
        //* atribuindo motivo_contato para a nova coluna motivo_contato_id
        DB::statement("UPDATE site_contatos SET motivo_contatos_id = motivo_contato");

        //? criando FK && remover a coluna motivo_contato
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
            $table->dropColumn('motivo_contato');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        //? Criar a coluna motivo_contato e removendo FK
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->integer('motivo_contato');
            $table->dropForeign('site_contatos_motivo_contatos_id_foreign');
        });

        //? Executar uma query SQL ( invertendo )
        //* atribuindo motivo_contato_id para a nova coluna motivo_contato
        DB::statement("UPDATE site_contatos SET motivo_contatos = motivo_contato_id");

        //? Remover a coluna motivo_contatos_id
        Schema::table("site_contatos", function (Blueprint $table) {
            $table->dropColumn("motivo_contatos_id");
        });


    }
};
