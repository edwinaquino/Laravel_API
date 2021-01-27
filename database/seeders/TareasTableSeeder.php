<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class TareasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++) { 
            
            DB::table('tareas')->insert([
                'title' => Str::random(10),
                'description' => 'Exercitation cillum adipisicing qui laborum fugiat. Dolore dolore est minim excepteur dolore consequat irure anim. Anim reprehenderit esse amet velit. In ut ipsum occaecat velit.',
                'done' => random_int(0,1),
            ]);
        }
    }
}
