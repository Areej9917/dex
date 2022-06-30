<?php

namespace App\Http\Controllers;

use App\Models\AWB;
use Illuminate\Http\Request;
use App\Models\AwbDeliveryStatus;
use App\Models\ServiceArea;
use App\Models\DeliveryStatus;
use Illuminate\Support\Facades\View;

class AWBController extends Controller
{   
    
    public function __construct(){
    View::share([
        'mainContentHeading' => 'Awb',
        'modelName' => 'AWB',
        'route' => 'awb'
    ]);
    
}
    public function index(Request $request)
    {
        if ($request->has('trashed')) {
            $awb = AWB::onlyTrashed()
                ->get();
        } else {
            $awb = AWB::get();
        }

        return view('awb_entry', compact('awb_entry'));
    }
    public function storeawb(Request $request){
        if($request->has('awb_no')){
    
            $awbsNumbers = preg_split('/\r\n|\r|\n/', $request->awb_no);
            $origins = preg_split('/\r\n|\r|\n/', $request->origin);
            $destinations = preg_split('/\r\n|\r|\n/', $request->destination);
        
            foreach($awbsNumbers as $key => $awbNumber){
                
                AWB::create([
                        'awb_no' => $awbNumber,
                        'origin' => $origins[$key],
                        'status' => 1,
                        'destination' => $destinations[$key],
                           ]);

                    
            }
        
            return redirect()->route('awb.awb_entry'); 
        }   

    }

     /**
     * soft delete post
     *
     * @return void
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
  
        return redirect()->back();
    }


    public function markStatusBulk(Request $request){

        $statuses = DeliveryStatus::select('id','name')->whereNotIn('id',[1,2])->get();
        $locations = ServiceArea::select('id','name')->get();

        $awbsFound = [];
        $awbsNotFound = [];
        if($request->has('awb_numbers')){
            // $awbsNumbers = explode(PHP_EOL,$request->awb_numbers);
            $awbsNumbers = preg_split('/\r\n|\r|\n/', $request->awb_numbers);
            foreach($awbsNumbers as $awbNumber){
                // dd('ss');
                $checkAwb = AWB::where('awb_no',$awbNumber)->first();
                if($checkAwb){
                    $awbsFound[] = $checkAwb;
                }else{
                    $awbsNotFound[] = $awbNumber;
                }
            }
            
        }
        //  return $awbsNotFound;
        return view('awb.mark_status_bulk',[
            'awbsFound'  => $awbsFound,
            'awbsNotFound'  => $awbsNotFound,
            'statuses' => $statuses,
            'locations' => $locations,
         
          
        ]);

        return view('awb.mark_status_bulk');
        
    }

    public function markStatusDoneBulk(Request $request){

        if($request->has('awb_numbers')){
            $deliveryDatetime = $request->delivery_date . ' ' . $request->delivery_time;
        

            $awbsNumbers = preg_split('/\r\n|\r|\n/', $request->awb_numbers);

            foreach($awbsNumbers as $awbNumber){
                // dd('ss');
                $awb = AWB::where('awb_no',$awbNumber)->first();
                if($awb){
                    AwbDeliveryStatus::create([
                        'awb_id' => $awb->id,
                        'delivery_status_id' => $request->deleivery_status_id,
                        'service_area_id' => $request->location,
                        'date_time' => $deliveryDatetime,
                       
                    ]);

                    $awb->service_area_id = $request->location;
                    $awb->delivery_status_id = $request->deleivery_status_id;
                    $awb->date_time = $request->date_time;
                    $awb->save();
                    return $awb;
                }
                
            }
           
        }
 
        // $request->merge(['awb_numbers','']);
        return redirect()->route('markStatusBulk');
    }

  
    /**
     * restore specific post
     *
     * @return void
     */
    public function restore($id)
    {
        Post::withTrashed()->find($id)->restore();
  
        return redirect()->back();
    }  
  
    /**
     * restore all post
     *
     * @return response()
     */
    public function restoreAll()
    {
        Post::onlyTrashed()->restore();
  
        return redirect()->back();
    }
}
