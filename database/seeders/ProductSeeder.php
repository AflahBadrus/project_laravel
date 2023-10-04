<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=>'Iphone 14 Pro Max',
            'code'=>'65238',
            'price'=>22500999
        ]);
        Product::create([
            'name'=>'Mie Sedap',
            'code'=>'12638',
            'price'=>3000
        ]);
        Product::create([
            'name'=>'Blue Band Margarine 250G',
            'code'=>'85739',
            'price'=>14700
        ]);
        Product::create([
            'name'=>'Chocolate 90G',
            'code'=>'35901',
            'price'=>4400
        ]);
        Product::create([
            'name'=>'Crispy Seaweed Original 20G',
            'code'=>'34587',
            'price'=>11500
        ]);
    }
}
