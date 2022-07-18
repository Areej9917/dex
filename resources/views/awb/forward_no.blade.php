@extends('layouts.master')

@section('css')
<link href="{{asset('css/picker.css')}}" rel="stylesheet"/>

<style>
    .select2-container--default .select2-selection--single{
        background-color:#fff;height:36px;border:1px solid #aaa;border-radius:4px
    }
</style>
@endsection
@section('main-content-header')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-graph icon-gradient bg-ripe-malin">
                </i>
            </div>
            <div>
                Forward Awb
            </div>
        </div>
        <div class="page-title-actions">
        </div>
    </div>
</div>
@endsection
@section('main-content')
<!-- Modal -->

<div class="container-fluid bg-white p-3">
    @if(Session::has('error'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Failed!</strong> {{ Session::get('error', '') }}
        </div>
    @endif

    <form method="post" action="{{ route('markforwarder') }}">
       
        @csrf

        <!-- <h3 class="heading1">Airway Bill Generation</h3> -->
        @if (!$errors->isEmpty())
        <div class="alert alert-danger">
            <strong>Whoops! </strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="info">

            <div class="row">

              <div class="col-4" style="    margin-left: 140px;">
              <div class="form-group">
                  <label>Awb No:</label>
                  <span>*</span>
                  <div class="input-icons">
                  <textarea name="awb_numbers" class="form-control" id="" cols="10" rows="10"></textarea>
              
                 </div>
               </div>
              </div>
              <div class="col-4">
              <div class="form-group">
                  <label>Forward No:</label>
                  <span>*</span>
                  <div class="input-icons">
                  <textarea name="fwd_no" class="form-control" id="" cols="10" rows="10"></textarea>
                 </div>
               </div>
              </div>
            
           <div class="row">
           <div class="col-3">
                  <div class="form-group">
                  <label>Service Area:</label>
                  <span>*</span>
                  <div class="input-icons">
                  <select name="service_area" class="form-control">
                  <option value="">Select Service Area</option>
                               @foreach ($locations as $location)
                                <option value="{{$location->id}}">{{$location->name}}</option>
                                @endforeach 
                  </select>
                 </div>
                 </div>
                </div>
                <div class="col-3">
                        <div class="form-group">
                            <label>Forwarder:</label>
                            <span>*</span>
                            <div class="input-icons">
                            <select name="forwarder" class="form-control">
                             <option value="">Select Forwarder</option>
                                <option value="DHL">DHL</option>
                                <option value="FEDEX">FEDEX</option>
                                <option value="UPS">UPS</option>
                        
                            </select>
                            </div>
                        </div>
                    </div>
                <div class="col-3">
                        <div class="form-group">
                            <label> Date:</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-calendar-days icon"></i>
                                <input type="text" name="forward_date" class="datepicker2 form-control" style="padding-left: 30px;" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label>Time:</label>
                            <span>*</span>
                            <div class="input-icons">
                                <input type="text" class="timepicker2 form-control" id="receiver_date_time" name="forward_time"  class="form-control" required/>
                            </div>
                        </div>
                    </div>
                 
                    </div>
       </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn-danger" style="background:#d30404;padding-right: 30px;padding-left: 30px;float:right;"> Submit</button>
                    <button class="btn btn-danger" style="background:#d30404;padding-right: 30px;padding-left: 30px;float:right;margin-right: 10px;">
                        Reset
                    </button>
                </div> 
            </div> 

        </div>

@endsection
@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="{{ asset('js/picker.js') }}"></script>

<script>

   

    $('.datepicker').datetimepicker({
        format : "YYYY-MM-DD"
    });

    $('.datepicker2').datetimepicker({
        format : "YYYY-MM-DD"
    });

    $('.timepicker2').datetimepicker({
        format: 'HH:mm'
    });

 
</script>
@endsection

