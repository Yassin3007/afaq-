<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'enable'=>1 ,
            'address'=>'Saudi Arabia',
            'phone'=> '+966 50 707 0440',
            'email'=> 'Afaq@afaq.com',
        ]);
    }
}
