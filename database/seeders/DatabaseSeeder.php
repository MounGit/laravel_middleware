<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Role;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('roles')->insert([
            ["name" => "admin"],
            ["name" => "webmaster"],
            ["name" => "visiteur"]
        ]);

        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@mail.com',
            'password' => Hash::make('testtest'),
            'role_id' => 1,
            'created_at' => now()
        ]);

        Article::factory(5)->create();
        
    }
}
