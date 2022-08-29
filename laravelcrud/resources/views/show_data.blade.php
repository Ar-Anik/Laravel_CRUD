<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> Show Data </title>
  </head>
  <body>

    <!-- ############### Navber ############# -->

    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>Library</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Authentication
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"> Login </a></li>
            <li><a class="dropdown-item" href="#"> Registration </a></li>
          </ul>
        </li>

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    </div>
    </nav>

    </div>
    
    <!-- ############### End Navber ############ -->

    <!-- ################## Table ################## -->
    <br>
    <div class="container">

    @if(Session::has('msg'))
      <p class="alert alert-success"> {{ Session::get('msg') }} </p>
    @endif
        <a href="{{url('/adddata')}}" class="btn btn-primary my-3"> Add Data </a>

    <table class="table table-bordered">
    
    <thead>
       <tr>
         <th scope="col" style="text-align:center">ID</th>
         <th scope="col" style="text-align:center">Name</th>
         <th scope="col" style="text-align:center">Price</th>
         <th scope="col" style="text-align:center">Author</th>
         <th scope="col" style="text-align:center">Description</th>
         <th scope="col" style="text-align:center">Information Update</th>
         <th scope="col" style="text-align:center">Information Delete</th>
       </tr>
    </thead>

    <tbody>
      @foreach($showData as $key=>$data)
        <tr>
         <td style="text-align:center"> 
            {{ $key+1 }}
         </td>
         
         <td style="text-align:center"> 
            {{ $data->book_name }}
         </td>
         
         <td style="text-align:center"> 
            {{ $data->book_price }}
         </td>
         
         <td style="text-align:center"> 
            {{ $data->author_name }}
         </td>
         
         <td style="text-align:center"> 
            {{ $data->book_description }}
         </td>
         
         <td style="text-align:center">
            <a href="{{ url('/editdata/'.$data->id) }}" class="btn btn-outline-warning">Update</a>
         </td>

         <td style="text-align:center">
            <a href="{{ url('/deletedata/'.$data->id) }}" class="btn btn-outline-danger">Delete</a>
         </td>

        </tr>
      @endforeach
     </tbody>
    </table>

    {{ $showData->links() }}

    </div>
    <br>
    <br>


    <!-- ################## End Table ################ -->


    <!-- ################# Footer #################### -->

    <div class="container">

    <footer class="page-footer font-small mdb-color lighten-3 pt-4">

    <!-- Footer Elements -->
    <div class="container">

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-lg-2 col-md-12 mb-4">

      <!--Image-->
      <div class="view overlay z-depth-1-half">
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="img-fluid"
          alt="">
        <a href="">
          <div class="mask rgba-white-light"></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-2 col-md-6 mb-4">

      <!--Image-->
      <div class="view overlay z-depth-1-half">
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(78).jpg" class="img-fluid"
          alt="">
        <a href="">
          <div class="mask rgba-white-light"></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-2 col-md-6 mb-4">

      <!--Image-->
      <div class="view overlay z-depth-1-half">
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(79).jpg" class="img-fluid"
          alt="">
        <a href="">
          <div class="mask rgba-white-light"></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-2 col-md-12 mb-4">

      <!--Image-->
      <div class="view overlay z-depth-1-half">
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(81).jpg" class="img-fluid"
          alt="">
        <a href="">
          <div class="mask rgba-white-light"></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-2 col-md-6 mb-4">

      <!--Image-->
      <div class="view overlay z-depth-1-half">
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(82).jpg" class="img-fluid"
          alt="">
        <a href="">
          <div class="mask rgba-white-light"></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-2 col-md-6 mb-4">

      <!--Image-->
      <div class="view overlay z-depth-1-half">
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(84).jpg" class="img-fluid"
          alt="">
        <a href="">
          <div class="mask rgba-white-light"></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->

</div>
<!-- Footer Elements -->

</footer>
<!-- Footer -->



<hr style="height:2px;border-width:0;color:gray;background-color:gray">


<div class="p-3 mb-2 bg-primary text-white">
<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

      <!-- Content -->
      <h5 class="font-weight-bold text-uppercase mb-4">Footer Content</h5>
      <p>Hi</p>
      <p>Hola</p>

    </div>


    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

      <ul class="list-unstyled">
        <li>
          <p>
            <a href="" style="color:white">PROJECTS</a>
          </p>
        </li>

        <li>
          <p>
            <a href="" style="color:white">ABOUT US</a>
          </p>
        </li>
        <li>
          <p>
            <a href="" style="color:white">BLOG</a>
          </p>
        </li>
        <li>
          <p>
            <a href="" style="color:white">AWARDS</a>
          </p>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

      <!-- Contact details -->
      <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

      <ul class="list-unstyled">
        <li>
          <p>
            <i class="fas fa-home mr-3"></i> Bangladesh, Dhaka </p>
        </li>
        <li>
          <p>
            <i class="fas fa-envelope mr-3"></i> aubdurrob1331@gmail.com </p>
        </li>
        <li>
          <p>
            <i class="fas fa-phone mr-3"></i> 0168594675 </p>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

      <!-- Social buttons -->
      <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

      <!-- Facebook -->
      <a type="button" class="btn-floating btn-fb">
        <i class="fab fa-facebook-f"></i>
      </a>
      <!-- Twitter -->
      <a type="button" class="btn-floating btn-tw">
        <i class="fab fa-twitter"></i>
      </a>
      <!-- Google +-->
      <a type="button" class="btn-floating btn-gplus">
        <i class="fab fa-google-plus-g"></i>
      </a>
      <!-- Dribbble -->
      <a type="button" class="btn-floating btn-dribbble">
        <i class="fab fa-dribbble"></i>
      </a>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2022 Copyright:
  <a href="https://github.com/Ar-Anik" style="color:white"> Aubdur Rob Anik </a>
</div>

<!-- Copyright -->

</footer>

</div>
</div>

    <!-- ################# End Footer ################ -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>