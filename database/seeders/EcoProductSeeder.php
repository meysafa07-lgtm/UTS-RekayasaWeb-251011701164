<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EcoProduct;

class EcoProductSeeder extends Seeder
{
    public function run(): void
    {
        EcoProduct::truncate();
        EcoProduct::insert([
            [
                'name' => 'Bamboo Water Bottle',
                'material' => 'Bamboo & Stainless Steel',
                'price' => 150000,
                'eco_rating' => 'A+',
                'image' => 'bamboo.jpg',
                'description' => 'Botol minum ramah lingkungan dari bambu asli.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Recycled Tote Bag',
                'material' => 'Recycled Cotton',
                'price' => 75000,
                'eco_rating' => 'A',
                'image' => 'tote.jpg',
                'description' => 'Tas belanja dari katun daur ulang.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Wooden Toothbrush',
                'material' => 'Bamboo Wood',
                'price' => 25000,
                'eco_rating' => 'A+',
                'image' => 'toothbrush.jpg',
                'description' => 'Sikat gigi kayu bambu biodegradable.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Stainless Straw Set',
                'material' => 'Stainless Steel',
                'price' => 35000,
                'eco_rating' => 'A+',
                'image' => 'straw.jpg',
                'description' => 'Sedotan stainless anti karat.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Organic Cotton Shirt',
                'material' => 'Organic Cotton',
                'price' => 120000,
                'eco_rating' => 'A',
                'image' => 'shirt.jpg',
                'description' => 'Kaos katun organik tanpa pestisida.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Beeswax Food Wrap',
                'material' => 'Beeswax & Cotton',
                'price' => 50000,
                'eco_rating' => 'A+',
                'image' => 'wrap.jpg',
                'description' => 'Pembungkus makanan pengganti plastik.',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}