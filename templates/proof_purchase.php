
<!-- HTML by Andrew Moots & Miroslav Pavlovski w/ outline from Prithviraj Narahari & Alexander Martens & Bootstrap -->
<!DOCTYPE HTML>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<link rel="stylesheet" href="/static/css/custom.css">
		<script src="/static/js/cart.js"></script>
		<script src="/static/js/checkout.js"></script>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>PROOF OF PURCHASE</title>
	</head>
	<body class="d-flex flex-column min-vh-100">
        
		{% include './view/header.php' %}

		<div class="container-fluid">
			<div class="standard-container bg-white shadow">
				<h1 class="h3 mb-3 fw-normal">Proof of Purchase</h1>
				<div class="row">
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-12">
								Customer Name:
								<b><span id="fname"></span><span id="lname"></span></b>
							</div>
							<div class="col-md-12">
								Address:
								<b><span id="address"></span></b>
							</div>
							<div class="col-md-12">
								City:
								<b><span id="city"></span></b>
							</div>
							<div class="col-md-6">
								State:
								<b><span id="state"></span></b>
							</div>
							<div class="col-md-6">
								Zip:
								<b><span id="zipcode"></span></b>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-5 text-end">
								User ID:
							</div>
							<div class="col-md-6">
								<b><span id="userID"></span></b>
							</div>
							<div class="col-md-5 text-end">
								Date:
							</div>
							<div class="col-md-6">
								<b><span id="date"></span></b>
							</div>
							<div class="col-md-5 text-end">
								Time:
							</div>
							<div class="col-md-6">
								<b><span id="time"></span></b>
							</div>
							<br/>
							<br/>
							<div class="col-md-12 text-center">
								Credit Card Information:
							</div>
							<div class="col-md-12 text-center">
								<b><span id="card_no"></span></b>
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
								<span>$</span><span id="subtotal"></span>
							</div>
							<div class="col-md-7 text-end">
								<b>Shipping & Handling:</b>
							</div>
							<div class="col-md-5">
								$4.99
							</div>
							<div class="col-md-12">
								<hr>
							</div>
							<div class="col-md-7 text-end">
								<b>Total:</b>
							</div>
							<div class="col-md-5">
								<span>$</span><span id="total"></span>
							</div>
						</div>
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-md-4">
						<a class="btn btn-md btn-warning" href="index">Exit 3-B.com</a>
					</div>
					<div class="col-md-4 text-center">
						<a class="btn btn-md btn-secondary" href="#">Print</a>
					</div>
					<div class="col-md-4 text-end">
						<a class="btn btn-md btn-primary" href="/search">New Search</a>
					</div>
				</div>
			</div>
		</div>

		{% include './view/footer.php' %}

		<script>loadCart();</script>
		<script>loadUserInfo();</script>
		<script>purchase();</script>
		
	</body>
</HTML>
