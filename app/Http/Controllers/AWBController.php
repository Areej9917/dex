<?php

namespace App\Http\Controllers;

use App\Models\AWB;
use Illuminate\Http\Request;
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
    public function StoreAwb(Request $request){
        if($request->has('awb_numbers')){
    
            $awbsNumbers = preg_split('/\r\n|\r|\n/', $request->awb_numbers);

            foreach($awbsNumbers as $awbNumber){
                // dd('ss');
                $awb = AWB::where('awb_no',$awbNumber)->first();
                $awb->origin = $request->origin;
                $awb->destination = $request->destination;
                $awb->save();
                }
            }
        
        return redirect()->route('awb_entry');

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