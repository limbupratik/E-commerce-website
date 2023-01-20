@extends('headerfooter.index')
@section('body_section')
<div class="container">

<table class="table table-hover mt-5">
    <thead class="bg-dark">
        <tr>
        <td class="text-white">ID</td>
        <td class="text-white">Customer Name </td>
        <td class="text-white">Number</td>
        <td class="text-white">street</td>
        <td class="text-white">Email</td>
        <td class="text-white">zipcode</td>
        <td class="text-white">card number</td>
        <td class="text-white"></td>
        <td class="text-white"></td>


       

        <td></td>
        <td></td>
        </tr>
    </thead>
    <tbody>
        @isset($data)
        @foreach ($data as $customer)
        <tr>
            <td>{{ $customer->id}}</td>
            <td class="font-weight-bold">{{ $customer->customername}}</td>
            <td class="font-weight-bold">{{ $customer->number}}</td>
            <td class="font-weight-bold">{{ $customer->street}}</td>
            <td class="font-weight-bold">{{ $customer->email}}</td>
            <td class="font-weight-bold">{{ $customer->zipcode}}</td>
            <td class="font-weight-bold">{{ $customer->card}}</td>
            <td><a href="{{route('customer.edit',$customer->id)}}">Edit</a></td>
            <td>
                <form action="{{ route('customer.destroy',$customer->id) }}" method="post">
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