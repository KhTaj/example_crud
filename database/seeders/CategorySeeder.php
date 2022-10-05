<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // echo "Tajuddin is calling database seeder run method.";
        DB::table('categories')->insert([
            'name'=>'Fashion',
            'is_active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
        Category::create([
            'name'=> 'Men',
            'is_active'=>true
        ]);
        Category::create([
            'name'=> 'Lifestyle',
            'is_active'=>true
        ]);
    }
}
