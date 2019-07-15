<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->Name = 'Iphone 6';
        $product->types_product_id = 3;
        $product->Color = 'red';
        $product->Quantity = 10;
        $product->Price = 7000000;
        $product->Image = '';
        $product->Network = '';
        $product->Sim = '';
        $product->Memory = '';
        $product->Os = '';
        $product->CPU = '';
        $product->Camera = '';
        $product->SDcard = '';
        $product->Battery = '';
        $product->Bluetooth = '';
        $product->Talktime = '';
        $product->Waittime = '';
        $product->save();

        $product = new Product();
        $product->Name = 'Iphone 7';
        $product->types_product_id = 2;
        $product->Color = 'red';
        $product->Quantity = 11;
        $product->Price = 8000000;
        $product->Image = '';
        $product->Network = '';
        $product->Sim = '';
        $product->Memory = '';
        $product->Os = '';
        $product->CPU = '';
        $product->Camera = '';
        $product->SDcard = '';
        $product->Battery = '';
        $product->Bluetooth = '';
        $product->Talktime = '';
        $product->Waittime = '';
        $product->save();

        $product = new Product();
        $product->Name = 'Iphone 8';
        $product->types_product_id = 2;
        $product->Color = 'red';
        $product->Quantity = 12;
        $product->Price = 9000000;
        $product->Image = '';
        $product->Network = '';
        $product->Sim = '';
        $product->Memory = '';
        $product->Os = '';
        $product->CPU = '';
        $product->Camera = '';
        $product->SDcard = '';
        $product->Battery = '';
        $product->Bluetooth = '';
        $product->Talktime = '';
        $product->Waittime = '';
        $product->save();

        $product = new Product();
        $product->Name = 'Iphone 9';
        $product->types_product_id = 4;
        $product->Color = 'red';
        $product->Quantity = 13;
        $product->Price = 10000000;
        $product->Image = '';
        $product->Network = '';
        $product->Sim = '';
        $product->Memory = '';
        $product->Os = '';
        $product->CPU = '';
        $product->Camera = '';
        $product->SDcard = '';
        $product->Battery = '';
        $product->Bluetooth = '';
        $product->Talktime = '';
        $product->Waittime = '';
        $product->save();
    }
}
