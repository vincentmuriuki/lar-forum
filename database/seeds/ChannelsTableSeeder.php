<?php

use Illuminate\Database\Seeder;
use App\Channel;
class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channel = ['title' => 'Laravel'];

        $channel1 = ['title' => 'Vuejs'];

        $channel2 = ['title' => 'Flask'];

        $channel3 = ['title' => 'Flask Restful'];

        $channel4 = ['title' => 'Node.JS'];

        $channel5 = ['title' => 'Ruby'];

        $channel6 = ['title' => 'Spark'];

        $channel7 = ['title' => 'Lumen'];

        $channel8 = ['title' => 'Sancty'];


        Channel::create($channel);

        Channel::create($channel1);

        Channel::create($channel2);

        Channel::create($channel3);

        Channel::create($channel4);

        Channel::create($channel5);

        Channel::create($channel6);

        Channel::create($channel7);

        Channel::create($channel8);


    }
}
