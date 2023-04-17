
<!-- HTML by Andrew Moots & Miroslav Pavlovski w/ outline from Prithviraj Narahari & Alexander Martens & Bootstrap -->
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<link rel="stylesheet" href="/static/css/custom.css">
		<link rel="stylesheet" href="/static/css/alertify.min.css">

		<script src="/static/js/alertify.min.js"></script>
		<script src="/static/js/review.js"></script>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>BOOK REVIEWS - 3-B.com</title>
	</head>
	<body class="d-flex flex-column min-vh-100">
        
		{% include './view/header.php' %}

        <div class="container-fluid">
			<div class="standard-container bg-white shadow">
				<h1 class="h3 mb-3 fw-normal">Reviews</h1>
				<p><b>Reviews for:</b> {{title}} </p>
				<div id="reviews-container"class="reviews-container">
					{% for review in reviewList %}
						<div class="row">
							<div class="col">
								{{review[0]}}
							</div>
						</div>
					{% endfor %}
				</div>
				<div class="text-center">
					<a class="btn btn-md btn-primary" href="/search">Done</a>
				</div>
			</div>
		</div>

		<div class="standard-container bg-white shadow">
			<form id="review-form" method="post">
				<input id="uname-input" name="username" type="hidden">
				<div>
					<label for="review">Write a review here!</label>
					<br>
					<textarea name="review"></textarea>
				</div>
			</form>
			<br>
			<button class="btn btn-md btn-primary" onclick="submitReview()">Submit</button>
		</div>

		{% include './view/footer.php' %}

	</body>
</html>
