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
        Schema::create('produto_detalhes', function (Blueprint $table) {


            $table->id();
            //? estabelecer relacionamento 1:1
            //* chave primária/chave estrangeira
            $table->unsignedBigInteger("produto_id"); //! tem que ser mesmo tipo da chave primária
            $table->float("comprimento", 8, 2);
            $table->float("largura", 8, 2);
            $table->float("altura", 8, 2);

            $table->timestamps();

            //! Constraint
            $table->foreign("produto_id")->references("id")->on("produtos");
            $table->unique("produto_id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto_detalhes');
    }
};
