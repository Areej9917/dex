@extends('layouts.master')

@section('main-content-header')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-graph icon-gradient bg-ripe-malin">
                </i>
            </div>
            <div>
                Users
            </div>
        </div>
        <div class="page-title-actions">
            
            <div class="d-inline-block dropdown">
                <a class="btn btn-info" href="{{route('users.create')}}">
                    Add New Operational User
                </a>
            </div>
        </div>    
    </div>
</div>           
@endsection

@section('main-content')
<div class="main-card mb-3 card">
    <div class="card-body">
        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
                {{-- <th>Start date</th> --}}
                {{-- <th>Salary</th> --}}
            </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @foreach ($user->roles as $user_role)
                        <button class="mb-2 mr-2 btn btn-primary btn-sm">
                            {{$user_role->name}}
                        </button>                            
                        @endforeach
                    </td>
                    <td><a href="users/{{$user->id}}/edit" class="mb-2 mr-2 btn btn-primary btn-sm">
                        Edit
                        </a></td>
                    {{-- <td>61</td> --}}
                    {{-- <td>2011/04/25</td> --}}
                    {{-- <td>$320,800</td> --}}
                </tr>
                @endforeach
                  </table>
    </div>
</div>   
@endsection