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
                Roles
            </div>
        </div>
        <div class="page-title-actions">
            
            <div class="d-inline-block dropdown">
                <a class="btn btn-info" href="{{route('roles.create')}}">
                    Add New Role
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
                <th>Permissions</th>
                <th>Created At</th>
                <th>Action</th>
                
            </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td>{{$role->name}}</td>
                    <td>
                        @foreach ($role->permissions as $role_permission)
                        <button class="mb-2 mr-2 btn btn-primary btn-sm">
                            {{$role_permission->name}}
                        </button>                            
                        @endforeach
                    </td>
                    <td>{{$role->created_at}}</td>
                    <td><a href="roles/{{$role->id}}/edit" class="mb-2 mr-2 btn btn-primary btn-sm">
                        Edit
                        </a></td>
                        <td><a href="roles/{{$role->id}}/edit" class="mb-2 mr-2 btn btn-primary btn-sm">
                        delete
                        </a></td>
                    </tr>
                @endforeach
                  </table>
    </div>
</div>   
@endsection