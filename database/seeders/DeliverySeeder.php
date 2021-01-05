<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 20; $i++){
            DB::table('deliveries')->insert([
                'customer_name' => Str::random(4).' '.Str::random(6),
                'product_name' => Str::random(10).'@gmail.com',
                'address' => Str::random(30),
                'phone' => '01900000001',
                'email' => Str::random(10).'@gmail.com',
                'amount' => '100',
                'status' => 'unverified',
                'report' => 'pending',
            ]);
        }
    }
}
