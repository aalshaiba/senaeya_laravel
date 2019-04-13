@extends('layout.layout')
@section('content')

    <h3>You are about to delete {{$shop->name}} Are you sure ?</h3>
    <form method="POST" action="{{ route('shops.destroy', $shop) }}">
        @csrf
        {{method_field('DELETE')}}
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <form method="GET" action="/">
        @csrf
        <button class="btn btn-info">Cancel</button>
    </form>

@endsection()
