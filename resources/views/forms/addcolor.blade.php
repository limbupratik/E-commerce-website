@extends('headerfooter.index')
@section('style')
    <link rel="stylesheet" href="{{ asset('style/forms/addcatagory.css') }}">
@endsection
@section('body_section')
<div class="container-fluid">
    <div class="container">
        <form action="{{route('color.store')}}" method="post">
            @csrf
        <div class="card mt-5 border border-white">
            <h1 class="text-align-center">
                Add Color
            </h1>
            <div class="row g-3 mt-4">
                <div class="col">
                    <label for="color" class="font-weight-bold">colorname</label>
                    <input type="text" name="colorname" id="colorname" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
              </div>
              <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </div>
    </form>
    </div>
</div>
@endsection