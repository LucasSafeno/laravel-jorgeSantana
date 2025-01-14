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
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string("unidade", 5); // cm - ml- kg
            $table->string("descricao", 30);
            $table->timestamps();

            //* adicionar relacionamento com a tabela produtos
            Schema::table("produtos", function (Blueprint $table) {});
            $table->unsignedBigInteger("unidade_id");

            //? Constraint
            $table->foreign("unidade_id")->references("id")->on("unidades");


            //* adicionar relacionamento com a tabela produto_detalhes
            Schema::table("produto_detalhes", function (Blueprint $table) {
                $table->unsignedBigInteger("unidade_id");

                $table->foreign("unidade_id")->references("id")->on("produto_detalhes");
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //* remover relacionamento com a tabela produtos_detalhes
        Schema::table("produtos_detalhes", function (Blueprint $table) {
            //! remover fk
            $table->dropForeign("produtos_detalhes_unidade_foreign"); // [table]_[coluna]_forign
            //! remover coluna
            $table->dropColumn("unidade_id");
        });

        //* remover relacionamento com a tabela produtos
        Schema::table("produtos", function (Blueprint $table) {
            //! remover fk
            $table->dropForeign("produtos_unidade_foreign"); // [table]_[coluna]_forign
            //! remover coluna
            $table->dropColumn("unidade_id");
        });


        Schema::dropIfExists('unidades');
    }
};
