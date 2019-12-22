@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Company') }}</div>

                <div class="card-body">
                {!! Form::open(['action' => 'CompanyProfileController@store', 'method'=>'POST']) !!}

                        <div class="form-group row">
                            {{Form::label('name','Name')}}
                            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Name of the Company'])}}
                        </div>

                        <div class="form-group row">
                            {{Form::label('industry','Industry')}}
                            {{Form::text('industry','',['class'=>'form-control','placeholder'=>'Industry of the Company'])}}
                                                                               
                        </div>

                        <div class="form-group row">
                            {{Form::label('address','Address')}}
                            {{Form::text('address','',['class'=>'form-control','placeholder'=>'Address of the Company'])}}
                                                                               
                        </div>

                        <div class="form-group row">
                            {{Form::label('details','Details')}}
                            {{Form::textarea('details','',['class'=>'form-control','placeholder'=>'Details of the Company'])}}
                                                                               
                        </div>

                        

                        <div class="form-group row justify-content-center mb-0">
                            <div class="col-md-6 text-center">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
