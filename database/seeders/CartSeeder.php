<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Sample data to be inserted
       $carts = [
        ['products' => 'toys,vegetables,fruits'],
        ['products' => 'electronics,clothing,books'],
        ['products' => 'furniture,grocery,stationery'],
        ['products' => 'appliances,tools,hardware'],
        ['products' => 'cosmetics,skincare,fragrance'],
        ['products' => 'footwear,accessories,jewelry'],
        ['products' => 'pets,supplies,toys'],
        ['products' => 'outdoor,sporting,fitness'],
        ['products' => 'automotive,parts,tools'],
        ['products' => 'cleaning,laundry,household'],
    ];

     // Insert each record into the 'carts' table
     foreach ($carts as $cart) {
        DB::table('carts')->insert($cart);
    }

    }
}
