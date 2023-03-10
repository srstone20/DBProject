
<!-- HTML by Andrew Moots & Miroslav Pavlovski w/ outline from Prithviraj Narahari & Alexander Martens & Bootstrap -->
<html>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<link rel="stylesheet" href="/static/css/custom.css">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title> Search Result - 3-B.com </title>
	</head>
	<body class="d-flex flex-column min-vh-100">
        
		{% include './view/header.php' %}

        <div class="container-fluid">
			<div class="standard-container bg-white shadow">
				<h1 class="h3 mb-3 fw-normal">Search Results</h1>
				<div class="row">
					<div class="col-md-6">
						Your shopping cart has 0 items
					</div>
					<div class="col-md-6 text-end">
						<a class="btn btn-md btn-primary" href="confirm_order">Manage Shopping Cart</a>
					</div>
				</div>
				<div class="cart-container">
					<div class="row head">
						<div class="col-md-3 text-center">
							Controls
						</div>
						<div class="col-md-7">
							Book Description
						</div>
						<div class="col-md-2 text-end">
							Price
						</div>
					</div>
					<div class="body">
						<div class="row">
							<div class="col-md-3 text-center">
								<a class="btn btn-sm btn-primary" href="#">Add to Cart</a>
								<br/>
								<br/>
								<a class="btn btn-sm btn-secondary" href="screen4">Reviews</a>
							</div>
							<div class="col-md-7">
								<p>
									SQL Server 2000 for Experienced DBA's<br/>
									<b>By:</b> Brian Knight<br/>
									<b>Publisher:</b> McGraw-Hill<br/>
									<b>ISBN:</b> 1234567890<br/>
								</p>
							</div>
							<div class="col-md-2 text-end">
								$34.99
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 text-center">
								<a class="btn btn-sm btn-primary" href="#">Add to Cart</a>
								<br/>
								<br/>
								<a class="btn btn-sm btn-secondary" href="screen4">Reviews</a>
							</div>
							<div class="col-md-7">
								<p>
									SQL Server 2000 for Experienced DBA's<br/>
									<b>By:</b> Brian Knight<br/>
									<b>Publisher:</b> McGraw-Hill<br/>
									<b>ISBN:</b> 1234567890<br/>
								</p>
							</div>
							<div class="col-md-2 text-end">
								$34.99
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<a class="btn btn-md btn-warning" href="index">Exit 3-B.com</a>
					</div>
					<div class="col-md-4">
						<a class="btn btn-md btn-secondary" href="screen2">New Search</a>
					</div>
					<div class="col-md-5 text-end">
						<a type="submit" class="btn btn-md btn-primary" href="confirm_order">Proceed to Checkout</a>
					</div>
				</div>
			</div>
		</div>

		{% include './view/footer.php' %}

	</body>
</html>
