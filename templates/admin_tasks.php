
<!-- HTML by Andrew Moots & Miroslav Pavlovski w/ outline from Prithviraj Narahari & Alexander Martens & Bootstrap -->
<!DOCTYPE HTML>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">	
		<link rel="stylesheet" href="/static/css/custom.css">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>ADMIN TASKS</title>
	</head>
	<body class="d-flex flex-column min-vh-100">
        
		{% include './view/header.php' %}

		<div class="container-fluid">
			<div class="login-container text-center bg-white shadow">
				<h1 class="h3 mb-3 fw-normal">Admin Tasks</h1>
				<div class="d-grid gap-2 col-8 mx-auto">
					<a class="btn btn-md btn-primary btn-block" href="manage_bookstorecatalog">Manage Bookstore Catalog</a>
				</div>
				<br/>
				<div class="d-grid gap-2 col-8 mx-auto">
					<a class="btn btn-md btn-primary btn-block" href="#">Place Orders</a>
				</div>
				<br/>
				<div class="d-grid gap-2 col-8 mx-auto">
					<a class="btn btn-md btn-primary btn-block" href="reports">Generate Reports</a>
				</div>
				<br/>
				<div class="d-grid gap-2 col-8 mx-auto">
					<a class="btn btn-md btn-primary btn-block" href="update_adminprofile">Update Admin Profile</a>
				</div>
				<br/>
				<div class="d-grid gap-2 col-8 mx-auto">
					<a class="btn btn-md btn-warning btn-block" href="index">Exist 3-B.com [Admin]</a>
				</div>
			</div>
		</div>

		{% include './view/footer.php' %}
	</body>	
</html>