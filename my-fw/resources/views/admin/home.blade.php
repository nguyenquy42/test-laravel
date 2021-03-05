@extends('layout.bodyadmin')

@section('title', 'Home | Lpbooks')


@section('content')

        <h1>hello, {{ session('email') }} </h1>
        <a href="/logout">logut</a>

@endsection