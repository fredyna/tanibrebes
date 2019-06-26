<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_us')->delete();
        DB::table('about_us')->insert([
            [
                'id'            => 1,
                'name'          => 'Tani Brebes',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'address'       => 'Jl. Halmahera No.KM. 01, Mintaragen, Kec. Tegal Tim., Kota Tegal, Jawa Tengah 52121',
                'phone'         => '+62 856 4025 1605',
                'email'         => 'admin@gmail.com',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ]
        ]);
    }
}
