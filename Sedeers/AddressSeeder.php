<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'street' => 'Jl 123',
            'city' => 'Rembang',
            'province' => 'Jawa Tengah',
            'country' => 'Indonesia',
            'postal_code' => '12345',
            'contact_id' => 1,
        ]);

    }
}
