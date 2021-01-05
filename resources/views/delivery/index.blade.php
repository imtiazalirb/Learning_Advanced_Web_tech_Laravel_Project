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
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
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
</header>
  <main class="container-fluid">
  <div class="my-3 p-3 bg-white rounded box-shadow">
  <h6 class="pb-2 mb-4">Delivery List</h6>
  <table class="table table-striped">
  <thead>
        <tr>
            <th>#</th>
            <th>Order Details</th>
            <th>Address</th>
            <th class="text-center">Amount</th>
            <th class="text-center">Status</th>
            <th>Report</th>
            <th class="text-right">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($deliveries as $delivery)
        <tr>
            <td>{{ $delivery->id }}</td>
            <td>
              <p class="mb-0">{{ $delivery->customer_name}}</br>
              <small class="text-muted"><strong>Item: </strong> {{ $delivery->product_name }}</small>
              </p>
            </td>
            <td>{{ $delivery->address }}</td>
            <td class="text-center">{{ $delivery->amount }}</td>
            <td class="text-center verify-status">
              @if($delivery->status =='Unverified' || $delivery->status =='unverified')
                <span title="Unverified" class="orange"><i class="uil uil-exclamation-circle"></i></span>
              @else
                <span title="Verified" class="green"><i class="uil uil-check-circle"></i></span>
              @endif
            </td>
            <td>{{ $delivery->report }}</td>
            <td class="text-right">
                <form action="{{ route('delivery.destroy',$delivery->id) }}" method="POST">

                    <a class="btn btn-outline-info btn-sm" onclick="getDetails(`{{$delivery->id}}`)" href="javascript:void('0');" title="View"><i class="uil uil-eye"></i></a>

                    <a class="btn btn-outline-primary btn-sm" href="{{ route('delivery.edit',$delivery->id) }}" title="Edit"><i class="uil uil-edit-alt"></i></a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete"><i class="uil uil-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
</tbody>
    </table>
  </div>

    <div id="orderModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="orderModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div id="orderData" class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Order # <span class="oID"></span></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5 class="pb-2 mb-0">Customer Info</h5>
            <div class="mb-4 text-muted">
              <small>
                <strong>Name: </strong><span class="cName"></span><br>
                <strong>Phone: </strong><span class="cPhone"></span><br>
                <strong>Email: </strong><span class="cEmail"></span><br>
                <strong>Address: </strong><span class="cAddress"></span><br>
              </small>
            </div>

            <h5 class="pb-2 mb-0">Order Details</h5>
            <div class="mb-4 text-muted">
              <small>
                <strong>Product: </strong><span class="oProduct"></span><br>
                <strong>Amount: </strong><span class="oAmount"></span><br>
                <strong>Status: </strong><span class="oStatus"></span><br>
                <strong>Report: </strong><span class="oReport"></span><br>
              </small>
            </div>

          </div>
        </div>
      </div>
    </div>

  </main>

  <script>
    function getDetails(id) {
      $.ajax({
          url         : '/delivery/'+id,
          dataType    : 'JSON',
          type        : 'GET',
          success: function(response){
              $('#orderData .oID').text(response.id);

              //Customer Data
              $('#orderData .cName').text(response.customer_name);
              $('#orderData .cEmail').text(response.email);
              $('#orderData .cPhone').text(response.phone);
              $('#orderData .cAddress').text(response.address);

              //Order Data
              $('#orderData .oProduct').text(response.product_name);
              $('#orderData .oAmount').text(response.amount);
              $('#orderData .oStatus').text(response.status);
              $('#orderData .oReport').text(response.report);

              $('#orderModal').modal('show')
              console.log(response);
          },
          error: function (xhr, ajaxOptions, thrownError) {
              console.log('Error '+xhr.status+' | '+thrownError);
          },
      });
    }

  </script>
</body>

</html>
