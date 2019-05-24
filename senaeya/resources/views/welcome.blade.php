@extends('layout.layout')

@section('content')

    @guest
        <h3>Senaeya aims to be the best industrial area guid in the city</h3>
        <div class="border my-4"></div>
        <a class="btn btn-dark" href="{{route('login')}}">Register / Login Here</a>
    @else

        @if(Auth::user()->name != null)
            <h3>Welcome {{ Auth::user()->name }}</h3>
        @else
            <h3>Welcome {{ Auth::user()->email }}</h3>
        @endif
        <a class="btn btn-dark" href="{{ route('shops.create') }}">Add Your Business</a>
        <a class="btn btn-dark" href="{{ URL::route('name') }}">Update your name</a>
        <a class="btn btn-dark" href="{{ URL::route('link') }}">Link your account to Existing Business</a>
        <ul class="list-group list-group-flush mt-3">
            @if(count($shops) > 0)
                @foreach($shops as $shop)
                    <li class="list-group-item">
                        <a class="mb-0 h5 text-dark text-decoration-none" href="{{$shop->url}}">{{$shop->name}}</a>
                        <br>
                        <small class="text-success my-0">Tel: {{$shop->number}}</small>
                        <br>
                        <small class="text-secondary mb-2">{{$shop->address}}</small>
                        <div class="float-right">
                            <form class="d-inline" method="GET" action="{{ route('shops.show', $shop->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete
                                </button>
                            </form>
                            <form class="d-inline" method="GET" action="{{ route('shops.edit', $shop->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-info">Edit
                                </button>
                            </form>
                        </div>
                    </li>
                @endforeach
            @else
                <p>No Results Found</p>
            @endif

        </ul>

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
