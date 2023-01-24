<?php

use App\Trains;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++){
            $trains = new Trains();
            $trains -> company = 'Italo';
            $trains -> start = 'Bari';
            $trains -> stop = 'Roma';
            $trains->save();
        }
    }
}
