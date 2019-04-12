@extends('layout.layout')
@section('title', 'Add your business')
@section('content')
    @guest
        @include('auth.login')
    @else
        <form method="POST" action="{{ route('shops.update', $shop) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="text" name="workshop_name" class="form-control" placeholder="Enter workshop name"
                       value="{{$shop->name}}">
            </div>
            <div class="form-group">
                <input type="text" value="{{ $shop->number }}" name="workshop_number" class="form-control"
                       placeholder="Enter number">
            </div>
            <div class="form-group">
                <textarea type="text" name="workshop_address" class="form-control"
                          placeholder="Location Address">{{$shop->address}}</textarea>
            </div>
            <div class="form-group">
                <input type="text" value="{{$shop->url}}" name="workshop_url" class="form-control"
                       placeholder="Enter Google Url">
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    @endguest

@endsection
