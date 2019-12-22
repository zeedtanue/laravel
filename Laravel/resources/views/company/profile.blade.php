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
                <div class="col-sm-09">
                    <h3>
                    Existing Companies of
                    <small class="text-muted">&commat;{{auth::user()->username}}</small>
                    <a href="/company/create">
                        <button class="btn btn-primary btn-lg ">
                            Create New Company
                        </button>
                    </a> 
                    </h3>
                    <hr>
                    
                    @if(count($companies)>0)
                        @foreach($companies as $company)
                        <div class="card ">
                            <div class="card-header">
                                <h3>{{$company->name}}</h3>
                            </div>
                            <!-- Company info  -->
                            <div class="card-body">
                                <h5 class="card-title">Name: {{$company->name}} </h5>
                                <p class="card-text"><strong>Industry:</strong> {{$company->industry}} </p>
                                <p class="card-text"><strong>Address:</strong> {{$company->address}} </p>
                                <p class="card-text"><strong>Details:</strong> {{$company->details}} </p>

                                <a href="/company/edit/{{$company->id}}">
                                    <button class="btn btn-dark btn-lg ">
                                        Edit Company Details
                                    </button>
                                </a>
                                {!! Form::open(['action' => ['CompanyProfileController@delete',$company->id], 'method'=>'POST','class'=>'float-right' ]) !!}

                                    {{Form::hidden('_method','GET')}}
                                    {{Form::submit('Delete Company',['class'=>'btn btn-danger btn-lg'] )}}

                                {!!Form::close()!!}

                                
                                </div>
                                </div>   



                        @endforeach
                        {{$companies->links()}}


                    @else
                        <p>No Companies under your profile.</p>


                    @endif

                                        
                    
                </div>
                
            </div>
            
        </div>
    </div>
</div>

@endsection
