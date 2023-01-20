@extends('headerfooter.index')
@section('body_section')
<div class="container">
    <table class="table table-hover mt-5">
        <thead class="bg-dark">
            <tr>
            <td class="text-white">ID</td>
            <td class="text-white">Company Name</td>
            <td class="text-white">Slug</td>
            <td class="text-white">Owner/ CEO Name</td>
            <td class="text-white"alt="">Logo</td>
            <td class="text-white">Contract Period</td>
            <td class="text-white"alt="">Contract form</td>
            <td class="text-white">Contact number</td>
            <td class="text-white">Email</td>
            <td></td>
            <td></td>

            </tr>
        </thead>
        <tbody>
            @isset($data)
            @foreach ($data as $brand)
            <tr>
                <td>{{ $brand->id}}</td>
                <td class="font-weight-bold">{{ $brand->brandname}}</td>
                <td>{{ $brand->slug}}</td>
                <td>{{ $brand->ownername}}</td>
                <td><img src="{{ asset($brand->logo) }}" width="50px" alt=""></td>
                <td>{{ $brand->contractperiod}}</td>
                <td>{{ $brand->contractfile}}</td>
                <td>{{ $brand->contactnumber}}</td>
                <td>{{ $brand->comapanyEmail}}</td>
                

                <td><a href="{{route('brand.edit',$brand->id)}}">Edit</a></td>
                <td>
                    <form action="{{ route('brand.destroy',$brand->id) }}" method="post">
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