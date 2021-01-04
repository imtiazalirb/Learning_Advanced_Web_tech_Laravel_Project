<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
            @foreach ($delivery as $delivery)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $delivery['No'] }}</td>
                <td>{{ $delivery['Customer name'] }}</td>
                <td>{{ $delivery['Product Name'] }}</td>
                <td>{{ $delivery['Adress'] }}</td>
                <td>{{ $delivery['Phone'] }}</td>
                <td>{{ $delivery['Email'] }}</td>
                <td>{{ $delivery['Verification'] }}</td>
                <td>{{ $delivery['Status'] }}</td>
                <td>
                </td>
            </tr>
            @endforeach
        </table>
</body>
</html>
