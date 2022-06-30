@extends('layouts.master')

@section('main-content')

<div class="container-fluid bg-white p-3">
    <form method="post" action="{{ route('delivery-statuses.store') }}">
        @csrf
        
        <h3 class="heading1">Add Delivery Status</h3>
        
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
        <div class="col-12 bg-secondary text-center mt-3 p-1 text-white">
            <h4 class="heading2">Delivery Statuses</h4>
        </div>
        <div class="info">
            
            <div class="row">
            
                <div class="col-3">
                    <div class="form-group">
                        <label>Name:</label>
                        <span>*</span>
                        <div class="input-icons">
                            <input type="text" value="{{old('name')}}" name="name"  class="form-control" required/>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        <div class="row" style="float: right;">
            <button class="btn-submit"><i class="fa-solid fa-paper-plane"></i> Submit</button>
        </div>
    </form>
    
</div>

@endsection
