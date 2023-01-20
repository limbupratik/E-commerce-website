@extends('headerfooter.index')
@section('style')
    <link rel="stylesheet" href="{{ asset('style/forms/addcatagory.css') }}">
@endsection
@section('body_section')
<div class="container-fluid">
    <div class="container">
        <form action="{{route('department.store')}}" method="post">
            @csrf
        <div class="card mt-5 border border-white">
            <h1 class="text-align-center">
                Add Department
            </h1>
            <div class="row g-3 mt-4">
                <div class="col-6">
                    <label for="department" class="font-weight-bold">Department Name:</label>
                    <input type="text" name="department" id="department" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col-6">
                    <label for="departmenthead" class="font-weight-bold">Departmenthead Name:</label>
                    <input type="text" name="departmenthead" id="departmenthead" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
              </div>
              <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </div>
    </form>
    </div>
</div>
@endsection