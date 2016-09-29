@extends('layouts.admin')



@section('content')


    <h1>Create index</h1>

    {!! Form::open(['method'=>'post','action'=>'AdminPostsController@store','files'=>'true']) !!}
    <div class="form-group">

        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('category_id','Category:') !!}
        {!! Form::select('category_id',[''=>'Chose Options']+$category->all(),null,['class'=>'form-control']) !!}
    </div>



    <div class="form-group">

        {!! Form::label('photo_id','Photo:') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">

        {!! Form::label('body','Discription:') !!}
        {!! Form::textarea('body',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('submit',['class'=>'btn btn-primary']) !!}

    </div>
    {{csrf_field()}}

    {!! Form::close() !!}


    @include('includes.form_error')

@stop