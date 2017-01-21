@extends('layouts.master')

@section('content')
<h1>Welcome Home</h1>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit ipsum, modi quo fuga quisquam tempore commodi molestiae est quas ea laborum tempora, excepturi saepe assumenda, cupiditate nulla illo harum odit.</p>
<hr>

<a href="{{ route('tasks.index') }}" class="btn btn-info">View Tasks</a>

<a href="{{ route('tasks.create') }}" class="btn btn-primary">Add New Tasks</a>
@stop