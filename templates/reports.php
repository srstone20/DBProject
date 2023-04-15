
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<link rel="stylesheet" href="/static/css/custom.css">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>ADMIN REPORTS - 3-B.com</title>
	</head>
	<body class="d-flex flex-column min-vh-100">
        
		{% include './view/header.php' %}
		
        <div class="container-fluid">
			<div class="standard-container bg-white shadow">
				<h1 class="h3 mb-3 fw-normal"><b>Report:</b></h1>
				<div id="reviews-container"class="reviews-container">
				<h3>Number of Registered Users:</h3>
					<p>{{num_of_registered_users[0]}}</p>
				<h3>Number of Books per Genre:</h3>
					{% for item in num_of_books_per_genre %}
						<p>{{item}}</p>
					{% endfor %}
				<h3>Monthly Sales per Month:</h3>
					{% for item in monthly_sales %}
					<p>{{item}}</p>
					{% endfor %}
				<h3>Number of Reviews per Book</h3>
					{% for item in book_titles_and_num_of_reviews %}
						<p>{{item}}</p>
					{% endfor %}
				</div>
				<div class="d-grid gap-2 col-8 mx-auto" style="padding: 0rem 10rem">
					<a class="btn btn-md btn-warning btn-block" href="index">Exist 3-B.com [Admin]</a>
				</div>
			</div>
		</div>

		{% include './view/footer.php' %}

	</body>
</html>
