@extends('headerfooter.index')
@section('body_section')
<div class="container">
    <table class="table table-hover mt-5">
        <thead class="bg-dark">
            <tr>
            <td class="text-white">ID</td>
            <td class="text-white">Catagory</td>
            <td class="text-white">Slug</td>
            <td class="text-white">Adder Name</td>
            <td class="text-white"></td>
            <td class="text-white"></td>
            </tr>
        </thead>
        <tbody>
            @isset($data)
            @foreach ($data as $catagory)
            <tr>
                <td>{{ $catagory->id}}</td>
                <td class="font-weight-bold">{{ $catagory->catagory_name}}</td>
                <td>{{ $catagory->slug}}</td>
                <td>{{ $catagory->adder_name}}</td>
                <td><a href="{{route('catagory.edit',$catagory->id)}}">Edit</a></td>
                <td>
                    <form action="{{ route('catagory.destroy',$catagory->id) }}" method="post">
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
</div>
@endsection