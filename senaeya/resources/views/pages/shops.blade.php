@extends('layout.layout')
@section('title', 'List of Shops')
@section('content')
    <form class="form-inline my-2 my-lg-0" method="GET" action="/shops">
        <div class="input-group mt-2" style="width:100%;">
            <input type="text" name="q" class="form-control" id="inlineFormInputGroup"
                   placeholder="Search">
            <div class="input-group-append">
                <button class="btn btn-dark" type="submit"><i class="fas fa-search white"></i></button>
            </div>
        </div>
        <small class="text-muted">{{count($shops)}} {{count($shops) > 1 ? 'Results' : 'Result'}}</small>
    </form>
    <ul class="list-group list-group-flush">
        @if(count($shops) > 0)
            @foreach($shops as $shop)
                <li class="list-group-item">
                    <a class="mb-0 h5 text-dark text-decoration-none" href="{{$shop->url}}">{{$shop->name}}</a>
                    <br>
                    <small class="text-success my-0">Tel: {{$shop->number}}</small>
                    <br>
                    <small class="text-secondary mb-2">{{$shop->address}}</small>
                </li>
            @endforeach
        @else
            <p>No Results Found</p>
        @endif

    </ul>
@endsection
