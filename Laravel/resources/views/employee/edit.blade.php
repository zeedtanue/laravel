@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Employee') }}</div>

                <div class="card-body">
                {!! Form::open(['action' => ['EmployeeDetailsController@update',$employees->id], 'method'=>'POST']) !!}

                        <!-- Name-->
                        <div class="form-group row">
                            {{Form::label('name','Name')}}
                            {{Form::text('name',$employees->name,['class'=>'form-control','placeholder'=>'Name of the Employee'])}}
                        </div>


                        <!-- -->
                        <div class="form-group row">
                            {{Form::label('position','Position')}}
                            {{Form::text('position',$employees->position,['class'=>'form-control','placeholder'=>'Position'])}}
                                                                               
                        </div>

                        <div class="form-group row">
                            {{Form::label('salary','Salary')}}
                            {{Form::number('salary',$employees->salary,['class'=>'form-control','placeholder'=>'Salary'])}}
                                                                               
                        </div>

                        <div class="form-group row">
                            {{Form::label('joining_date','Joining Date')}}
                            {{Form::date('joining_date',$employees->joining_date,['class'=>'form-control'])}}
                                                                               
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
