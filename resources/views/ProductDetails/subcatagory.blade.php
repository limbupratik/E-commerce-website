@extends('headerfooter.index')
@section('body_section')
<div class="container">
    <table class="table table-hover mt-5">
        <thead class="bg-dark">
            <tr>
            <td class="text-white">ID</td>
            <td class="text-white">Subcatagory name</td>
            <td class="text-white">Catagory</td>
            <td class="text-white">slug</td>
            <td class="text-white"></td>
            <td class="text-white"></td>
            <td></td>
            </tr>
        </thead>
        <tbody>
            @isset($data)
            @foreach ($data as $subcatagory)
            <tr>
                <td>{{ $subcatagory->id}}</td>
                
                <td class="font-weight-bold">{{$subcatagory->subcatagory_name}}</td>
                <td class="font-weight-bold">{{$subcatagory->catagory?$subcatagory->catagory->id:''}}</td>
                <td>{{ $subcatagory->slug}}</td>
                <td>{{ $subcatagory->adder_name}}</td>
                <td><a href="{{route('subcatagory.edit',$subcatagory->id)}}">Edit</a></td>
                <td>
                    <form action="{{ route('subcatagory.destroy',$subcatagory->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="border border-white bg-white">Delete</button>
                </td>   
            </tr>
            @endforeach
            @endisset
        </tbody>
      </table>
</div>
@endsection