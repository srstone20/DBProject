
<!-- HTML by Andrew Moots & Miroslav Pavlovski w/ outline from Prithviraj Narahari & Alexander Martens & Bootstrap -->
<!DOCTYPE HTML>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<link rel="stylesheet" href="/static/css/custom.css">
		<link rel="stylesheet" href="/static/css/alertify.min.css">
		<script src="/static/js/cart.js"></script>
		<script src="/static/js/checkout.js"></script>
		<script src="/static/js/alertify.min.js"></script>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Shopping Cart</title>
	</head>
	<body class="d-flex flex-column min-vh-100">
        
		{% include './view/header.php' %}

		<div class="container-fluid">
			<div class="standard-container bg-white shadow">
					<h1 class="h3 mb-3 fw-normal">Shopping Cart</h1>
					<div class="row">
						<div class="col-md-3">
							<a class="btn btn-md btn-warning" href="index">Exit 3-B.com</a>
						</div>
						<div class="col-md-3">
							<a class="btn btn-md btn-secondary" href="/search">New Search</a>
						</div>
						<div class="col-md-6 text-end">
							<button class="btn btn-md btn-primary" onclick="startCheckout()">Proceed to Checkout</button>
						<!--
							After testing, I'm always getting the popup. If I open link, login right away, then go to manage cart,
							I get the popup even thought I just logged in.
						-->
						</div>
					</div>
					<div class="cart-container">
						<div class="row head">
							<div class="col-md-2">
								Remove
							</div>
							<div class="col-md-7">
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
						<div class="col-md-6">
							<a class="btn btn-md btn-secondary" href="#">Recalculate Payment</a>
						</div>
						<div class="col-md-6 text-end">
							<b>Subtotal:</b> <span>$</span><span id="subtotal"></span>
						</div>
					</div>
				</div>
			</div>
		</div>

		{% include './view/footer.php' %}

		<script>loadCart();</script>
	</body>
</html>
