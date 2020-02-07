@extends('layouts.app')
@section('content')
<h1>Contact</h1>
{!!Form::open(['url'=>'contact/submit']) !!}
<div class="form-group">
  {{Form::label('name','Name')}}
  {{Form::text('name','',['class' =>'form-control','placeholder' => 'Enter your name'])}}
</div>
<div class="form-group">
  {{Form::label('email','E-mail address')}}
  {{Form::text('email','',['class' =>'form-control','placeholder' => 'Enter your e-mail address'])}}
</div>
<div class="form-group">
  {{Form::label('message','Cucckombó')}}
  {{Form::textarea('message','',['class' =>'form-control','placeholder' => 'Enter your cucckombó'])}}
</div>
<div class="form-group">
  {{Form::submit('submit',['class'=>'btn btn-primary'])}}
</div>

{!! Form::close() !!}

@endsection
