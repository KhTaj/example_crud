<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // echo "Tajuddin is calling database seeder run method.";
        // DB::table('categories')->insert([
        //     'name'=>'Men',
        //     'is_active' => true
        // ]);
        Category::create([
            'name'=> 'Woman',
            'is_active'=>true
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
