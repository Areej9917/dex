@extends('layouts.master')

@section('main-content')
<!-- Modal -->

<div class="back-img"><img class="airway-img" src="{{URL::asset('assets/images/awb.jpg')}}"><div class="text-centered">AIRWAY BILL GENERATION</div></div>
<div class="container-fluid bg-white p-3">
    @if(Session::has('error'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Failed!</strong> {{ Session::get('error', '') }}
        </div>
    @endif

    <form method="post" action="{{ route('StoreAwb') }}">
       
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
        
              <div class="col-3">
              <div class="form-group">
                  <label>Awb No:</label>
                  <span>*</span>
                  <div class="input-icons">
                  <textarea name="awb_numbers" class="form-control" id="" cols="30" rows="10"></textarea>
              
                 </div>
               </div>
              </div>
              <div class="col-3">
              <div class="form-group">
                  <label>Origin:</label>
                  <span>*</span>
                  <div class="input-icons">
                  <textarea name="origin" class="form-control" id="" cols="30" rows="10"></textarea>
                 </div>
               </div>
              </div>
              <div class="col-3">
                  <div class="form-group">
                  <label>Destination:</label>
                  <span>*</span>
                  <div class="input-icons">
                  <textarea name="destination" class="form-control" id="" cols="30" rows="10"></textarea>
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
