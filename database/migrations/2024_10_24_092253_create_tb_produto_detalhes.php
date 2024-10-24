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
        Schema::create('tb_produto_detalhes', function (Blueprint $table) {
            $table->id('sr_id');
            $table->unsignedBigInteger('produto_id');
            $table->decimal('fl_peso',8, 2);
            $table->string('str_altura', 10);
            $table->string('str_largura', 10);
            $table->timestamps();

            $table->foreign('produto_id')->references('sr_id')->on('tb_produtos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->unique('produto_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_produto_detalhes');
    }
};
