<?php

use App\Models\Site;
use Illuminate\Database\Seeder;

class SitePlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = array("Destiny Court", "Seman Garden City", "Seman MetroPolis Estate", "Seman Kings Ville Estate", "Seman HillsVille Estste",
        "Seman Luxury", "Side View Phase 1", "Side View Phase 2", "Grace Court");
        $addresses = array("AMAC Market Lugbe", "Sabon Lugbe East Layout","Lugbe 1 Extension Layout", "Sabon Lugbe East Extension Layout",
            "Sabon Lugbe East Extension Layout", "Nbora District", "Sabon Lugbe East Extension Layout", "Sabon Lugbe East Extension Layout", "Sabon Lugbe East Extension Layout" );

        foreach ($names as $key => $name){
            $site = Site::create([
                'name' => $name,
                'type' => 'residential',
                'location' => 'Abuja',
                'address' => $addresses[$key]
            ]);

            $site->plots()->saveMany(factory(\App\Models\Plot::class,50)->make(['user_id' => 3]));
        }


    }
}
