@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Company Details') }}</div>

                <div class="card-body">
                {!! Form::open(['route' => 'company.update', 'method'=>'POST']) !!}

                        <div class="form-group row">
                            



                        </div>
                        <div class="form-group row">
                            
                            
                            
                            
                            
                        </div>

                        

                        <div class="form-group row justify-content-center mb-0">
                            <div class="col-md-6 text-center">
                                <button type="submit" class="btn btn-primary">
                                    Update
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
