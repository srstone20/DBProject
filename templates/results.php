
<!-- HTML by Andrew Moots & Miroslav Pavlovski w/ outline from Prithviraj Narahari & Alexander Martens & Bootstrap -->
<html>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<link rel="stylesheet" href="/static/css/custom.css">
		<link rel="stylesheet" href="/static/css/quantityButton.css">
		<script src="/static/js/cart.js"></script>
		<script src="/static/js/quantityButton.js"></script>

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
						<a class="btn btn-md btn-primary" href="/shopping_cart">Manage Shopping Cart</a>
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
						<!-- <div class="col-md-2 text-end">
							Price
						</div> -->
					</div>
					<div class="body">
						{% for book in books %}
							<div id="book-{{ book[0] }}" class="row">
								<div class="col-md-3 text-center">
									<div class="quantity-container" style="padding:0.25em;">
										<div class="quantity-display">
											<input class="book-quantity" value="1"></input>
											<div class="quantity-button-container">
												<button class="quantity-button inc" onclick="increment({{ book[0] }})">+</button>
												<button class="quantity-button dec" onclick="decrement({{ book[0] }})">-</button>
											</div>
										</div>
									</div>
									<div style="padding:0.25em;">
										<button class="btn btn-sm btn-primary" onclick="addToCart({{ book[0] }})">Add to Cart</button>
									</div>
									<div style="padding:0.25em;">
										<button id="reviews-button" class="btn btn-sm btn-secondary">Reviews</button>
									</div>
									<script>
										var but = document.getElementById("reviews-button");
										but.onclick = function() {
											open("/reviews/" + but.closest(".row").querySelector(".ISBN").innerHTML, "_self");
										}
									</script>
								</div>
								<img class="cover-image" src="{{ book[8] }}" alt="Where is it?" style="width:100px;height:100px;">
								<div class="book-info col-md-7" style="width:40%;">
									<p>
										<b class="title">{{ book[1] }}</b><br/>
										By <b class="author">{{ book[2] }}</b><br/>
										<span class="publisher">Publisher: {{ book[3] }}</span><br/>
										<span></span>ISBN: <span class="ISBN">{{ book[0] }}</span> <br/>
									</p>
								</div>
								<div class="col-md-2 text-center">
									<b class="price">${{ book[6] / 100 }}</b>
								</div>
							</div>
						{% endfor %}
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<a class="btn btn-md btn-warning" href="/index">Exit 3-B.com</a>
					</div>
					<div class="col-md-4">
						<a class="btn btn-md btn-secondary" href="/search" referrerpolicy="origin">New Search</a>
					</div>
					<div class="col-md-5 text-end">
						<a type="submit" class="btn btn-md btn-primary" href="/confirm_order">Proceed to Checkout</a>
					</div>
				</div>
			</div>
		</div>

		{% include './view/footer.php' %}

	</body>
</html>
