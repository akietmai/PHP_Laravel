<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            'name_customer' => Str::random(10),
            'phone_customer' => Str::random(10),
            'address_customer' => Str::random(10),
            'email_customer' => Str::random(10) . '@gmail.com',
            'city_customer' => Str::random(10),
        ]);
    }
}
