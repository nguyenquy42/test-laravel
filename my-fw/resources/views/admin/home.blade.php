@extends('layout.bodyadmin')

@section('title', 'Home | Lpbooks')


@section('content')

  <h1>Hello, {{ session('username') }} </h1>

  @if (session('status'))
  <div class="alert alert-success" role="alert">
    {{ session('status') }}
  </div>
  @endif

@endsection