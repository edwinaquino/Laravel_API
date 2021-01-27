<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tareas')->insert([
            'tot;e' => Str::random(10),
            'description' => Str::random(10).'@gmail.com',
            'done' => random_int(0,1),
        ]);
    }
}
