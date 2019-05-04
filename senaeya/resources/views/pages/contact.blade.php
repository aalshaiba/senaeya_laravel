@extends('layout.layout')
@section('title', 'Contact us')
@section('content')
    <h3>Contact us</h3>
    <div class="border mb-2"></div>
    <h4>Our Approach</h4>
    <p>Simple is powerful.</p>

    <h4>Our Story</h4>
    <p>We know what you are suffering from. So we started the journey to solve this mystery</p>
    <div class="border mb-2"></div>
    <div class="text-center"><h4>Meet the Team</h4>
        <p>We are a small team. Agile and productive. Everyone of you is a member, help us to build a
            better
            directory
            🙂</p></div>

    <div class="row mt-5 text-center">

        <div class="col-sm mb-4">
            <figure><img src="{{asset('images/abdulla.jpeg')}}" class="figure">
                <div class="font-weight-bold">Abdulla</div>
                <figcaption class="text-muted figure-caption">Co-Founder</figcaption>
            </figure>
        </div>
        <div class="col-sm mb-4">
            <figure>
                <img src="{{asset('images/wael.png')}}">
                <div class="font-weight-bold">Wael</div>
                <figcaption class="text-muted figure-caption">Co-Founder</figcaption>
            </figure>
        </div>
        <div class="col-sm">
            <figure><img src="{{asset('images/joinus.png')}}">
                <div class="font-weight-bold">Join us</div>
                <figcaption class="text-muted figure-caption">Marketing Manager</figcaption>
            </figure>
        </div>
    </div>
    <div class="border mb-2"></div>

@endsection()
