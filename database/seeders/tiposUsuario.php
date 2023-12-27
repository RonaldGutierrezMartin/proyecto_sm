<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tiposUsuario extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tiposusuario")->insert([
            "nombre" => "Admin",
            "created_at" => now()
        ]);
        DB::table("tiposusuario")->insert([
            "nombre" => "Empresa",
            "created_at" => now()
        ]);
        DB::table("tiposusuario")->insert([
            "nombre" => "Particular",
            "created_at" => now()
        ]);
    }
}
