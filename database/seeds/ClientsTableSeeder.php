<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Client', 10)->create()->each(function ($client){
            $phone = factory('App\Phone')->make();
            $phone->client_id = $client->id;
            $phone->save();
        });
    }
}
