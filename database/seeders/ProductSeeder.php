<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Watch',
            'slug' => 'Watch',
            'image' => 'https://images.unsplash.com/photo-1542496658-e33a6d0d50f6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80',
            'price' => 200,
            'category_id'=>3,
            'user_id'=>1,
            
        ]);
        Product::create([
            'name' => 'Bag',
            'slug' => 'bag',
            'image' => 'https://images.unsplash.com/photo-1554342872-034a06541bad?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80',
            'price' => 100,
            'category_id'=>2,
            'user_id'=>1,
            
        ]);
        Product::create([
            'name' => 'perfume',
            'slug' => 'perfume',
            'image' => 'https://images.unsplash.com/photo-1523293182086-7651a899d37f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80',
            'price' => 150,
            'category_id'=>1,
            'user_id'=>2,
            
        ]);
        Product::create([
            'name' => 'coffee',
            'slug' => 'coffee',
            'image' => 'https://images.unsplash.com/photo-1568649929103-28ffbefaca1e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80',
            'price' => 100,
            'category_id'=>4,
            'user_id'=>2,
          
        ]);
    }
}
