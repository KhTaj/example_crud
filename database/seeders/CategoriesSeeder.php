<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
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
            'name'=>'Men',
            'is_active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
        Category::create([
            'name'=> 'Woman',
            'is_active'=>true
        ]);
    }
}
