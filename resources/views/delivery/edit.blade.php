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
            Delivery
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="">All Delivery Requests</a>
            <a class="dropdown-item" href="">Pending Deliveries</a>
            <a class="dropdown-item" href="">Shipped Deliverries</a>
            <a class="dropdown-item" href="">Cancelled Deliverries</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="">My profile</a>
            <a class="dropdown-item"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  href="{{ route('logout') }}">Logout </a>
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

<h3 class="display-5 text-center my-4">Delivery Information Edit</h3>
<div class="container">
<form action="{{ route('delivery.update',$delivery->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
        <div class="col-md-8 mb-3">
            <div class="form-group">
                <strong>Adress</strong>
                <input type="text" name="address" value="{{ $delivery->address }}" class="form-control" placeholder="Address">
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-md-4 mb-3">
				<label for="status">Status</label>
				<select name="status" class="custom-select" placeholder="Status">
					<option>Unverified</option>
					<option>Verified</option>
				</select>
			</div>
            </div>

            <div class="row">
            <div class="col-md-4 mb-3">
    				<label for="report">Report</label>
    				<select name="report" class="custom-select" placeholder="report">
    					<option value="Pending">Pending</option>
                        <option value="Processing">Processing</option>
                        <option value="On Hold">On Hold</option>
    					<option value="Delivered">Delivered</option>
                        <option value="Canclled">Cancelled</option>
    				</select>
    			</div>
                </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
</div>
</html>
