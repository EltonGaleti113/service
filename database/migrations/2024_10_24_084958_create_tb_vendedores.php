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
        Schema::create('tb_vendedores', function (Blueprint $table) {
            $table->id('sr_id');
            $table->string('vc_name', 100)->nullable(false);
            $table->string('vc_cpf', 12)->nullable();
            $table->integer('idade')->nullable();
            //table-> loja
            //table-> setor da loja
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_vendedores');
    }
};
