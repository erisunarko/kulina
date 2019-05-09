<!DOCTYPE html>
<html>
<head>
	<title>Add Review</title>
</head>
<body>
 
	<h2>Add Review</h2>
 
	<a href="/review"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/review/store" method="post">
		{{ csrf_field() }}
		Order ID <input type="text" name="order_id" required="required"> <br/>
		Product ID <input type="text" name="product_id" required="required"> <br/>
		User ID <input type="text" name="user_id" required="required"> <br/>
		Rating <input type="number" min="1" max="5" name="rating" required="required"> <br/>
		Review <input type="text" name="review" required="required"> <br/>
		<input type="submit" value="SAVE">
	</form>
 
</body>
</html>