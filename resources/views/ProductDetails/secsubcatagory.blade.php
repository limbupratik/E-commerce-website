@extends('headerfooter.index')
@section('body_section')
<div class="container">
    <table class="table table-hover mt-5">
        <thead class="bg-dark">
            <tr>
            <td class="text-white">ID</td>
            <td class="text-white">Secondsubcatagory name</td>
            <td class="text-white">slug</td>
            <td class="text-white">sub catagory</td>
            <td class="text-white"></td>
            <td class="text-white"></td>
            <td></td>
            </tr>
        </thead>
        <tbody>
            @isset($data)
            @foreach ($data as $sec)
            <tr>
                <td>{{ $sec->id}}</td>
                
                <td class="font-weight-bold">{{$sec->Secondsubcatagory_name}}</td>
                {{-- <td class="font-weight-bold">{{$sec->subcatagory?$sec->subcatagory->id:''}}</td> --}}
                <td>{{ $sec->slug}}</td>
                <td>{{ $sec->subcatagory_name}}</td>
                <td><a href="{{route('sec.edit',$sec->id)}}">Edit</a></td>
                <td>
                    <form action="{{ route('sec.destroy',$sec->id) }}" method="post">
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