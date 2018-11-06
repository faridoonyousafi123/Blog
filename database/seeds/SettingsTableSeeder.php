<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::create([

            'site_name'=>'Faridoon Blog',
            'site_address'=>'Kabul Afghanistan',
            'site_email'=>'yousafi@netlinks.ws',
            'site_contact'=>'0798653215'
        ]);
    						

    }
}
