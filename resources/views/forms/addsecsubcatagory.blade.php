@extends('headerfooter.index')
@section('style')
    <link rel="stylesheet" href="{{ asset('style/forms/addcatagory.css') }}">
@endsection
@section('body_section')
<div class="container-fluid">
    <div class="container">
        <form action="{{route('sec.store')}}" method="post">
            @csrf
        <div class="card mt-5 border border-white">
            <h1 class="text-align-center">
                Add second Sub-Catagory
            </h1>
            <div class="row g-3 mt-4">
                <div class="col">
                    <label for="catagory" class="font-weight-bold">second Sub Catagory</label>
                    <input type="text" name="Secondsubcatagory_name" id="subcatagory_name" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col">
                    <label for="slug"class="font-weight-bold">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
              </div>
              <div class="row g-3 mt-4 mb-5">
                
                <div class="col">
                   <select name="subcatagory_name" class="form-control" id="">
                    <option value="">Choose Sub-Catagory</option>
                    @foreach ($data as $sec)
                    <option value="{{ $sec->id}}"> {{$sec->subcatagory_name}}</option>   
                    @endforeach
                   </select>
                </div>
              </div>




              <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
</div>
@endsection