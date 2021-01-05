<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ERP</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet"type="text/css" href="{{asset('asset/css/style2.css')}}" media="screen"/>

</head>
</html>
<body>
    <header>
  <div class="mynav">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand mb-2" href="">ERP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="admin_dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Item
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="admin_all_employee.php">Item 1</a>
            <a class="dropdown-item" href="admin_employee_signup.php">Item 2</a>
            <a class="dropdown-item" href="admin_edit_employee.php">Item 3</a>
            <a class="dropdown-item" href="admin_edit_employee.php">Item 4</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="admin_all_employee.php">profile</a>
            <a class="dropdown-item" href="{{ route('logout') }}">Logout </a>
          </div>
        </li>
      </ul>

    <!--LOGOUT BUTTON-->

    <h5 class="my-sm-2 mr-lg-2">Welcome, {{ Auth::user()->name }} </h5>
      <a class="btn btn-danger my-sm-2 ml-lg-2" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
   </div>
  </nav>
</div>

<div class="z">
        <a href="/fileupload" class="mr-5">Upload Files</a>
          <a href="/user/edit/customer/<%= user.uid %>" class="mr-5">
          <i class="fas fa-edit"></i>Edit Profile
        </a>
      <!--  <a href="/logout" class="text-danger">
          <i class="fas fa-power-off  pr-1"></i>Logout
        </a>
        </div>
     -->
      </div>
  


  <div class="bcd">
    <h1 style="text-align:center">Available Products</h1>
  </div>

  <div class="abc">

    <div class="row row-cols-1 row-cols-md-2">
      <div class="col mb-4">
        <div class="card">
          <img src="https://source.unsplash.com/400x400/?cars"class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Car 1,Price:3000</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <button type="button" class="btn btn-primary">Add to cart</button>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card">
          <img src="https://source.unsplash.com/400x400/?bmw" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Car 2,Price:2000</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <button type="button" class="btn btn-primary">Add to cart</button>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card">
          <img src="https://source.unsplash.com/400x400/?audi" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Car 3,Price:3000</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            <button type="button" class="btn btn-primary">Add to cart</button>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card">
          <img src="https://source.unsplash.com/400x400/?toyota" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Car 4,Price:5000</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <button type="button" class="btn btn-primary">Add to cart</button>
          </div>
        </div>
      </div>
    </div>
    </div>



<div class="b">
  <a href="/contact" class="mr-5">
  <i class="fas fa-edit"></i>Email Us
</a>
</div>
  
<div class="c">
  <a href="/chat" class="mr-5">
  Start live chat
</a>
</div>


</header>
</body>

</html>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  