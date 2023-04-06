
<!-- HTML by Andrew Moots & Miroslav Pavlovski w/ outline from Prithviraj Narahari & Alexander Martens & Bootstrap -->
<!DOCTYPE HTML>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">	
		<link rel="stylesheet" href="/static/css/custom.css">
		<script src="/static/js/cart.js"></script>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>CONFIRM ORDER</title>
	</head>
	<body class="d-flex flex-column min-vh-100">
        
		{% include './view/header.php' %}

		<div class=container-fluid>
			<div class="standard-container bg-white shadow">
				<h1 class="h3 mb-3 fw-normal">Confirm Order</h1>
				<div class="row">
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-12">
								"Customer Name"
							</div>
							<div class="col-md-12">
								"Street Address"
							</div>
							<div class="col-md-12">
								"City"
							</div>
							<div class="col-md-6">
								"State"
							</div>
							<div class="col-md-6">
								"Zip"
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
								<label class="form-check-label" for="flexRadioDefault1">
									Use Credit Card on file
								</label>
							</div>
							<div class="col-md-12">
								"Visa 1234-5678-9012-3456"
							</div>
							<div class="col-md-12">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
								<label class="form-check-label" for="flexRadioDefault2">
									New Credit Card
								</label>
							</div>
							<div class="col-md-5">
								<select id="inputCardType" class="form-select">
									<option selected disabled>Choose...</option>
									<option value="D">Discover</option>
									<option value="M">MasterCard</option>
									<option value="V">Visa</option>
								</select>
							</div>
							<div class="col-md-7">
								<input required type="number" class="form-control" id="inputCardNum" placeholder="Enter credit card number">
							</div>
						</div>
					</div>
				</div>
				<div class="cart-container">
					<div class="row head">
						<div class="col-md-9">
							Book Description
						</div>
						<div class="col-md-1 text-center">
							Qty
						</div>
						<div class="col-md-2 text-end">
							Price
						</div>
					</div>
					<div class="body">

					</div>
				</div>
				<div class="row">
					<div class="col-md-5">
						<p class="shipping-note"><b>SHIPPING NOTE:</b> The books will be delivered within 5 business days.</p>
					</div>
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-7 text-end">
								<b>Subtotal:</b>
							</div>
							<div class="col-md-5">
								<span id="subtotal"></span>
							</div>
							<div class="col-md-7 text-end">
								<b>Shipping & Handling:</b>
							</div>
							<div class="col-md-5">
								<span>4.99</span>
							</div>
							<div class="col-md-12">
								<hr>
							</div>
							<div class="col-md-7 text-end">
								<b>Total:</b>
							</div>
							<div class="col-md-5">
								<span id="total"></span>
							</div>
						</div>
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-md-3">
						<a class="btn btn-md btn-warning" href="index">Cancel</a>
					</div>
					<div class="col-md-6 text-center">
						<a class="btn btn-md btn-secondary" href="update_customerprofile">Update Customer Profile</a>
					</div>
					<div class="col-md-3 text-end">
						<button type="submit" class="btn btn-md btn-primary" href="#">Place Order</button>
					</div>
				</div>
			</div>
		</div>

		{% include './view/footer.php' %}

		<script>loadCart();</script>

	</body>
</HTML>
