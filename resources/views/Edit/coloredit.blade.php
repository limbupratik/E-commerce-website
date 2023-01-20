@extends('headerfooter.index')
@section('style')
    <link rel="stylesheet" href="{{ asset('style/forms/addcatagory.css') }}">
@endsection
@section('body_section')
<div class="container-fluid">
    <div class="container">
        <form action="{{route('color.update',$color->id)}}" method="post">
            @csrf
            @method('put')
        <div class="card mt-5 border border-white">
            <h1 class="text-align-center">
                Edit Color
            </h1>
            <div class="row g-3 mt-4">
                <div class="col">
                    <label for="color" class="font-weight-bold">colorname</label>
                    <input type="text" name="colorname" id="colorname" class="form-control" placeholder="" aria-describedby="helpId" value="{{$color->colorname}}">
                </div>
              </div>
              <button type="submit" class="btn btn-primary mt-4">update</button>
            </div>
        </form>
    </div>
</div>
@endsection