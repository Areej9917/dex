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
                {{$role->display_name}} Permissions
            </div>
        </div>
        <div class="page-title-actions">
        </div>    
    </div>
</div>           
@endsection

@section('main-content')
    <form method="POST" action="/roles/{{$role->id}}">
        @csrf
        @method('PUT')
        <div class="main-card mb-3 card">
            <div class="card-body">
                @foreach ($permissions as $key => $permission)
                    {{$key}}
                    @foreach($permission as $per)
                    <div class="col-lg-3">
                        <div class="check-holder">
                            <input type="checkbox" name="perm[<?php echo $per['id']; ?>]" <?php echo (in_array($per['id'], $rolePermIds)) ?  'checked = "checked"' : ''; ?> class="<?php echo (in_array($per['id'], $rolePermIds)) ?  'chkbox' : ''; ?> check-box">
                            <span> {{$per['display_name']}} </span>
                        </div>
                    </div>
                    @endforeach
                @endforeach
                <div class="row" style="float: right;margin-right: 50px;">
                    <button class="btn-submit"><i class="fa-solid fa-paper-plane"></i> Update</button>
               </div>
            </div>
        </div>
    </form>
@endsection