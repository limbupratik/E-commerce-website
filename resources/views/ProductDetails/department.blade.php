@extends('headerfooter.index')
@section('body_section')
<div class="container">

<table class="table table-hover mt-5">
    <thead class="bg-dark">
        <tr>
        <td class="text-white">ID</td>
        <td class="text-white">Department name</td>
        <td class="text-white">Department Head</td>
        <td></td>
        <td></td>
        </tr>
    </thead>
    <tbody>
        @isset($data)
        @foreach ($data as $department)
        <tr>
            <td>{{ $department->id}}</td>
            <td class="font-weight-bold">{{ $department->department}}</td>
            <td class="font-weight-bold">{{ $department->departmenthead}}</td>
            <td><a href="{{route('catagory.edit',$department->id)}}">Edit</a></td>
            <td>
                <form action="{{ route('department.destroy',$department->id) }}" method="post">
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