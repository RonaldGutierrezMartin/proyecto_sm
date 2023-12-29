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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_tipo");
            $table->string("nombre");
            $table->string("primerApellido");
            $table->string("segundoApellido")->nullable();
            $table->string("email")->unique();
            $table->string("password");
            $table->timestamps();

            $table->foreign("id_tipo")->references("id")->on("tiposusuario");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
