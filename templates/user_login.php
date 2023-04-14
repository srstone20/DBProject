<!-- HTML by Andrew Moots & Miroslav Pavlovski w/ outline from Prithviraj Narahari & Alexander Martens & Bootstrap -->
<!DOCTYPE HTML>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<link rel="stylesheet" href="/static/css/custom.css">
		<link rel="stylesheet" href="/static/css/alertify.min.css">

		<script src="/static/js/login.js"></script>
		<script src="/static/js/alertify.min.js"></script>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>User Login</title>
	</head>
	<body class="d-flex flex-column min-vh-100">
        
		{% include './view/header.php' %}

        <div class="container-fluid">
			<div class="login-container bg-white shadow">
				<form method="post">
					<h1 class="h3 mb-3 fw-normal">User Sign In</h1>
					<div class="form-floating">
						<input id="in-username" type="text" name="username" class="form-control" id="floatingInput">
						<label for="floatingInput">Username</label>
					</div>
					<div class="form-floating">
						<input id="in-password" type="password" name="PIN" class="form-control" id="floatingPassword">
						<label for="floatingPassword">PIN</label>
					</div>
					<br/>
					<button class="w-100 btn btn-lg btn-primary" onclick="login()" type="submit">Sign in</button>
					<script>
						function login() {
							var inputUsername = document.getElementById("floatingInput").value;
							var inputPassword = document.getElementById("floatingPassword").value;
							sessionStorage.setItem('username', inputUsername);
							sessionStorage.setItem('password', inputPassword);
						}
					</script>
				</form>
				<br/>
				<div class="d-grid gap-2 col-6 mx-auto">
					<a class="btn btn-md btn-warning btn-block" href="index">Cancel</a>
				</div>
			</div>
		</div>

		{% include './view/footer.php' %}

	</body>
</html>
