<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AAPNUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aapn_users')->insert(
            [
                "agent_code" => "A01",
                "name" => "Mirna Jostein",
                "phone" => "081514154544",
                "email" => "jostein.mirna@gmail.com",
                "role" => 0
            ]
        );
        DB::table('aapn_users')->insert(
            [
                "agent_code" => "A02",
                "name" => "Mikael Japar",
                "phone" => "0819819138",
                "email" => "Michael.Japar@allianz.co.id",
                "role" => 0
            ]
        );
        DB::table('aapn_users')->insert(
            [
                "agent_code" => "A03",
                "name" => "Nida Asrina",
                "phone" => "081290079978",
                "email" => "Nida.Asrina@allianz.co.id",
                "role" => 0
            ]
        );
        DB::table('aapn_users')->insert(
            [
                "agent_code" => "A04",
                "name" => "Adi Purwadi",
                "phone" => "08151847886",
                "email" => "purwadi1404@gmail.com",
                "role" => 0
            ]
        );
        DB::table('aapn_users')->insert(
            [
                "agent_code" => "A05",
                "name" => "Eva Winette",
                "phone" => "08179260793",
                "email" => "eva97_00@yahoo.com",
                "role" => 0
            ]
        );
        DB::table('aapn_users')->insert(
            [
                "agent_code" => "A06",
                "name" => "Juani Siram",
                "phone" => "0819819135",
                "email" => "Juani.Siram@allianz.co.id",
                "role" => 0
            ]
        );
        DB::table('aapn_users')->insert(
            [
                "agent_code" => "A07",
                "name" => "Bunga Nurputri",
                "phone" => "081991871661",
                "email" => "Bunga.Nurputri@allianz.co.id",
                "role" => 0
            ]
        );
        DB::table('aapn_users')->insert(
            [
                "agent_code" => "A08",
                "name" => "Linda",
                "phone" => "085697082623",
                "email" => "hediati46@gmail.com",
                "role" => 0
            ]
        );
        DB::table('aapn_users')->insert(
            [
                "agent_code" => "A09",
                "name" => "Alfrido",
                "phone" => "0895340385449",
                "email" => "alfrido@allianz.co.id",
                "role" => 0
            ]
        );
        DB::table('aapn_users')->insert(
            [
                "agent_code" => "A10",
                "name" => "Asmi Tanuwijaya",
                "phone" => "085693824848",
                "email" => "asmitanuwijaya.trimar@gmail.com",
                "role" => 0
            ]
        );
    }
}
