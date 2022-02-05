<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create user data with faker
        $faker = Faker::create('id_ID');
        //looping to create 10 data user
        for ($i=1; $i <= 10 ; $i++) {
            DB::table('users')->insert([
                'id'    => $i,
                'name'  => $faker->name,
                'email' => $faker->email,
                'created_at'    => date("Y-m-d H:i:s"),
                'updated_at'    => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
