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

      <div class="info" style="position:relative;">
         <h4 class="heading1" style="font-size:25px;">AWB No: {{$awb->awb_no}}</h4>
         <div class="container-fluid" id="div1" >
            <h4 class="heading1" style="font-size: 30px;float: left;font-weight: 800;margin: 20px;">
               {{$awb->name}}</h4>
            <img src="{{asset('assets/images/delivery.jpg')}}" style="width:420px;">
            <hr style="height:2px;border-width:0;color:gray;background-color:red">
            <h4 class="heading1"  style="float:left;margin-left:50px;">Delivery On
               </br>{{ $awb->receiver_date_time ? date('d-m-Y',strtotime($awb->receiver_date_time)) : ''}}
            </h4>
            <h4 class="heading1">Delivery Time At</br>
               {{ $awb->receiver_date_time ? date('h:i A',strtotime($awb->receiver_date_time)) : ''}}
            </h4>
         </div>
         <div class="container-fluid" id="div2" >
            <h4 class="heading1" style="margin-right: 290px;margin-top: 20px;">Delivered To :</h4>
            <h4 class="head">
            
                   {{$awb->name}}
         
            </h4>
            <hr style="height:2px;border-width:0;color:gray;background-color:red">
            <h4 style="float: left;margin-right: 10px;font-size:17px;font-weight: 700;color: black;">Delivery Time:</h4><span style="color: black;"></span>
            <h4 style="font-size: 17px;font-weight: 700;float:right;margin-right:70px;color: black;">Received By:</h4><span style="float: right;margin-right: -135px;color: black;"></span>
            {{-- Proof Of Delivery --}}
         </div>
         <div class="container-fluid bg-white" id="div3">
         </div>
      </div>
      {{-- @endif --}}
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
               <td><input type="checkbox" class="option-input radio"><span class="label-text">{{$awbDeliveryStatus->deliveryStatus->name ?? ''}}</span></td>
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
   </div>
</div>

@endforeach
@endif



</div>

@endsection