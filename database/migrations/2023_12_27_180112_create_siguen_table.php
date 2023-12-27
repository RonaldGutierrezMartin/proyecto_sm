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
        Schema::create('siguen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_seguidor");
            $table->unsignedBigInteger("id_seguido");
            $table->timestamps();

            $table->foreign("id_seguidor")->references("id")->on("usuarios");
            $table->foreign("id_seguido")->references("id")->on("usuarios");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siguen');
    }
};
