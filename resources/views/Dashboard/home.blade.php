@extends('headerfooter.index')
@section('style')
<link rel="stylesheet" href="{{ asset('style/dindex.css') }}"> 
@endsection
@section('body_section')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card-4 mt-5 pt-5 pl-3 text-white">
                    <h4>Product Sold</h4>
                    <h3>$ 579,000</h3>
                    <p>Saved 25%</p>
                </div>
            </div>
            <div class="col-6 mt-5">
                <div class="card-2 pt-5 pl-3 text-white">
                    <h4>Net Income</h4>
                    <h3>$ 579,000</h3>
                    <p>Saved 25%</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card-2 mt-5 pt-5 pl-3 text-white">
                    <h4>Purchase</h4>
                    <h3>$ 579,000</h3>
                    <p>Saved 25%</p>
                </div>
            </div>
            <div class="col-6 mt-5">
                <div class="card-4 pt-5 pl-3 text-white">
                    <h4>Gross Profit</h4>
                    <h3>$ 579,000</h3>
                    <p>Saved 25%</p>
                </div>
            </div>
        </div>
    </div>
@endsection