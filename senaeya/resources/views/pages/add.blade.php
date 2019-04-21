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
                <textarea type="text" name="workshop_address" class="form-control"
                          placeholder="Location Address"></textarea>
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
            <label class="form-text text-muted">Categories (Select one or more)</label>
            <div class="form-group">
                <div class="form-row">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox" value="Auto Repairing">
                            <label class="form-check-label">Auto Repairing</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox"
                                   value="Car Air Conditioning">
                            <label class="form-check-label">Car Air Conditioning</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox" value="Car Dealers">
                            <label class="form-check-label">Car Dealers</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox"
                                   value="Car Recovery Services">
                            <label class="form-check-label">Car Recovery Services</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox" value="Car Repair">
                            <label class="form-check-label">Car Repair</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox"
                                   value="Car Wash & Polish Centres">
                            <label class="form-check-label">Car Wash & Polish Centres</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox"
                                   value="Electric Motor Rewinding Services">
                            <label class="form-check-label">Electric Motor Rewinding Services</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox"
                                   value="Fuel Injection Parts & Services">
                            <label class="form-check-label">Fuel Injection Parts & Services</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox" value="Garage Services">
                            <label class="form-check-label">Garage Services</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox"
                                   value="Generator Suppliers">
                            <label class="form-check-label">Generator Suppliers</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="categories[]" type="checkbox"
                                   value="Wheel Alignment, Frame & Axle Servicing">
                            <label class="form-check-label">Wheel Alignment, Frame & Axle Servicing</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <textarea type="text" name="promotions" class="form-control"
                          placeholder="Promotions / Offers"></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Save</button>
            <a href="/" class="btn btn-info">Cancel / Back</a>
        </form>
    @endguest

@endsection
