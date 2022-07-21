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
                Track Awbs
            </div>
        </div>
        <div class="page-title-actions">
        </div>
    </div>
</div>
@endsection
@section('main-content')

<div class="main-card mb-3 card">
    <div class="card-body" style="overflow:auto;">
     

        <table style="width: 100%;" id="dataTable" class="table table-hover table-striped table-bordered">
            <thead>

            <tr>
                
                <th>S.No</th>
                <th>Awb No</th>
              
                <th>Origin</th>
                <th>Destination</th>
                <th>Service Area</th>
                <th>Deleivery Status</th>
                <th>Date Time</th>
              
            </tr>

            </thead>
            <tbody>
                @foreach ($awbs as $index => $awb)
                <tr>
                 
                    <td>{{$index+1}}</td>
            
                    <td>{{$awb->awb->awb_no}}</td>
                    <td>{{$awb->awb->origin}}</td>
                    <td>{{$awb->awb->destination}}</td>
                    <td>{{($awb->serviceArea ? $awb->serviceArea->name : "")}}</td>
                    <td>{{($awb->deliveryStatus ? $awb->deliveryStatus->name : "")}}</td>
                    <td>{{$awb->date_time}}</td>
                

                </tr>
                @endforeach
</table>





        
       
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


