@extends('headerfooter.index')
@section('style')
    <link rel="stylesheet" href="{{ asset('style/forms/addcatagory.css') }}">
@endsection
@section('body_section')
<div class="container-fluid">
    <div class="container">
        <form action="{{route('subcatagory.update',$subcatagory->id)}}" method="post">
            @csrf
            @method('put')
        <div class="card mt-5 border border-white">
            <h1 class="text-align-center">
                Add Sub-Catagory
            </h1>
            <div class="row g-3 mt-4">
                <div class="col">
                    <label for="catagory" class="font-weight-bold">Sub Catagory</label>
                    <input type="text" name="subcatagory_name" id="subcatagory_name" class="form-control" placeholder="" aria-describedby="helpId" value="{{$subcatagory->subcatagory_name}}">
                </div>
                <div class="col">
                    <label for="slug"class="font-weight-bold">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control" placeholder="" aria-describedby="helpId"   value={{$subcatagory->slug}}">
                </div>
              </div>
              <div class="row g-3 mt-4 mb-5">
                <div class="col">
                    <label for="addername"class="font-weight-bold">Adder name</label>
                    <input type="text" name="adder_name" id="adder_name" disabled class="form-control" placeholder="" aria-describedby="helpId">
                </div>

                

                {{-- <div class="col">
                   <select name="catagory_name" class="form-control" id="">
                    <option value="">Choose Catagory</option>
                    @foreach ($data as $catagory)
                    <option value="{{ $catagory->id}}"> {{$catagory->catagory_name}}</option>   
                    @endforeach
                   </select>
                </div>
              </div> --}}

              <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
</div>
@endsection