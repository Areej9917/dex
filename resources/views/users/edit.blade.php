@extends('layouts.master')

@section('main-content')

<div class="container-fluid bg-white p-3">
    <form method="post" action="{{ route('users.update',$user->id) }}">
         @csrf
    @method('PUT')

        <h3 class="heading1">Customer Recipient Details</h3>
        
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
            <h4 class="heading2">User Details</h4>
        </div>
        <div class="info">
            
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <label>Select Role:</label>
                        <span>*</span>
                        <div class="input-icons">
                            <select class="form-control" name="role_id" required>
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}" >{{$role['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
          
            </div>
        </div>
        <div class="row" style="float: right;margin-right: 50px;">
            <button class="btn-submit"><i class="fa-solid fa-paper-plane"></i> Submit</button>
        </div>
    </form>
    
</div>

@endsection
