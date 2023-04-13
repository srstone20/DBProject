
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
				<h1 class="h3 mb-3 fw-normal"><b>Reports:</b></h1>
				<div id="reviews-container"class="reviews-container">
					{% for review in reviewList %}
						<div class="row">
							<div class="col">
								{{review[0]}}
							</div>
						</div>
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
