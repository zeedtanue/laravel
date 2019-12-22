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
  <div class="row">
    <h3>
      Employee Details
    </h3>

    <a href="/employee/create">
      <button class="btn btn-primary float-right ">
        Add New Employee
      </button>
    </a> 
  </div>
  <hr>
  <table class="table table-bordered">
    <thead>
      <tr>
      
        <th scope="col">Name</th>
        <th scope="col">Position</th>
        <th scope="col">Salary</th>
        <th scope="col">Joining Date</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
  
    <!--Table of employees-->
    @if(!empty($employees) && count($employees) > 0)
      @foreach($employees as $employee)
        <tbody>
          <td>{{$employee->name}} </td>
          <td>{{$employee->position}} </td>
          <td>{{$employee->salary}} </td>
          <td>{{$employee->joining_date}} </td>
          <!-- buttons for edit and delete-->
          <td>
            <a href="/employee/edit/{{$employee->id}}">
              <button class="btn btn-dark ">
                Edit
              </button>
            </a>
        
            {!! Form::open(['action' => ['EmployeeDetailsController@delete',$employee->id], 'method'=>'POST','class'=>'float-right' ]) !!}

              {{Form::hidden('_method','GET')}}
              {{Form::submit('Delete',['class'=>'btn btn-danger'] )}}

            {!!Form::close()!!}
        
        
          </td>
      </tbody>
    @endforeach


  @endif 
    
  
  </table>
</div>

@endsection
