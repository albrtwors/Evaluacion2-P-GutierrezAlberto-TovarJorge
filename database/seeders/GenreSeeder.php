<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
            DB::table('genres')->insert([
                [
                    'name' => 'Alternative',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Rock',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Bossa Nova',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Jazz',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Merengue',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),  
                ],
                [
                    'name' => 'Disco',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Prog',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [ 
                    'name' => 'Baiao',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Classical',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
               
    ]);
    }
   
}
