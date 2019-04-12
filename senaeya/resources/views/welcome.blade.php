@extends('layout.layout')

@section('content')

    @guest
        <h3>Senaeya aims to be the best industrial area guid in the city</h3>
        <div class="border my-4"></div>
    @else
        <h3>Welcome {{ Auth::user()->email }}</h3>
        <a class="btn btn-dark" href="/add">Add Your Business</a>
        @if(count($shops) > 0)
            <ul>
                @foreach($shops as $shop)
                    <li>{{$shop->name}}</li>
                @endforeach
            </ul>
        @else
            <p class="mt-3">Nothing to display</p>
        @endif

    @endguest

    <form class="form-inline my-2 my-lg-0" action="/shops">
        <div class="input-group my-2" style="width:100%;">
            <input type="text" name="q" class="form-control"
                   placeholder="Search">
            <div class="input-group-append">
                <button class="btn btn-dark" type="submit"><i class="fas fa-search white"></i></button>
            </div>
        </div>
    </form>
@endsection()
