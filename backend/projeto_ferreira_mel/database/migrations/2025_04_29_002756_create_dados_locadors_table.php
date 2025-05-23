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
        Schema::create('dados_locadors', function (Blueprint $table) {
            $table->id('dl_cod');
            $table->integer('dl_valor');
            $table->integer('dl_valor_comprometido');
            $table->timestamp('dl_data_entrada')->useCurrent();
            $table->time('dl_hora_entrada');
            $table->timestamp('dl_data_saida')->nullable();
            $table->time('dl_hora_saida');
            $table->string('dl_token');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dados_locadors');
    }
};
