<!doctype html>
<html lang="en">
  <head>
    <title>OLIZ STORE| Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('style/home.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('main.css')}}"> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

    {{-- <style>
      .dropdown-hover:hover>.dropdown-menu {
            display: inline-block;
            }

        .dropdown-hover>.dropdown-toggle:active {
        /*Without this, clicking will make it sticky*/
        pointer-events: none;
}
    </style> --}}
    <style type="text/css">
    /* span{
      height: 5px;
      background-color: black;
      display: block;
    } */
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
    <div class="container-fluid maincontainer">
        <div class="container">
            <div class="tophead d-flex">
                <div class="left pt-1">
                     <h4>FREE SHIPPING FOR THE FIRST ORDER.</h4>
                </div>
                <div class="right">
                 <ul class="d-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white dm" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Location </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="#">Provience 1</a>
                             <a class="dropdown-item" href="#">Provience 2</a>
                             <a class="dropdown-item" href="#">Provience 3</a>
                             <a class="dropdown-item" href="#">Provience 4</a>
                             <a class="dropdown-item" href="#">Provience 5</a>
                             <a class="dropdown-item" href="#">Provience 6</a>
                             <a class="dropdown-item" href="#">Provience 7</a>
                      
                    </li>
                    <li class="pt-2 pr-4 "><a class="text" href="#">SignIn</a></li>
                </ul>
                 </div>
                </div>
                
            </div>
        </div>
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

          <div id="carouselExampleIndicators" class="carousel slide bg-light" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                 <div class=" container cnt">
                    <img src="images/iphone13-pro.png" alt="">
                <div class="text-block">
                    <h1>iPhone 13 pro</h1>
                    <h2>Oh. So. Pro.</h2>
                    <button type="submit" class="btn btn-danger botton">Learn More</button>
                </div>
            </div>
              </div>
              <div class="carousel-item">
                <div class=" container cnt">
                    <img src="images/iphone11.png" alt="">
                <div class="ieleven">
                    <h1>iPhone 11</h1>
                   <p>Just the right amount of Everyting</p>
                    <button type="submit" class="btn btn-danger ">BUY NOW</button>
                </div>
            </div>
              </div>
              
              <div class="carousel-item">
                <div class=" container cnt">
                    <img src="images/insta-360-one-r.png" alt="">
                <div class="text-block">
                    <h1><span class="text-primary">Insta360 ONE R</span></h1>
                    <p>Adapted to action</p>
                    <button type="submit" class="btn btn-danger botton lrn ">Learn More</button>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class=" container cnt">
                <img src="images/iphone12.png" alt="">
            <div class="text-block">
                <h1>iPhone 12</h1>
                <h2>Blast past fast.</h2>
                <button type="submit" class="btn btn-danger botton">BUY NOW</button>
            </div>
        </div>
          </div>
              </div>
              </div>
          
            <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only  ">Previous</span>
            </a>
            <a class="carousel-control-next " href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon " aria-hidden="true"></span>
              <span class="sr-only ">Next</span>
            </a>
          </div>


          <div class="container-fluid">
            <div class="container title mt-5">
              <div class="col-5">
                 <h1>Feature Product<span></span></h1>
              </div>
               
            
            <div class="row">
                <div class="col">
                    <div class="card">
                        <img src="images/imac24.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="images/ipad-pro-new.jpeg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="images/macbook-air-new-m1.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="images/macbookpro-new-m1.jpg" alt="">
                    </div>
                </div>
            </div>
          </div>
          </div>
          </div>

        </div>

        <div class="container-fluid">
        
         
          <div class="container title mt-5 logo">
            <div class="col-2">
              <h1>Brands<span></span></h1> 
             </div>
             @foreach($brands as $cat)
            <img src=" {{ $cat->logo }}" alt="" width="100px" class="mt-5 mr-4">
            @endforeach
          
           </div>
        </div>




        <div class="container">
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




