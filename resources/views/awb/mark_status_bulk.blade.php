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
                Awbs
            </div>
        </div>
        <div class="page-title-actions">
        </div>
    </div>
</div>
@endsection
@section('main-content')
<div class="main-card mb-3 card">
    <div class="card-body">
        @if(Session::has('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Success!</strong> {{ Session::get('success', '') }}
        </div>
    @endif
        <form method="get" action="{{route('markStatusBulk')}}">
            <h3 class="heading1">Add Bulk Tracking Status</h3>
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label>AWB Numbers:</label>
                        <div class="input-icons">
                            {{-- <i class="fa-solid fa-calendar-days icon"></i> --}}
                            {{-- <input type="textarea" name="awb_numbers" class="form-control" value="{{request()->awb_numbers}}" /> --}}
                            <textarea name="awb_numbers" class="form-control" cols="30" rows="10"></textarea>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn-danger" style="background:#d30404;padding-right: 30px;padding-left: 30px;"> Search</button>
                    {{-- <button class="btn btn-danger" style="background:#d30404;padding-right: 30px;padding-left: 30px;">
                        Reset
                    </button> --}}
                </div>
            </div>
        </form>
    </div>
    <form method="POST" action="{{route('markStatusDoneBulk')}}">
        @csrf
        <input type="text" name="awb_numbers" value="{{request()->awb_numbers}}">

        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label>Status:</label>
                            <span>*</span>
                            <select class="form-control" name="deleivery_status_id" required>
                                <option value="">Select Status</option>
                                @foreach ($statuses as $status)
                                <option value="{{$status->id}}">{{$status->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label>Service Areas:</label>
                            <span>*</span>
                            <select class="form-control" name="location" required>
                                <option value="">Select Service Area</option>
                                @foreach ($locations as $location)
                                <option value="{{$location->id}}">{{$location->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label> Date:</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-calendar-days icon"></i>
                                <input type="text" name="delivery_date" class="datepicker2 form-control" style="padding-left: 30px;" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label>Time:</label>
                            <span>*</span>
                            <div class="input-icons">
                                <input type="text" class="timepicker2 form-control" id="receiver_date_time" name="delivery_time"  class="form-control" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">

              
                        <button class="btn btn-danger" style="background:#d30404;padding-right: 30px;padding-left: 30px;float:right;"> Mark</button>
                          
                    </div>
                </div>
            </div>
        </div>
    </form>


    <div class="">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <th>AWB Found</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            @foreach ($awbsFound as $awbFound)
                            <tr style="text-align: center">
                                <td>{{$awbFound->awb_no}}</td>
                                <td>{{$awbFound->currentDeliveryStatus->name}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                <div class="col-6">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <th>AWBs Not Found</th>
                        </thead>
                        <tbody>
                            @foreach ($awbsNotFound as $awbNotFound)
                            <tr style="text-align: center">
                                <td>{{$awbNotFound}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
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


