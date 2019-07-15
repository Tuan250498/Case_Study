<?php

use App\Types_product;
use Illuminate\Database\Seeder;

class Types_productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types_product = new Types_product();
        $types_product->id = 1;
        $types_product->name = 'Iphone';
        $types_product->save();

        $types_product = new Types_product();
        $types_product->id = 2;
        $types_product->name = 'Samsung';
        $types_product->save();

        $types_product = new Types_product();
        $types_product->id = 3;
        $types_product->name = 'OPPO';
        $types_product->save();

        $types_product = new Types_product();
        $types_product->id = 4;
        $types_product->name = 'Nokia';
        $types_product->save();
    }
}
