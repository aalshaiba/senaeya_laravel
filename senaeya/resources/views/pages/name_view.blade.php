@extends('layout.layout')
@section('content')

    <h4>Change Your name</h4>
    <div class="dropdown-divider my-3"></div>
    <form method="POST" action="{{ URL::route('apply') }}" class="d-inline">

        @csrf
        <input type="text" name="name" class="form-control mb-3" placeholder="Name" value="{{auth()->user()->name}}">
        <button type="submit" class="btn btn-dark">Update</button>
    </form>
    <form method="GET" action="/" class="d-inline">
        @csrf
        <button class="btn btn-info">Cancel</button>
    </form>

@endsection
