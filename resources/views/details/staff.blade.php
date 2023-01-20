@extends('headerfooter.index')
@section('body_section')
<div class="container">

<table class="table table-hover mt-5">
    <thead class="bg-dark">
        <tr>
        <td class="text-white">ID</td>
        <td class="text-white">staff name</td>
        <td class="text-white">Contact Number</td>
        <td class="text-white">Address</td>
        <td class="text-white">Email</td>
        <td class="text-white">Department</td>
        <td class="text-white">Position</td>

        <td></td>
        <td></td>
        </tr>
    </thead>
    <tbody>
        @isset($data)
        @foreach ($data as $staff)
        <tr>
            <td>{{ $staff->id}}</td>
            <td class="font-weight-bold">{{ $staff->staffname}}</td>
            <td class="font-weight-bold">{{ $staff->number}}</td>
            <td class="font-weight-bold">{{ $staff->address}}</td>
            <td class="font-weight-bold">{{ $staff->email}}</td>
            <td class="font-weight-bold">{{ $staff->department_id}}</td>
            <td class="font-weight-bold">{{ $staff->position}}</td>
            <td><a href="{{route('staff.edit',$staff->id)}}">Edit</a></td>
            <td>
                <form action="{{ route('staff.destroy',$staff->id) }}" method="post">
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