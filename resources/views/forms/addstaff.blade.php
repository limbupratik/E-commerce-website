@extends('headerfooter.index')
@section('style')
    <link rel="stylesheet" href="{{ asset('style/forms/addcatagory.css') }}">
@endsection
@section('body_section')
<div class="container-fluid">
    <div class="container">
        <form action="{{route('staff.store')}}" method="post">
            @csrf
        <div class="card mt-5 border border-white">
            <h1 class="text-align-center">
                Add staff
            </h1>
            <div class="row g-3 mt-4">
                <div class="col-6">
                    <label for="name" class="font-weight-bold">Staff Name</label>
                    <input type="text" name="staffname" id="name" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col-6">
                    <label for="nanumber" class="font-weight-bold">Contact Number:</label>
                    <input type="number" name="number" id="name" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col-6">
                    <label for="address" class="font-weight-bold">Address</label>
                    <input type="text" name="address" id="address" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col-6">
                    <label for="email" class="font-weight-bold">Email</label>
                    <input type="email" name="email" id="name" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col-6">
                    <label for="name" class="font-weight-bold">Department</label>
                    <select name="department_id" class="form-control" id="">
                    <option value="">Choose Department</option>
                    @foreach ($data as $department)
                    <option value="{{ $department->id}}"> {{$department->department}}</option>   
                    @endforeach
                   </select>
                </div>
                <div class="col-6">
                    <label for="position" class="font-weight-bold">Position</label>
                    <input type="position" name="position" id="position" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
              </div>
              <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </div>
    </form>
    </div>
</div>
@endsection