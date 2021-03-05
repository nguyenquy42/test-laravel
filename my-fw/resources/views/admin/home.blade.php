@extends('layout.bodyadmin')

@section('title', 'Home | Lpbooks')


@section('content')

  <h1>hello, {{ session('email') }} </h1>
  <a href="/logout">logut</a>

  @if (session('status'))
  <div class="alert alert-success" role="alert">
    {{ session('status') }}
  </div>
  @endif

@endsection