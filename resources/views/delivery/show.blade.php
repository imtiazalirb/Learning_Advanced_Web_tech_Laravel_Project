<!DOCTYPE html>
<html>
<head>
<title>Main layout page </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Customer name</th>
            <th>Product Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Verification</th>
            <th>Status</th>
            <th>Action</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($delivery as $deliver)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $deliver->id }}</td>
            <td>{{ $deliver->customer_name}}</td>
            <td>{{ $deliver->product_name }}</td>
            <td>{{ $deliver->adress }}</td>
            <td>{{ $deliver->phone }}</td>
            <td>{{ $deliver->email }}</td>
            <td>{{ $deliver->verification }}</td>
            <td>{{ $deliver->status }}</td>
            <td></td>
        </tr>
        @endforeach
    </table>

</body>
</html>
