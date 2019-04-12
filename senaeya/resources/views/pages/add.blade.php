@extends('layout.layout')
@section('title', 'Add your business')
@section('content')
    @guest
        @include('auth.login')
    @else
        <form method="POST" action="/shops">
            @csrf
            <div class="form-group">
                <input type="text" name="workshop_name" class="form-control" placeholder="Enter workshop name">
            </div>
            <div class="form-group">
                <input type="text" name="workshop_number" class="form-control" placeholder="Enter number">
            </div>
            <div class="form-group">
            <textarea type="text" name="workshop_address" class="form-control" placeholder="Location Address"></textarea>
            </div>
            <div class="form-group">
                <input type="text" name="workshop_url" class="form-control" placeholder="Enter Google Url">
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    @endguest

@endsection
