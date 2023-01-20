@extends('headerfooter.index')
@section('style')
    <link rel="stylesheet" href="{{ asset('style/forms/addcatagory.css') }}">
@endsection
@section('body_section')
<div class="container-fluid">
    <div class="container">
        <form action="{{route('brand.store')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="card mt-5 border border-white">
            <h1 class="text-align-center">
                Add Brand
            </h1>
            <div class="row g-3 mt-4">
                <div class="col">
                    <label for="brandname" class="font-weight-bold">Brand/ Supplier Name</label>
                    <input type="text" name="brandname" id="catagory_name" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col">
                    <label for="slug"class="font-weight-bold">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
              </div>
              <div class="row g-3 mt-4 mb-5">
                <div class="col">
                    <label for="ownername"class="font-weight-bold">Owner Name/ CEO Name </label>
                    <input type="text" name="ownername" id="adder_name" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col">
                    <label for="Logo"class="font-weight-bold">Logo</label><br>
                    <input type="file" name="logo">
                </div>
              </div>
              <div class="row g-3 mt-4 mb-5">
                <div class="col">
                    <label for="contractperiod"class="font-weight-bold">Contact period</label>
                    <input type="text" name="contractperiod" id="adder_name" class="form-control" placeholder="Enter contract priod in months.." aria-describedby="helpId">
                </div>
                <div class="col">
                    <label for="contractfile"class="font-weight-bold">Contract File</label><br>
                    <input type="file" name="contractfile">
                </div>
              </div>
              <div class="row g-3 mt-4 mb-5">
                <div class="col">
                    <label for="contactnumber"class="font-weight-bold">Contact Number</label>
                    <input type="number" name="contactnumber" id="adder_name" class="form-control " placeholder="" aria-describedby="helpId">
                </div>
                <div class="col">
                    <label for="email "class="font-weight-bold">Company E-mail</label>
                    <input type="email" name="comapanyEmail" id="adder_name" class="form-control " placeholder="" aria-describedby="helpId">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
</div>
@endsection