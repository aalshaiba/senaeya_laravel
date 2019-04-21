@extends('layout.layout')
@section('title', 'Add your business')
@section('content')
    @guest
        @include('auth.login')
    @else
        <form method="POST" action="{{ route('shops.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="workshop_name" class="form-control" placeholder="Workshop name">
            </div>
            <div class="form-group">
                <input type="number" name="workshop_number" class="form-control" placeholder="Number">
            </div>
            <div class="form-group">
                <input type="number" name="workshop_mobile_number" class="form-control" placeholder="Mobile Number">
            </div>
            <div class="form-group">
            <textarea type="text" name="workshop_address" class="form-control" placeholder="Location Address"></textarea>
            </div>
            <div class="form-group">
                <input type="text" name="workshop_url" class="form-control" placeholder="Google Location URL">
            </div>
            <div class="form-group">
                <textarea type="text" name="workshop_services" class="form-control" placeholder="Services"></textarea>
            </div>
            <div class="form-group">
                <textarea type="text" name="car_models" class="form-control" placeholder="Car Models"></textarea>
            </div>
            <div class="form-group">
                <textarea type="text" name="categories" class="form-control" placeholder="Categories"></textarea>
            </div>
            <div class="form-group">
                <textarea type="text" name="promotions" class="form-control" placeholder="Promotions / Offers"></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    @endguest

@endsection
