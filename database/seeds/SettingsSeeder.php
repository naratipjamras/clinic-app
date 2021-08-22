<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('settings')->insert([
            'option_name' => 'system_name',
            'option_value' => 'CLINIC APP',
        ]);

         DB::table('settings')->insert([
            'option_name' => 'address',
            'option_value' => 'Chingmai',
        ]);

         DB::table('settings')->insert([
            'option_name' => 'phone',
            'option_value' => '0856159091',
        ]);

         DB::table('settings')->insert([
            'option_name' => 'hospital_email',
            'option_value' => 'mr.naratip.jamras@gmail.com',
        ]);

        DB::table('settings')->insert([
            'option_name' => 'currency',
            'option_value' => '฿',
        ]);

        DB::table('settings')->insert([
            'option_name' => 'vat',
            'option_value' => '7',
        ]);

        DB::table('settings')->insert([
            'option_name' => 'language',
            'option_value' => 'en',
        ]);

        DB::table('settings')->insert([
            'option_name' => 'appointment_interval',
            'option_value' => '30',
        ]);

        DB::table('settings')->insert([
            'option_name' => 'saturday_from',
            'option_value' => null,
        ]);
        DB::table('settings')->insert([
            'option_name' => 'saturday_to',
            'option_value' => null,
        ]);
        DB::table('settings')->insert([
            'option_name' => 'sunday_from',
            'option_value' => null,
        ]);
        DB::table('settings')->insert([
            'option_name' => 'sunday_to',
            'option_value' => null,
        ]);
        DB::table('settings')->insert([
            'option_name' => 'monday_from',
            'option_value' => '08:00',
        ]);
        DB::table('settings')->insert([
            'option_name' => 'monday_to',
            'option_value' => '17:00',
        ]);
        DB::table('settings')->insert([
            'option_name' => 'tuesday_from',
            'option_value' => '08:00',
        ]);
        DB::table('settings')->insert([
            'option_name' => 'tuesday_to',
            'option_value' => '17:00',
        ]);
        DB::table('settings')->insert([
            'option_name' => 'wednesday_from',
            'option_value' => '08:00',
        ]);
        DB::table('settings')->insert([
            'option_name' => 'wednesday_to',
            'option_value' => '17:00',
        ]);
        DB::table('settings')->insert([
            'option_name' => 'thursday_from',
            'option_value' => '08:00',
        ]);
        DB::table('settings')->insert([
            'option_name' => 'thursday_to',
            'option_value' => '17:00',
        ]);
        DB::table('settings')->insert([
            'option_name' => 'friday_from',
            'option_value' => '08:00',
        ]);
        DB::table('settings')->insert([
            'option_name' => 'friday_to',
            'option_value' => '17:00',
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'role' => '123456789',
        ]);
    }
}
