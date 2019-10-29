<?php

use Illuminate\Database\Seeder;
use App\NewsCategory;

class NewsCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NewsCategory::whereNotNull('id')->delete();
        NewsCategory::create([
            'name' => 'Politik'
        ]);
        NewsCategory::create([
            'name' => 'Sosial'
        ]);
        NewsCategory::create([
            'name' => 'Ekonomi'
        ]);
        NewsCategory::create([
            'name' => 'Hukum'
        ]);
        NewsCategory::create([
            'name' => 'Olahraga'
        ]);
    }
}
