@extends('layout.layout')
@section('content')

    <h3>lol</h3>
    <form method="POST" action="{{ URL::route('apply') }}">

        @csrf
        <input type="text" name="name" class="form-control" placeholder="Name" value="{{auth()->user()->name}}">
        <button type="submit" class="btn btn-dark">Update</button>
    </form>
    <form method="GET" action="/">
        @csrf
        <button class="btn btn-info">Cancel</button>
    </form>

@endsection
