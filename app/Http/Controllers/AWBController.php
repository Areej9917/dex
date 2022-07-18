<?php

namespace App\Http\Controllers;

use App\Models\Awb;
use Illuminate\Http\Request;
use App\Models\AwbDeliveryStatus;
use App\Models\ServiceArea;
use App\Models\DeliveryStatus;
use App\Models\ForwardNo;
use App\Models\ProofOfDelivery;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Session;


class AWBController extends Controller
{   
    
    public function __construct(){
    View::share([
        'mainContentHeading' => 'Awb',
        'modelName' => 'Awb',
        'route' => 'awb'
    ]);
    
    }
    public function index(Request $request)
    {
        if ($request->has('trashed')) {
            $awb = Awb::onlyTrashed()
                ->get();
        } else {
            $awb = Awb::get();
        }

        return view('awb_entry', compact('awb_entry'));
    }
    public function storeawb(Request $request){

     
        if($request->has('awb_no')){
    
            $awbsNumbers = preg_split('/\r\n|\r|\n/', $request->awb_no);
            $origins = preg_split('/\r\n|\r|\n/', $request->origin);
            $destinations = preg_split('/\r\n|\r|\n/', $request->destination);
        
            foreach($awbsNumbers as $key => $awbNumber){
                
                Awb::create([
                        'awb_no' => $awbNumber,
                        'origin' => $origins[$key],
                        'status' => 1,
                        'destination' => $destinations[$key],
                           ]);

                    
            }
            Session::flash('success','First Entry Added Successfully!');
            return redirect()->route('awb.awb_entry'); 
        }   

    }
    public function trackAwbs(Request $request,$id = null){
        $awbs = [];

        if(!empty($id)){
            $awbs =Awb::with('currentDeliveryStatus','deliveryStatuses.deliveryStatus')
            ->where('id',$id)
            ->get();
           
        }
        
        if($request->has('awb_numbers')){
            
            $awb_numbers = preg_split('/\r\n|\r|\n/', $request->awb_numbers);

            $awbs = Awb::with('currentDeliveryStatus','deliveryStatuses.deliveryStatus')
            ->whereIn('awb_no',$awb_numbers)
            ->get();
        }
           return view('awb.track',[
            'awbs' => $awbs
        ]);

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
                $checkAwb = Awb::where('awb_no',$awbNumber)->first();
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
         

            // $awbsNumberss = preg_split('/\r\n|\r|\n/', $request->awb_numbers);
            // foreach($awbsNumberss as $awbNumbers){
            // if ($awbss = Awb::where('awb_no', '=', $awbNumbers)->first())
            //  {
            //     return 'exists';
            //   } else {
            //     return 'nope';
            //  }
            // }
            
            $awbsNumbers = preg_split('/\r\n|\r|\n/', $request->awb_numbers);
            foreach($awbsNumbers as $awbNumber){
                // dd('ss');
                $awb = Awb::where('awb_no',$awbNumber)->first();
               
                if($awb){
                    AwbDeliveryStatus::create([
                        'awb_id' => $awb->id,
                        'delivery_status_id' => $request->delivery_status_id,
                        'service_area_id' => $request->location,
                        'date_time' => $deliveryDatetime,
                        
                    ]);

                }
                
            }
            Session::flash('success','Statuses Added Successfully!');
            // $request->merge(['awb_numbers','']);
            return redirect()->route('markStatusBulk');
        }
    
    }
  
    public function checkStatus(Request $request){
        // dd($request->all());

        $statuses = DeliveryStatus::select('id','name')->whereNotIn('id',[1,2])->get();
        $locations = ServiceArea::select('id','name')->get();
        //$awbs = AwbDeliveryStatus::with('awb_id')->get();
         $awbs = new AwbDeliveryStatus;
         $awbs = $awbs->get();

        return view('awb.track_awb',[
             'awbs'  => $awbs,
             'statuses' => $statuses,
             'locations' => $locations,
         
        ]);
    }
     public function proofofdelivery(Request $request){
        
        if($request->has('awb_numbers')){
           
            $deliveryDate = preg_split('/\r\n|\r|\n/', $request->date);;
            $deliveryTime = preg_split('/\r\n|\r|\n/', $request->time);;
            $signature = preg_split('/\r\n|\r|\n/', $request->signature);;

            // $awbsNumberss = preg_split('/\r\n|\r|\n/', $request->awb_numbers);
            // foreach($awbsNumberss as $awbNumbers){
            // if ($awbss = Awb::where('awb_no', '=', $awbNumbers)->first())
            //  {
            //     return 'exists';
            //   } else {
            //     return 'nope';
            //  }
            // }
            
            $awbsNumbers = preg_split('/\r\n|\r|\n/', $request->awb_numbers);
            foreach($awbsNumbers as $key => $awbNumber){
                // dd('ss');
                $awb = Awb::where('awb_no',$awbNumber)->first();
               
                if($awb){
                    ProofOfDelivery::create([
                        'awb_id' => $awb->id,
                        'date' => $deliveryDate[$key],
                        'time' => $deliveryTime[$key],
                        'signature' => $7yhuuui'
                        'kk [$key],
                        
                    ]);

                }
                
            }
            Session::flash('success','Statuses Added Successfully!');
            // $request->merge(['awb_numbers','']);
          
        return view('awb.pod');
     }
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
    public function forwarder(){
        $locations = ServiceArea::select('id','name')->get();
        return view('awb.forward_no',[
           
            'locations' => $locations,
        
       ]);
    }
    public function markforwarder(Request $request){

        if($request->has('awb_numbers')){
            $ForwardDatetime = $request->forward_date . ' ' . $request->forward_time;
            $awbsNumbers = preg_split('/\r\n|\r|\n/', $request->awb_numbers);
            $forward_no = preg_split('/\r\n|\r|\n/', $request->fwd_no);
            foreach($awbsNumbers as $key => $awbNumber){
                // dd('ss');
                
                
                    ForwardNo::create([
                        'awb_no' => $awbNumber,
                        'fwd_no' => $forward_no[$key],
                        'service_area_id' => $request->service_area,
                        'forwarder' => $request->forwarder,
                        'delivery_status_id' => 9,
                        'date_time' => $ForwardDatetime,
                        
                    ]);
                    

                
                
              
                
            }
        
            
            Session::flash('success','Statuses Added Successfully!');
            // $request->merge(['awb_numbers','']);
            return redirect()->route('awb.forward_no');
        }
    
    }
}
