@extends('headerfooter.index')
@section('style')
    <link rel="stylesheet" href="{{ asset('pro.css') }}">
@endsection
@section('body_section')
<div class="container-fluid">
    <div class="container">
        <form action="{{route('pro.store')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="card mt-5 border-white">
            <h1 class="text-align-center">
                Add product 
            </h1>
            <div class="row g-3 mt-4">
                <div class="col">
                    <label for="productname" class="font-weight-bold">Product Name</label>
                    <input type="text" name="productname" id="subcatagory_name" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col">
                    <label for="slug"class="font-weight-bold">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
              </div>
              <div class="row g-3 mt-4">
                <div class="col">
                    <label for="size" class="font-weight-bold">Size</label>
                    <input type="float" name="size" id="size" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col">
                    <label for="warranty"class="font-weight-bold">warranty</label>
                    <input type="text" name="warranty" id="warranty" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
              </div>

              <div class="row g-3 mt-4 mb-5"> 
                <div class="col ml-3 pl-0 mb-3">
                    <label for="slug"class="font-weight-bold">Choose Catagory</label>
                    <select name="catagory_id" class="form-control" id="">
                     <option value="">Choose Catagory</option>
                     @foreach ($catagory as $product)
                     <option value="{{ $product->id}}"> {{$product->catagory_name}}</option>   
                     @endforeach
                    </select>
                 </div>
                <div class="col-6">
                    <label for="slug"class="font-weight-bold">Choose sub-catagory</label>
                   <select name="subcatagory_name" class="form-control" id="">
                    <option value="">Choose Sub-Catagory</option>
                    @foreach ($data as $product)
                    <option value="{{ $product->id}}"> {{$product->subcatagory_name}}</option>   
                    @endforeach
                   </select>
                </div>
              </div>

              <div class="row g-3  mb-5"> 
                <div class="col">
                    <label for="slug"class="font-weight-bold">choose second sub-catagory</label>
                    <select name="sec_subcatagory_id" class="form-control" id="">
                     <option value="">Choose sec-sub-Catagory</option>
                     @foreach ($sec as $product)
                     <option value="{{ $product->id}}"> {{$product->Secondsubcatagory_name}}</option>   
                     @endforeach
                    </select>
                 </div>
                <div class="col-6">
                    <label for="slug"class="font-weight-bold">Choose Brand</label>
                   <select name="brand" class="form-control" id="">
                   
                    <option value="">Choose Sub-Catagory</option>
                    @foreach ($brand as $product)
                    <option value="{{ $product->id}}"> {{$product->brandname}}</option>   
                    @endforeach
                   </select>
                </div>
            </div>
                <div class="row">
                    <div class="col color">
                        <label for="color"class="font-weight-bold">Choose Color</label>
                        <div class="select">
                        <select class="js-example-basic-multiple " name="color[]" multiple="multiple" style="width:540px;">
                             @foreach ($colors as $product)
                                <option value="{{ $product->id }}">{{ $product->colorname}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="price"class="font-weight-bold">Price</label>
                        <input type="float" name="price" id="price" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="col-6 mt-2">
                        <label for="discount"class="font-weight-bold">Discount</label>
                        <input type="float" name="discount" id="discount" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>


                    <div class="col-6 mt-2">
                        <label for="image"class="font-weight-bold"  multiple="multiple">Image</label><br>
                        <input required type="file" class="form-control border border-white" name="images" placeholder="" >
                    </div>


                <div class="col-6 mt-2">
                    <div class="body">
                        <div class="col">
                            <label for="feature"class="font-weight-bold">Add Feature</label>
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-danger"id="DeleteRow" type="button"><i class="bi bi-trash "></i>Delete</button>
                                    </div>
                                    <input type="text" class="form-control m-input" name="feature[]" multiple="multiple"placeholder="Add Feature..">
                                </div>
                           
         
                            <div id="newinput"></div>
                            <button  id="rowAdder" type="button" class="btn btn-dark mt-2"><span class="bi bi-plus-square-dotted "> </span> ADD</button>
                        </div>
                    </div>
                </div>  
                
                <div class="col-12 mt-2">
                    <label for="description"class="font-weight-bold" >Description</label><br>
                    <textarea class="form-control" name="description" placeholder="" >
                    </textarea>
                </div>
 

              </div>
              <button type="submit" class="btn btn-primary mt-5">Submit</button>
            </div>
    </form>
    </div>
</div>
@endsection