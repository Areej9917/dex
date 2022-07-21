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
            ['name' => 'UPS','url' =>'http://wwwapps.ups.com/WebTracking/processInputRequest?HTMLVersion=5.0&sort_by=status&term_warn=yes&tracknums_displayed=5&TypeOfInquiryNumber=T&loc=en_SG&&AgreeToTermsAndConditions=yes&track.x=18&track.y=3&InquiryNumber1='],
            ['name' => 'FEDEX','url' =>': https://www.fedex.com/fedextrack/?action=track&tracknumbers=273936606159&locale=en_us&cntry_code=us'],

  
            ];

       foreach ($items as $item) {
        Forwarder::updateOrCreate(['name' => $item['name']], $item);
     }



    }
}
