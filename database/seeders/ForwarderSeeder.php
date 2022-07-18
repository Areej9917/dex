<?php

namespace Database\Seeders;

use App\Models\Forwarder;
use Illuminate\Database\Seeder;

class ForwarderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $items = [
            ['name' => 'DHL','url' =>'http://www.dhl.com/content/g0/en/express/tracking.shtml?brand=DHL&AWB='],
  
            ];

       foreach ($items as $item) {
        Forwarder::updateOrCreate(['name' => $item['name']], $item);
}



    }
}
