<!DOCTYPE html>
<html>
<head>
	<title>Kulina Review</title>
</head>
<body>
 
	<h3>Review User</h3>
 
	<a href="/review/add">Add Review</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Order ID</th>
			<th>Product ID</th>
			<th>User ID</th>
			<th>Rating</th>
			<th>Review</th>
			<th>Date Create</th>
			<th>Date Modified</th>
		</tr>
		@foreach($rev_res as $res)
		<tr>
			<td>{{ $res->order_id }}</td>
			<td>{{ $res->product_id }}</td>
			<td>{{ $res->user_id }}</td>
			<td>{{ $res->rating }}</td>
			<td>{{ $res->review }}</td>
			<td>{{ $res->created_at }}</td>
			<td>{{ $res->update_at }}</td>
			<td>
				<a href="/review/edit/{{ $res->id }}">Edit</a>
				|
				<a href="/review/remove/{{ $res->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>