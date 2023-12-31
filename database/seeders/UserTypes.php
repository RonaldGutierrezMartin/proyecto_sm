<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("usertypes")->insert([
            "name" => "Admin",
            "created_at" => now()
        ]);
        DB::table("usertypes")->insert([
            "name" => "Empresa",
            "created_at" => now()
        ]);
        DB::table("usertypes")->insert([
            "name" => "Particular",
            "created_at" => now()
        ]);
    }
}
