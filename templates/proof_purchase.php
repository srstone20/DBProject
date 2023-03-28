
<!-- HTML by Andrew Moots & Miroslav Pavlovski w/ outline from Prithviraj Narahari & Alexander Martens & Bootstrap -->
<!DOCTYPE HTML>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<link rel="stylesheet" href="/static/css/custom.css">

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
							<div class="col-md-5 text-end">
								<b>User ID:</b>
							</div>
							<div class="col-md-6">
								"Username"
							</div>
							<div class="col-md-5 text-end">
								<b>Date:</b>
							</div>
							<div class="col-md-6">
								"08/09/2022"
							</div>
							<div class="col-md-5 text-end">
								<b>Time:</b>
							</div>
							<div class="col-md-6">
								"10:47:23"
							</div>
							<br/>
							<br/>
							<div class="col-md-12 text-center">
								<b>Credit Card Information:</b>
							</div>
							<div class="col-md-12 text-center">
								"Visa 1234-5678-9012-3456"
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
						<div class="row">
							<div class="col-md-9">
								<p>
									SQL Server 2000 for Experienced DBA's<br/>
									<b>By:</b> Brian Knight<br/>
									<b>Price:</b> $34.99
								</p>
							</div>
							<div class="col-md-1 text-center">
								2
							</div>
							<div class="col-md-2 text-end">
								$69.98
							</div>
						</div>
						<div class="row">
							<div class="col-md-9">
								<p>
									SQL Server 2000 for Experienced DBA's<br/>
									<b>By:</b> Brian Knight<br/>
									<b>Price:</b> $34.99
								</p>
							</div>
							<div class="col-md-1 text-center">
								2
							</div>
							<div class="col-md-2 text-end">
								$69.98
							</div>
						</div>
						<div class="row">
							<div class="col-md-9">
								<p>
									SQL Server 2000 for Experienced DBA's<br/>
									<b>By:</b> Brian Knight<br/>
									<b>Price:</b> $34.99
								</p>
							</div>
							<div class="col-md-1 text-center">
								2
							</div>
							<div class="col-md-2 text-end">
								$69.98
							</div>
						</div>
						<div class="row">
							<div class="col-md-9">
								<p>
									SQL Server 2000 for Experienced DBA's<br/>
									<b>By:</b> Brian Knight<br/>
									<b>Price:</b> $34.99
								</p>
							</div>
							<div class="col-md-1 text-center">
								2
							</div>
							<div class="col-md-2 text-end">
								$69.98
							</div>
						</div>
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
								$279.92
							</div>
							<div class="col-md-7 text-end">
								<b>Shipping & Handling:</b>
							</div>
							<div class="col-md-5">
								$16.00
							</div>
							<div class="col-md-12">
								<hr>
							</div>
							<div class="col-md-7 text-end">
								<b>Total:</b>
							</div>
							<div class="col-md-5">
								$295.92
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

	</body>
</HTML>
