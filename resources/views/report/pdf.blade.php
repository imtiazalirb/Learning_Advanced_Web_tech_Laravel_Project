<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport"><!-- CSRF Token -->

    <style>
        table{
            width: 100%;
        }
        table, th, td {
            line-height: 1.2;
            font-size: 13px;
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
        th,td{
            padding: 3px;
        }
    </style>
</head>
<body>
    <div style="text-align: center; margin-bottom: 16px;">
        <h1 style="margin: 0; padding:0; margin-bottom: 8px; font-size: 18px;">Report</h1>
        <span style="font-size: 14px;">Generation Date: {{ date('Y-m-d H:i:s') }}</span>
    </div>
	<table>
		<tr>
			<th style="width: 30px;">Id</th>
			<th style="width: 120px;">Customer name</th>
			<th>Product Name</th>
			<th>Address</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Amount</th>
			<th>Status</th>
			<th>Report</th>
		</tr>
        @foreach ($deliveries as $delivery)
		<tr>
			<td>{{ $delivery->id }}</td>
			<td>{{ $delivery->customer_name}}</td>
			<td>{{ $delivery->product_name }}</td>
			<td>{{ $delivery->address }}</td>
			<td>{{ $delivery->phone }}</td>
			<td>{{ $delivery->email }}</td>
			<td>{{ $delivery->amount }}</td>
			<td>{{ $delivery->status }}</td>
			<td>{{ $delivery->report }}</td>
		</tr>
        @endforeach
	</table>
</body>
</html>
