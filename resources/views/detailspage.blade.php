<!doctype html>
<html lang="en">
  <head>
    <title>OLIZ STORE| Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('style/home.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('main.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('style/details.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

    <style type="text/css">
   
    .megamenu{
      border-top: solid 1px black;
    }
      /* ============ desktop view ============ */
      @media all and (min-width: 992px) {
        
        .navbar .has-megamenu{position:static!important;}
        .navbar .megamenu{left:0; right:0; width:100%; margin-top:0;  }
        
      }	
      @media(max-width: 991px){
	.navbar.fixed-top .navbar-collapse, .navbar.sticky-top .navbar-collapse{
		overflow-y: auto;
	    max-height: 90vh;
	    /* margin-top:10px; */
	}
}
    </style>

  </head>
  <body>
 
            <div class="container-fluid"> 
              <nav class="navbar navbar-expand-lg sticky-top" aria-label="Fifth navbar example">
                <img src="images/oliz-logo_1_1.png"   width="300px"alt="">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarsExample05">
              <ul class="navbar-nav justify-content-end flex-grow-1 d-flex ">
                <li class="nav-item">
                  <a class="nav-link active  font-weight-bold dm mr-2" aria-current="page" href="#">Home</a>
                </li>


                      @php
                        $catagories=App\Models\Catagory::all();
                        @endphp
                      @foreach($catagories as $cat)
                          <li class="nav-item dropdown has-megamenu">
                            <a class="nav-link dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown"> {{ $cat->catagory_name }}  </a>
                            
                            <div class="dropdown-menu megamenu border border-white" role="menu">   
                               
                              <div class="row ">
                          
                                @foreach ($cat->subcatagory()->get() as $sub_cat)
                                <div class="col-lg-3 col-6">
                                  
                                  <div class="col-megamenu">
                                    
                                    <h6 class="ttl sub">
                                      <a class="dropdown-item pt-3" href="#">{{ $sub_cat->subcatagory_name }}</a>
                                      
                                    </h6>
                                    <ul class="list-unstyled">
                                      <li>
                                        <a href="#">
                                            @foreach($sub_cat->secsubcatagory as $sec_sub_cat)
                                            <a class="dropdown-item " href="#">{{ $sec_sub_cat->Secondsubcatagory_name }}</a>
                                            @endforeach
                                        </a>
                                      </li>
                                    </ul>     
                                  </div>  <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->  
                                @endforeach 
                              </div><!-- end row --> 
                            </div> <!-- dropdown-mega-menu.// -->
                          </li>
                      @endforeach
              </ul>
                        <div class="dropdown">
                          <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Brand
                          </button>
                          @php
                          $brands=App\Models\brands::all();
                          @endphp
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach($brands as $cat)
                            <a class="dropdown-item" href="#">{{ $cat->brandname }}</a>
                            @endforeach
                          </div>
                        </div>
                     <form>
                  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </form>  
                <button type="submit" class="btn bg-light border ml-3 h-10">Search</button>
              </ul>
            </div>
          </nav>
 </div>
 @php


 @endphp
 <div class="container-fluid">
    <span class="mt-4"></span>
    <div class="row d-flex">
      <div class="col-3 border ml-5">
          <div class="left">
          <img class="" src="1605031289_img_1444259_1.jpg" alt="" width="100%">
          <h6 class="mt-4">Apple MacBook Pro13" M1 Chip with 8-Core CPU and 8-Core GPU 256GB Storage 8GB RAM Silver
      </h6>
    </div>
      </div>
      <div class="col-6 pl-5">
        <h2>Apple MacBook Pro13" M2 Chip with 8-Core CPU and 10-Core GPU 512GB Storage 8GB RAM</h2>
        <img src="1605031289_img_1444259_1.jpg" alt="" width="5%">
        <ul class="pl-5 mt-4">
          <li>Apple M2 8-Core Chip</li>
          <li>8GB Unified RAM | 512GB SSD</li>
          <li>13.3" 2560 x 1600 Retina IPS Display</li>
          <li>10-Core GPU | 16-Core Neural Engine</li>
        </ul>

        <h3 style="color:#991527;">Rs 243,000.00</h3>

        <span style="height:1px;"></span>
        <p class="mt-2">**Price is inclusive of VAT**</p>
        <button id="addtocard" class="pl-3 pr-3 pt-2 pb-2" type="submit" style=" background-color: #991527;color:white;border-color:#991527">Add To Card</button>
      </div>
     
      <div class="col-2">
        <h4 class="mt-5">Brand Category</h4>
        <div class="card mb-2" style="height:40px;">
          <h6 class="pl-2 pt-2">No Category Avaiable</h6>
        </div>
        <img src="images/insta360-one-r1.jpg" alt="" width="100%">
      </div>
    </div>  
  </div>
        <div class="container">
          <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top mt-5">
          <footer class="py-5">
            <div class="row">
              <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
              </div>
              <div class="col-md-5 offset-md-1 mb-3">
                <form>
                  <h5>Subscribe to our newsletter</h5>
                  <p>Monthly digest of what's new and exciting from us.</p>
                  <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                    <label for="newsletter1" class="visually-hidden">Email address</label>
                    <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                    <button class="btn btn-primary" type="button">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
        
            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
              <p>&copy; 2022 pratikTech, Inc. All rights reserved.</p>
              <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
              </ul>
            </div>
          </footer>
        </div>

        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function(){
            /////// Prevent closing from click inside dropdown
            document.querySelectorAll('.dropdown-menu').forEach(function(element){
              element.addEventListener('click', function (e) {
                e.stopPropagation();
              });
            })
        }); 
    </script>
    
  </body>
</html>




