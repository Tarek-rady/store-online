<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{

    public function run()
    {
           Setting::create([
            'email' => 'tarekrady95@yahoo.com',
            'phone' => '01067422197',
            'phone2' => '01067422197',
            'addres' => 'aga - mansoura',
            'map'  => 'aga - mansoura',
            'twiter' => 'https://twitter.com/TarekRady20?t=5db84nGM6oyE10gJmGB6lA&s=08',
            'facebook' => 'https://web.facebook.com/profile.php?id=100009232444028',
            'pinterest' => '',
            'instagram' => 'https://www.instagram.com/tarekrady20/',
            'youtube' => 'https://www.youtube.com/watch?fbclid=IwAR2vQLQuRXosBttc3molljuiaE0mecK-Xae0oR-nzKU-IRlOViKzxDwracw&v=L_Ha8fIJC2A&feature=youtu.be',
           ]);
    }
}
