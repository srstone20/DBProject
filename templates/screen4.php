
<!-- HTML by Andrew Moots & Miroslav Pavlovski w/ outline from Prithviraj Narahari & Alexander Martens & Bootstrap -->
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<link rel="stylesheet" href="/static/css/custom.css">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>BOOK REVIEWS - 3-B.com</title>
	</head>
	<body class="d-flex flex-column min-vh-100">
        
		{% include './view/header.php' %}

        <div class="container-fluid">
			<div class="standard-container bg-white shadow">
				<h1 class="h3 mb-3 fw-normal">Reviews</h1>
				<p><b>Reviews for:</b> {{ISBN}} </p>
				<div id="reviews-container"class="reviews-container">
					<div class="row">
						<div class="col">
							Blah blah
						</div>
					</div>
				</div>
				<div class="text-center">
					<a class="btn btn-md btn-primary" href="screen3">Done</a>
				</div>
			</div>
		</div>

		{% for review in reviewList %}
			<div class="row">
				<div class="col">
					{{review}}
				</div>
			</div>
		{% endfor %}

		{% include './view/footer.php' %}

	</body>
</html>
