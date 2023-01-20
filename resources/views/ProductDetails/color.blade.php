@extends('headerfooter.index')
@section('body_section')
<div class="container">

<table class="table table-hover mt-5">
    <thead class="bg-dark">
        <tr>
        <td class="text-white">ID</td>
        <td class="text-white">Color name</td>
        <td></td>
        <td></td>
        </tr>
    </thead>
    <tbody>
        @isset($data)
        @foreach ($data as $color)
        <tr>
            <td>{{ $color->id}}</td>
            <td class="font-weight-bold">{{ $color->colorname}}</td>
            <td><a href="{{route('color.edit',$color->id)}}">Edit</a></td>
            <td>
                <form action="{{ route('color.destroy',$color->id) }}" method="post">
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