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
        Schema::create('tb_produtos', function (Blueprint $table) {
            $table->id('sr_id');
            $table->string('name')->nullable(false);
            $table->integer('valor_produto')->nullable(false);
            $table->text('descricao_produto')->nullable();
            $table->boolean('bl_produto_verificado');
            $table->float('peso_produto', 8, 2)->nullable();
            $table->integer('estoque_maximo')->default(100);
            $table->integer('estoque_minimo')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
