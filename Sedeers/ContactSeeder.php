<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'first_name' => 'Shofiyun',
            'last_name' => 'Nawal',
            'email' => 'shofiyunnawal@gmail.com',
            'phone' => '08912345',
        ]);

    }
}
