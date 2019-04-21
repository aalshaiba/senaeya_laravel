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
                       placeholder="Number">
            </div>
            <div class="form-group">
                <input type="number" value="{{ $shop->mobile }}" name="workshop_mobile_number" class="form-control" placeholder="Mobile Number">
            </div>
            <div class="form-group">
                <textarea type="text" name="workshop_address" class="form-control"
                          placeholder="Location Address">{{$shop->address}}</textarea>
            </div>
            <div class="form-group">
                <input type="text" value="{{$shop->url}}" name="workshop_url" class="form-control"
                       placeholder="Google Location URL">
            </div>
            <div class="form-group">
                <textarea type="text" name="workshop_services" class="form-control" placeholder="Services">{{$shop->services}}</textarea>
            </div>
            <div class="form-group">
                <textarea type="text" name="car_models" class="form-control" placeholder="Car Models">{{$shop->car_models}}</textarea>
            </div>
            <div class="form-group">
                <textarea type="text" name="categories" class="form-control" placeholder="Categories">{{$shop->categories}}</textarea>
            </div>
            <div class="form-group">
                <textarea type="text" name="promotions" class="form-control" placeholder="Promotions / Offers">{{$shop->promotions}}</textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Default checkbox
                </label>
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    @endguest

@endsection
