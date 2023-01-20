@extends('headerfooter.index')
@section('style')
    <link rel="stylesheet" href="{{ asset('style/forms/addcatagory.css') }}">
@endsection
@section('body_section')
<div class="container-fluid">
    <div class="container">
        <form action="{{route('catagory.update',$catagory->id)}}" method="post">
            @csrf
            @method('put')
        <div class="card mt-5 border border-white">
            <h1 class="text-align-center">
                Edit Catagory
            </h1>
            <div class="row g-3 mt-4">
                <div class="col">
                    <label for="catagory" class="font-weight-bold">Catagory</label>
                    <input type="text" name="catagory_name" id="catagory_name" class="form-control" placeholder="" aria-describedby="helpId" value="{{$catagory->catagory_name}}">
                </div>
                <div class="col">
                    <label for="slug"class="font-weight-bold">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control" placeholder="" aria-describedby="helpId" value="{{$catagory->slug}}">
                </div>
              </div>
              <div class="row g-3 mt-4 mb-5">
                <div class="col">
                    <label for="addername"class="font-weight-bold disable">Adder name</label>
                    <input type="text" name="adder_name" id="adder_name" class="form-control " disabled="disabled" placeholder="" aria-describedby="helpId">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    </div>
</div>
@endsection