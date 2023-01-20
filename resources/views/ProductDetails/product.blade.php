@extends('headerfooter.index')
@section('body_section')
<div class="container">

<table class="table table-hover mt-5">
    <thead class="bg-dark">
        <tr>
        <td class="text-white">ID</td>
        <td class="text-white">Product Name</td>
        <td class="text-white">Slug</td>
        <td class="text-white">Size</td>
        <td class="text-white">Warranty</td>
        <td class="text-white">Category</td>
        <td class="text-white">sub category</td>
        <td class="text-white">Sec-Cub category</td>
        <td class="text-white">brand</td>
        <td class="text-white">Price</td>
        <td class="text-white">color</td>
        <td class="text-white">Discount</td>
        <td class="text-white"></td>

      
        <td></td>
        <td></td>
        </tr>
    </thead>
    <tbody>
        @isset($data)
        @foreach ($data as $pro)
        <tr>
            <td>{{ $pro->id}}</td>
            <td class="font-weight-bold">{{ $pro->productname}}</td>
            <td class="font-weight-bold">{{ $pro->slug}}</td>
            <td class="font-weight-bold">{{ $pro->size}}</td>
            <td class="font-weight-bold">{{ $pro->warranty}}</td>
            {{-- <td class="font-weight-bold">{{$pro->catagory?$pro->catagory->catagory_name:''}}</td> --}}






            <td><a href="{{route('pro.edit',$pro->id)}}">Edit</a></td>
            <td>
                <form action="{{ route('pro.destroy',$pro->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="border border-white bg-white">Delete</button>
                </form>
            </td>   
        </tr>
        @endforeach
        @endisset
    </tbody>
  </table>
  @endsection