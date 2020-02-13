<?php

use App\Setting;
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
        Setting::create([
            'app_name' => 'My personal site',
            'app_description' => 'stay hungry, stay creative',
            'admin_email' => 'admin@mail.com',
            'company_email' => 'company@mail.com',
            'company_address' => 'Somewhere in earth',
            'company_phone' => '+0',
            'facebook_link' => '',
            'instagram_link' => '',
        ]);
    }
}
