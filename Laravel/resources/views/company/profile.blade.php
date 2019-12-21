@extends('layouts.app')

@section('stylesheets')

<style type="text/css">

.profile-image{
    width: 150px;
}
</style>

@endsection

@section('content')

<div class="container">
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-sm-10">

            <div class="row ">
                <div class="col-sm03 mr-5">
                    <img class="profile-image" src="/images/user/default.png" alt="company picture">
                
                </div>
                <div class="col-sm-09">
                    <h3>
                    {{ auth::user()->first_name }} {{ auth::user()->last_name }}
                    <small class="text-muted">&commat;{{auth::user()->username}}</small> 
                    </h3>
                    <hr>

                    <!-- Company info  -->
                    
                    
                    <a href="/company/edit">
                        <button class="btn btn-dark btn-lg ">
                            Edit Company Details
                        </button>
                    </a>
                    
                    <a href="/delete">    
                     <button class="btn btn-danger btn-lg"> Delete Company </button>
                    </a>
                </div>
                
            </div>
            
        </div>
    </div>
</div>

@endsection
