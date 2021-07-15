<?php

use Illuminate\Database\Seeder;
use App\Travel;
class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayTravel = config('data_travels');
        foreach ( $arrayTravel as $item ) {
            $travel = new Travel();
            $travel->destination = $item['destination'];
            $travel->airport = $item['airport'];
            $travel->living_room = $item['living_room'];
            $travel->nights = $item['nights'];
            $travel->price = $item['price'];
            $travel->date = $item['date'];
            $travel->save();
        }
    }
}
