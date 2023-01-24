<?php

use App\Trains;
use Illuminate\Database\Seeder;
use \Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $trains = new Trains();
            $trains -> company = $faker->words(rand(2, 5), true);
            $trains -> start = 'Bari';
            $trains -> stop = 'Roma';
            $trains -> time_start = '10:30';
            $trains -> time_stop = '13:30';
            $trains -> code = rand(1, 100);
            $trains -> carriage = 'quattro';
            $trains -> cancelled = False;
            $trains->save();
        }
    }
}
