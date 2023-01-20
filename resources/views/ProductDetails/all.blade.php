@extends('headerfooter.index')
@section('style')
    <link rel="stylesheet" href="{{ asset('table.css') }}">
@endsection
@section('body_section')
<div class="container">
    <div class="row">
        <div class="col-6 tab">
                <table class="table table-hover mt-5 border ">
                    <thead class="bg-dark">
                        <tr>
                        <td class="text-white">ID</td>
                        <td class="text-white">Catagory</td>
                        <td class="text-white">Slug</td>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @isset($data)
                        @foreach ($data as $catagory)
                        <tr>
                            <td>{{ $catagory->id}}</td>
                            <td class="font-weight-bold">{{ $catagory->catagory_name}}</td>
                            <td>{{ $catagory->slug}}</td>
                           
                        </tr>
                        @endforeach
                        @endisset
                    </tbody>
                  </table>
             </div>
             <div class="col-6">
                <table class="table table-hover mt-5 border">
                    <thead class="bg-dark">
                        <tr>
                        <td class="text-white">ID</td>
                        <td class="text-white">Brand</td>
                        <td class="text-white">Owner/CEO Name</td>
                        <td class="text-white">Email</td>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($brand)
                        @foreach ($brand as $brands)
                        <tr>
                            <td>{{ $brands->id}}</td>
                            <td class="font-weight-bold">{{ $brands->brandname}}</td>
                            <td>{{ $brands->ownername}}</td>  
                            <td>{{ $brands->comapanyEmail}}</td>
                        </tr>   
                        @endforeach
                        @endisset
                    </tbody>
                  </table>
             </div>
    </div>
    <div class="row">
        <div class="col-6">
            <table class="table table-hover mt-5 border">
                <thead class="bg-dark">
                    <tr>
                    <td class="text-white">ID</td>
                    <td class="text-white">subCatagory Name</td>
                    <td class="text-white">Slug</td>
                    <td class="text-white">catagory</td>
                    </tr>
                </thead>
                <tbody>
                    @isset($subcata)
                    @foreach ($subcata as $subcatagory)
                    <tr>
                        <td>{{ $subcatagory->id}}</td>
                        <td class="font-weight-bold">{{ $subcatagory->subcatagory_name}}</td>
                         </td><td>{{ $subcatagory->slug}}</td>
                        <td class="font-weight-bold">{{$subcatagory->catagory?$subcatagory->catagory->id:''}}
                    </tr>
                    @endforeach
                    @endisset
                </tbody>
              </table>
        </div>

        <div class="col-6">
            <table class="table table-hover mt-5 border">
                <thead class="bg-dark">
                    <tr>
                    <td class="text-white">ID</td>
                    <td class="text-white">Color Name</td>
               
                    </tr>
                </thead>
                <tbody>
                    @isset($color)
                    @foreach ($color as $subcatagory)
                    <tr>
                        <td>{{ $subcatagory->id}}</td>
                        <td class="font-weight-bold">{{ $subcatagory->colorname}}</td>
                    </tr>
                    @endforeach
                    @endisset
                </tbody>
              </table>
        </div>

        <div class="col-6">
            <table class="table table-hover mt-5 border">
                <thead class="bg-dark">
                    <tr>
                    <td class="text-white">ID</td>
                    <td class="text-white">staff Name</td>
                    <td class="text-white">Department Name</td>
                    <td class="text-white">Address</td>
                    <td class="text-white">Contact number</td>
               
                    </tr>
                </thead>
                <tbody>
                @isset($staffs)
                    @foreach ($staffs as $subcatagory)
                    <tr>
                        <td>{{ $subcatagory->id}}</td>
                        <td class="font-weight-bold">{{ $subcatagory->staffname}}</td>
                        <td class="font-weight-bold">{{ $subcatagory->department_id}}</td>
                        <td class="font-weight-bold">{{ $subcatagory->address}}</td>
                        <td class="font-weight-bold">{{ $subcatagory->number}}</td>
                    </tr>
                    @endforeach
                    @endisset
                </tbody>
              </table>
        </div>

        <div class="col-6">
            <table class="table table-hover mt-5 border">
                <thead class="bg-dark">
                    <tr>
                    <td class="text-white">ID</td>
                    <td class="text-white">Department Name</td>
                    <td class="text-white">Department Head</td>
               
                    </tr>
                </thead>
                <tbody>
                    @isset($depart)
                    @foreach ($depart as $subcatagory)
                    <tr>
                        <td>{{ $subcatagory->id}}</td>
                        <td class="font-weight-bold">{{ $subcatagory->department}}</td>
                        <td class="font-weight-bold">{{ $subcatagory->departmenthead}}</td>
                    </tr>
                    @endforeach
                    @endisset
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection