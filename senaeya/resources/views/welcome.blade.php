@extends('layout.layout')

@section('content')

    @guest
        <h3>Senaeya aims to be the best industrial area guid in the city</h3>
        <div class="border my-4"></div>
    @else
        @if (Session::has('message'))
            <div class="alert alert-info">{{Session::get('message')}}</div>
        @endif
        <h3>Welcome {{ Auth::user()->email }}</h3>
        <a class="btn btn-dark" href="{{ route('shops.create') }}">Add Your Business</a>
        <ul class="list-group list-group-flush mt-3">
            @if(count($shops) > 0)
                @foreach($shops as $shop)
                    <li class="list-group-item">
                        <a class="mb-0 h5 text-dark text-decoration-none" href="{{$shop->url}}">{{$shop->name}}</a>
                        <br>
                        <small class="text-success my-0">Tel: {{$shop->number}}</small>
                        <br>
                        <small class="text-secondary mb-2">{{$shop->address}}</small>
                        <form method="POST" action="{{ route('shops.destroy', $shop) }}">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Delete
                            </button>
                        </form>
                        <form method="GET" action="{{ route('shops.edit', $shop->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-info">Edit
                            </button>
                        </form>
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
