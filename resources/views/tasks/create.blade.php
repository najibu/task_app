@extends('layouts.master')

@section('content')
  <h1>Add a new Task</h1>

  <p class="lead">Add to your task list below.</p>

  {!! Form::open([
    'route' => 'tasks.store'
  ]) !!}

  @include('partials.errors')
  
  @if(Session::has('flash_message'))
    <div class="alert alert-success">
      {{ Session::get('flash_message') }}
    </div>
  @endif

  <div class="form-group">
      {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
      {!! Form::text('title', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
      {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
      {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
  </div>

  {!! Form::submit('Create New Task', ['class' => 'btn btn-primary']) !!}

  {!! Form::close() !!}
@stop