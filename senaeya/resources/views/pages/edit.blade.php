@extends('layout.layout')
@section('title', 'Add your business')
@section('content')
    @guest
        @include('auth.login')
    @else
        <a href="/" class="btn btn-info mb-3">Cancel / Back</a>
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
                <input type="number" value="{{ $shop->mobile }}" name="workshop_mobile_number" class="form-control"
                       placeholder="Mobile Number">
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
                <textarea type="text" name="workshop_services" class="form-control"
                          placeholder="Services">{{$shop->services}}</textarea>
            </div>
            <div class="form-group">
                <textarea type="text" name="car_models" class="form-control"
                          placeholder="Car Models">{{$shop->car_models}}</textarea>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox"
                                   value="Auto Repairing"
                                   @if(strpos($shop->categories, 'Auto Repairing') !== false)
                                   checked
                                    @endif
                            >
                            <label class="form-check-label">Auto Repairing</label>
                        </div>
                        <div class="form-check">

                            <input class="form-check-input" name="categories[]" type="checkbox"
                                   value="Car Air Conditioning"
                                   @if(strpos($shop->categories, 'Car Air Conditioning') !== false)
                                   checked
                                    @endif
                            >
                            <label class="form-check-label">Car Air Conditioning</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox" value="Car Dealers"
                                   @if(strpos($shop->categories, 'Car Dealers') !== false)
                                   checked
                                    @endif
                            >
                            <label class="form-check-label">Car Dealers</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox"
                                   value="Car Recovery Services"
                                   @if(strpos($shop->categories, 'Car Recovery Services') !== false)
                                   checked
                                    @endif

                            >
                            <label class="form-check-label">Car Recovery Services</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox" value="Car Repair"
                                   @if(strpos($shop->categories, 'Car Repair') !== false)
                                   checked
                                    @endif
                            >
                            <label class="form-check-label">Car Repair</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox"
                                   value="Car Wash & Polish Centres"
                                   @if(strpos($shop->categories, 'Car Wash & Polish Centres') !== false)
                                   checked
                                    @endif

                            >
                            <label class="form-check-label">Car Wash & Polish Centres</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox"
                                   value="Electric Motor Rewinding Services"
                                   @if(strpos($shop->categories, 'Electric Motor Rewinding Services') !== false)
                                   checked
                                    @endif

                            >
                            <label class="form-check-label">Electric Motor Rewinding Services</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox"
                                   value="Fuel Injection Parts & Services"
                                   @if(strpos($shop->categories, 'Fuel Injection Parts & Services') !== false)
                                   checked
                                    @endif

                            >
                            <label class="form-check-label">Fuel Injection Parts & Services</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox" value="Garage Services"
                                   @if(strpos($shop->categories, 'Garage Services') !== false)
                                   checked
                                    @endif

                            >
                            <label class="form-check-label">Garage Services</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox"
                                   value="Generator Suppliers"
                                   @if(strpos($shop->categories, 'Generator Suppliers') !== false)
                                   checked
                                    @endif

                            >
                            <label class="form-check-label">Generator Suppliers</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox"
                                   value="Wheel Alignment, Frame & Axle Servicing"
                                   @if(strpos($shop->categories, 'Wheel Alignment, Frame & Axle Servicing') !== false)
                                   checked
                                    @endif

                            >
                            <label class="form-check-label">Wheel Alignment, Frame & Axle Servicing</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <textarea type="text" name="promotions" class="form-control"
                          placeholder="Promotions / Offers">{{$shop->promotions}}</textarea>
            </div>

            <button type="submit" class="btn btn-dark">Update</button>
        </form>
    @endguest

@endsection
