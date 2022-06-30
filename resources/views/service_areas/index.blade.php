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
                Service Areas
            </div>
        </div>
        <div class="page-title-actions">
            
            <div class="d-inline-block dropdown">
                <a class="btn btn-info" href="{{route('service-areas.create')}}">
                    Add New Service Area
                </a>
            </div>
        </div>    
    </div>
</div>           
@endsection
@section('main-content')
<div class="main-card mb-3 card">
    <div class="card-body">
        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Created At</th>
                {{-- <th>Phone</th> --}}
                {{-- <th>Email</th> --}}
                {{-- <th>Postal Code</th> --}}
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($serviceAreas as $serviceArea)
                <tr style="text-align: center">
                    <td>{{$serviceArea->name}}</td>
                    <td>{{$serviceArea->created_at}}</td>
                    {{-- <td>{{$client->phone_no}}</td> --}}
                    {{-- <td>{{$client->email}}</td> --}}
                    {{-- <td>{{$client->postal_code}}</td> --}}
                    <td><a href="{{route('service-areas.edit',$serviceArea->id)}}" title="Edit"><i class="fa fa-pencil ml-2 opacity-5" aria-hidden="true"></i></a></td>
                </td>
                </tr>
                @endforeach
        </table>
    </div>
</div>   
@endsection