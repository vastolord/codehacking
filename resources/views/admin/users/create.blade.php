@extends('layouts.admin')



@section('content')

  <h1>Create</h1>


     {!! Form::open(['method'=>'post','action'=>'AdminUsersController@store','files'=>'true']) !!}
     <div class="form-group">

            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
     </div>

  <div class="form-group">

    {!! Form::label('email','Email:') !!}
    {!! Form::email('email',null,['class'=>'form-control']) !!}
  </div>
  <div class="form-group">

    {!! Form::label('role_id','Role:') !!}
    {!! Form::select('role_id',$roles,null,['class'=>'form-control']) !!}
  </div>

  <div class="form-group">

    {!! Form::label('is_active','Status:') !!}
    {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),0,['class'=>'form-control']) !!}
  </div>
<div class="form-group">

            {!! Form::label('photo_id','Photo:') !!}
            {!! Form::image('photo_id',null,['class'=>'form-control']) !!}
     </div>


  <div class="form-group">

    {!! Form::label('password','Password:') !!}
    {!! Form::password('password',['class'=>'form-control']) !!}
  </div>


  <div class="form-group">
       {!! Form::submit('submit',['class'=>'btn btn-primary']) !!}

       </div>
       {{csrf_field()}}

         {!! Form::close() !!}

@include('includes.form_error')


    @stop