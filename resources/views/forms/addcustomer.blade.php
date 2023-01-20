@extends('headerfooter.index')
@section('style')
    <link rel="stylesheet" href="{{ asset('style/forms/addcatagory.css') }}">
@endsection
@section('body_section')
<div class="container-fluid">
    <div class="container">
        <form action="{{route('customer.store')}}" method="post">
            @csrf
        <div class="card mt-5 border border-white">
            <h1 class="text-align-center">
                Add Color
            </h1>
            <div class="row g-3 mt-4">
                <div class="col-6">
                    <label for="customername" class="font-weight-bold">Customer name</label>
                    <input type="text" name="customername" id="customername" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col-6">
                    <label for="number" class="font-weight-bold">phone number</label>
                    <input type="number" name="number" id="number" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col-6">
                    <label for="street" class="font-weight-bold">Street number</label>
                    <input type="text" name="street" id="street" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col-6">
                    <label for="email" class="font-weight-bold">email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col-6">
                    <label for="zipcode" class="font-weight-bold">Zip code</label>
                    <input type="text" name="zipcode" id="zipcode" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col-6">
                    <label for="card" class="font-weight-bold">Card number</label>
                    <input type="text" name="card" id="card" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col-6">
                    <label for="address" class="font-weight-bold">Address</label>
                    <input type="text" name="address" id="address" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
              </div>
              <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </div>
    </form>
    </div>
</div>
@endsection