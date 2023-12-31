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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("type_id");
            $table->string("name");
            $table->string("lastName1");
            $table->string("lastName2")->nullable();
            $table->string("email")->unique();
            $table->string("password");
            $table->timestamps();

            /* $table->foreign("type_id")->references("id")->on("usertype"); */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
