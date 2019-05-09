<!DOCTYPE html>
<html>
<head>
	<title>Edit Review</title>
</head>
<body>
 
	<h2>Edit Review</h2>
 
	<a href="/review"> Kembali</a>
	
	<br/>
	<br/>
	@foreach($rev_res as $res)
	<form action="/review/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $res->id }}">
		Order ID <input type="text" name="order_id" required="required" value="{{ $res->order_id }}"> <br/>
		Product ID <input type="text" name="product_id" required="required" value="{{ $res->product_id }}"> <br/>
		User ID <input type="text" name="user_id" required="required" value="{{ $res->user_id }}"> <br/>
		Rating <input type="number" min="1" max="5" name="rating" required="required" value="{{ $res->rating }}"> <br/>
		Review <input type="text" name="review" required="required" value="{{ $res->review }}"> <br/>
		<input type="submit" value="SAVE">
	</form>
	@endforeach
 
</body>
</html>