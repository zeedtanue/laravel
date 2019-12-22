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
    
    <div class="row justify-content-center">
        <div class="col-sm-10">

            <div class="row ">
                <div class="col-sm03 mr-5">
                    <img class="profile-image" src="/images/user/default.png" alt="Your profile image">
                
                </div>
                <div class="col-sm-09">
                    <h3>
                    {{ auth::user()->first_name }} {{ auth::user()->last_name }}
                    <small class="text-muted">&commat;{{auth::user()->username}}</small> 
                    </h3>
                    <hr>

                    <!-- User info  -->
                    <h5>First Name: <small>{{ auth::user()->first_name }}</small></h5>
                    <h5>Last Name: <small>{{ auth::user()->last_name }}</small></h5>
                    <h5>User Name: <small>{{ auth::user()->username }}</small></h5>
                    <h5>Email: <small>{{ auth::user()->email }}</small> </h5>


                    
                    <a href="/user/edit">
                        <button class="btn btn-dark btn-lg ">
                            Edit
                        </button>
                    </a>
                    
                    <a href="/delete/{{auth::user()->id}}">    
                     <button class="btn btn-danger btn-lg"> Delete </button>
                    </a>
                </div>
                
            </div>
            
        </div>
    </div>
</div>
@endsection
