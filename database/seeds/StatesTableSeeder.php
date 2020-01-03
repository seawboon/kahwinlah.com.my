<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = array(
            "JHR" => "Johor",
            "KDH" => "Kedah",
            "KUL" => "Kuala Lumpur",
            "KTN" => "Kelantan",
            "LBN" => "Labuan",
            "MLK" => "Melaka",
            "NSN" => "Negeri Sembilan",
            "PNG" => "Pulau Pinang",
            "PHG" => "Pahang",
            "PJY" => "Putrajaya",
            "PRK" => "Perak",
            "PLS" => "Perlis",
            "SBH" => "Sabah",
            "SWK" => "Sarawak",
            "SGR" => "Selangor",
            "TRG" => "Terengganu"
        );

        foreach($states as $key=>$value) {

            DB::table("states")->insert([
                "name" => $value
            ]);
        }
    }
}
