<!doctype html>
<html lang="en">
  <head>
    <title>Admin DashBoard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('style/hf.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    @yield('style')
  </head>
  <body>
    <div class="container-fluid"> 
      <nav class="navbar navbar-expand-lg sticky-top" aria-label="Fifth navbar example">
        <img src="images/oliz-logo_1_1.png"   width="300px"alt="">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExample05">
      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 ">
        <li class="nav-item">
          <a class="nav-link active dm" aria-current="page" href="/admin">Home</a>
        </li>
            <li class="nav-item dropdown drop-menu">
                <a class="nav-link dropdown-toggle dm " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Email</a>
                    <div class="dropdown-menu drop" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="#">Inbox</a>
                     <a class="dropdown-item" href="#">Read</a>
                     </div>
              
            </li>
            <li class="nav-item dropdown drop-menu">
                <a class="nav-link dropdown-toggle dm" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product Details</a>
                    <div class="dropdown-menu drop" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="{{ route('all.index') }}">All</a>
                     <a class="dropdown-item" href="{{ route('catagory.index') }}">Catagory</a>
                     <a class="dropdown-item" href="#">Stock Product</a>
                     <a class="dropdown-item" href="#">Purchase</a>
                     <a class="dropdown-item" href="{{ route('subcatagory.index') }}">Sub-Catagory</a>
                     <a class="dropdown-item" href="{{ route('brand.index') }}">Brand</a>
                     <a class="dropdown-item" href="#">Sells</a>
                     <a class="dropdown-item" href="{{ route('sec.index') }}">Second sub-catagory</a>
                     <a class="dropdown-item" href="{{ route('department.index') }}">Department</a>
                     <a class="dropdown-item" href="{{ route('color.index') }}">color</a>
                     </div>
              
            </li>
            <li class="nav-item dropdown drop drop-menu">
                <a class="nav-link dropdown-toggle dm" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Details</a>
                    <div class="dropdown-menu drop" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="{{ route('staff.index') }}">Staff</a>
                     <a class="dropdown-item" href="{{ route('customer.index') }}">Customer</a>
                     <a class="dropdown-item" href="#">Suppliers</a>
                     </div>
              
            </li>
            <li class="nav-item dropdown drop-menu">
                <a class="nav-link dropdown-toggle dm" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Form</a>
                    <div class="dropdown-menu drop" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="#">Add Product</a>
                     <a class="dropdown-item" href="#">Sells Product</a>
                     <a class="dropdown-item" href="{{ route('catagory.create') }}">Add Catagory</a>
                     <a class="dropdown-item" href="{{ route('subcatagory.create') }}">Add Sub-Catagory</a>
                     <a class="dropdown-item" href="{{ route('brand.create') }}">Add Brand</a>
                     <a class="dropdown-item" href="{{ route('sec.create') }}">Add Sec. Catagory</a>
                     <a class="dropdown-item" href="{{ route('department.create') }}">Add Department</a>
                     <a class="dropdown-item" href="{{ route('staff.create') }}">Add Staff</a>
                     <a class="dropdown-item" href="{{ route('customer.create') }}">Add Customer</a>
                     <a class="dropdown-item" href="{{ route('color.create') }}">Add Color</a>
                     </div>    
            </li>
        <form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        
        </form>  
        <button type="submit" class="btn bg-light border ml-3">Search</button>
      </ul>
    </div>
   
  </nav>
</div>

    @yield('body_section')
      

    <div class="container-fluid">
      <footer class="py-5">
        <div class="row">
          <div class="col-4 mb-3 pl-5">
            <h5 class="pl-5">About US</h5>
            <ul class="nav flex-column pl-5">
              Olizstore went live in 2007 with the objective of making genuine gadgets and accessories easily available to anyone living in Nepal. Today, we're present across various categories including Apple products, Branded Apple accessories (covers, cables for iPhone, iPad, MacBook), docking speakers, Headphones, Amplifiers, Media players, Home theater Speakers, Projectors - and many more!!
            </ul>
          </div>
    
          <div class="col-4  mb-3">
            <h5>Shoping Guide</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><strong>></strong> How to Buy</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><strong>></strong> FAQ</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><strong>></strong> Payment</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><strong>></strong> Shipment</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><strong>></strong> Return policy</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><strong>></strong> EMI Calculator</a></li>
            </ul>
          </div>
    
          <div class="col-4 col-md-2 mb-3">
            <h5>Location</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fas fa-location    "></i>    351 Basantamarga, Babarmahal kathmandu, Nepal</a></li>
            </ul>
          </div>
    
         
    
        
      </footer>
      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top pl-5">
          <p>&copy; 2022 Pratik limbu, Inc. All rights reserved.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
          </ul>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
    <script>
      $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
    </script>
     <script type="text/javascript">
 
      $("#rowAdder").click(function () {
          newRowAdd =
          '<div id="row"> <div class="input-group mt-3">' +
          '<div class="input-group-prepend">' +
          '<button class="btn btn-danger" id="DeleteRow" type="button">' +
          '<i class="bi bi-trash"></i> Delete</button> </div>' +
          '<input type="text" class="form-control m-input" name="feature[]" placeholder="Add other Feature.."> </div> </div>';

          $('#newinput').append(newRowAdd);
      });

      $("body").on("click", "#DeleteRow", function () {
          $(this).parents("#row").remove();
      })
  </script>



<script type="text/javascript">
 
  $("#rowAdder").click(function () {
      newRowAdd =
      '<div id="row"> <div class="input-group mt-3">' +
      '<div class="input-group-prepend">' +
      '<button class="btn btn-danger" id="DeleteRow" type="button">' +
      '<i class="bi bi-trash"></i> Delete</button> </div>' +
      '<input type="text" class="form-control m-input" name="feature[]" placeholder="Add other Feature.."> </div> </div>';

      $('#newinput').append(newRowAdd);
  });

  $("body").on("click", "#DeleteRow", function () {
      $(this).parents("#row").remove();
  })
</script>



  </body>
</html>