@extends('layouts.master')
@section('main-content')
<style>
span{
   color:black;
}
</style>
<div class="back-img"><img class="airway-img" src="{{asset('assets/images/tracking1.jpg')}}"/><div class="text-centered-track">TRACKING DETAILS</div></div>
<div class="container-fluid bg-white">
   {{-- 
   <hr>
   --}}
   <div class="search_form" style="padding-top:10px">
      <form action="{{route('track')}}" method="get">
         <label for="" class="control-label">Awb Numbers</label>
         {{-- <input type="text" name="awb_numbers"  class="form-control" placeholder="e.g, 3433222,4333232,2321111"/> --}}
         <textarea name="awb_numbers" class="form-control" id="" cols="30" rows="10"></textarea>
         <button type="submit" class="btn-submit btn-md" style="float:right;margin-top:10px;margin-bottom:10px">Track</button>
      </form>
   </div>
   <div style="clear: both"></div>
   @if (count($awbs) > 0)
       @foreach ($awbs as $awb)
           
   <div class="details">

      
   <div class="col-12 bg-secondary text-center mt-3 p-1 text-white">
      <h4 class="heading2">Shipment Progress<i class="fa-solid fa-angle-down"></i></h4>
   </div>
   {{-- <button class="btn-submit" style="margin:10px;">Overview</button> --}}
   <div class="info">
      <table class="track-table dataTable no-footer"  width="100%">
         <thead>
            <tr>
               <th></th>
               <th>Date</th>
               <th>Service Area</th>
               <th>Image</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($awb->deliveryStatuses as $awbDeliveryStatus)
                
            <tr role="row">
               <td>
                  <input type="checkbox" class="option-input radio"><span class="label-text">
                    {{-- @if ($awbDeliveryStatus->deliveryStatus->id == 8) --}}
                        <a href="{{$awbDeliveryStatus->fwd_url}}" target="_blank">{{$awbDeliveryStatus->deliveryStatus->name ?? ''}}</a> 
                  {{-- @else
                        {{$awbDeliveryStatus->deliveryStatus->name ?? ''}}
                     @endif --}}
                  </span>
               </td>
               <td>{{date('d-m-Y',strtotime($awbDeliveryStatus->date_time))}}</br>{{date('H-i-s',strtotime($awbDeliveryStatus->date_time))}}</td>
               <td>
                  @if($awbDeliveryStatus->delivery_status_id == 1)

                  @elseif($awbDeliveryStatus->delivery_status_id == 2)
                  
                  @else
                     {{$awbDeliveryStatus->serviceArea->name ?? ''}}
                  @endif
               </td>
               @if($awbDeliveryStatus->delivery_status_id == "2")
               <td></td>
               @else
               <td><i></i></td>
               @endif
            </tr>
            @endforeach
         
         </tbody>
      </table>

      <table width="98%" border="0" align="center" cellpadding="1" cellspacing="2" bordercolor="red">
 
 <tbody><tr> 
   <td colspan="5">
     
       </td>
  </tr>
  
<tr> 

 
<td align="right" colspan="3">&nbsp;</td>
</tr>

<tr> 
   <td colspan="2" align="center" width="26%" height="23" class="headerback2"> 
   AWB</td>
   <td width="8%" align="center" class="headerback2"> 
    Origin</td>
   <td align="center" class="headerback2"> 
     Destination</td>
   <td align="center" class="headerback2" width="48%"> 
     Last Status</td>
 </tr>
 @foreach ($awb->deliveryStatuses as $awbDeliveryStatus)
<tr> 

 <td colspan="2" align="left" style="vertical-align:bottom;text-align: center;" class="itemback3">{{date('d-m-Y',strtotime($awbDeliveryStatus->date_time))}}</td>

 
 <td class="itemback3" align="center" style="vertical-align:bottom;text-align: center;">{{date('H-i-s',strtotime($awbDeliveryStatus->date_time))}}</td>
 <td class="itemback3" align="center" style="vertical-align:bottomtext-align: center;">  
                  @if($awbDeliveryStatus->delivery_status_id == 1)

                  @elseif($awbDeliveryStatus->delivery_status_id == 2)
                  
                  @else
                     {{$awbDeliveryStatus->serviceArea->name ?? ''}}
                  @endif
         
 </td>
 
 <td class="itemback3" style="vertical-align:bottom;text-align: center;" align="left">

 <a href="{{$awbDeliveryStatus->fwd_url}}" target="_blank">{{$awbDeliveryStatus->deliveryStatus->name ?? ''}}{{$awbDeliveryStatus->fwd_no}}</a> 
 
 
 
 </td>  



@endforeach
<tr>
 <td colspan="5"></td>
</tr>

</tbody></table>


      <table width="98%" border="0" align="center" cellpadding="1" cellspacing="2" bordercolor="red">
 
 <tbody><tr> 
   <td colspan="5">
     
       </td>
  </tr>
  
<tr> 

<td align="left" colspan="3"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
<b>COMPLETE STATUS</b></font><br>
<font size="2" face="Arial, Helvetica, sans-serif"><strong> 
     Airway Bill #</strong> 
    
   <strong><a>{{$awb->awb_no}}</a></strong>
    

    
    </font> 
</td>  
<td align="right" colspan="3">&nbsp;</td>
</tr>

<tr> 
   <td colspan="2" align="center" width="26%" height="23" class="headerback2"> 
Date</td>
   <td width="8%" align="center" class="headerback2"> 
    Time</td>
   <td align="center" class="headerback2"> 
     Service Area</td>
   <td align="center" class="headerback2" width="48%"> 
     Check 
       Point Detail</td>
 </tr>
 @foreach ($awb->deliveryStatuses as $awbDeliveryStatus)
<tr> 

 <td colspan="2" align="left" style="vertical-align:bottom;text-align: center;" class="itemback3">{{date('d-m-Y',strtotime($awbDeliveryStatus->date_time))}}</td>

 
 <td class="itemback3" align="center" style="vertical-align:bottom;text-align: center;">{{date('H-i-s',strtotime($awbDeliveryStatus->date_time))}}</td>
 <td class="itemback3" align="center" style="vertical-align:bottomtext-align: center;">  
                  @if($awbDeliveryStatus->delivery_status_id == 1)

                  @elseif($awbDeliveryStatus->delivery_status_id == 2)
                  
                  @else
                     {{$awbDeliveryStatus->serviceArea->name ?? ''}}
                  @endif
         
 </td>
 
 <td class="itemback3" style="vertical-align:bottom;text-align: center;" align="left">

 <a href="{{$awbDeliveryStatus->fwd_url}}" target="_blank">{{$awbDeliveryStatus->deliveryStatus->name ?? ''}}{{$awbDeliveryStatus->fwd_no}}</a> 
 
 
 
 </td>  



@endforeach
<tr>
 <td colspan="5"></td>
</tr>

</tbody></table>
      
   </div>
</div>

@endforeach
@endif



</div>

@endsection