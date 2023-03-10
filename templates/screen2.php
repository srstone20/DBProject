
<!-- HTML by Andrew Moots & Miroslav Pavlovski w/ outline from Prithviraj Narahari & Alexander Martens & Bootstrap -->
<html>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<link rel="stylesheet" href="/static/css/custom.css">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>SEARCH - 3-B.com</title>
	</head>
	<body class="d-flex flex-column min-vh-100">
        
		{% include './view/header.php' %}

		<div class="container-fluid">
			<div class="standard-container bg-white shadow">
				<h1 class="h3 mb-3 fw-normal">New Search</h1>
				<div class="row">
					<div class="col-md-3">
						<div class="d-flex align-items-center" style="height: 100%;">
							<b>Search For:</b>
						</div>
					</div>
					<div class="col-md-6">
						<input id="search-bar" type="text" class="form-control" id="inputSearch" placeholder="Title, Author, etc...">
					</div>
					<div class="col-md-3 text-end">
						<button id="search-button" class="btn btn-md btn-primary">Search</button>
						<script>
							var but = document.getElementById("search-button");
							but.onclick = function() {
								var keywords = parseSearch();
								open("/screen3/" + keywords, "_self");
							}
							function parseSearch() {
								return document.getElementById("search-bar").value;
							}
						</script>
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-md-3">
						<div class="d-flex align-items-center" style="height: 100%;">
							<b>Search In:</b>
						</div>
					</div>
					<div class="col-md-6">
						<select class="form-select" multiple aria-label="multiple select example">
							<option value="anywhere" selected='selected'>Keyword anywhere</option>
							<option value="title">Title</option>
							<option value="author">Author</option>
							<option value="publisher">Publisher</option>
							<option value="isbn">ISBN</option>	
						</select>
					</div>
					<div class="col-md-3 text-end">
						<a class="btn btn-md btn-secondary" href="shopping_cart">Manage Shopping Cart</a>
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-md-3">
						<div class="d-flex align-items-center" style="height: 100%;">
							<b>Category:</b>
						</div>
					</div>
					<div class="col-md-6">
						<select id="inputState" class="form-select">
							<option selected>All Categories</option>
							<option value='1'>Fantasy</option>
							<option value='2'>Adventure</option>
							<option value='3'>Fiction</option>
							<option value='4'>Horror</option>
						</select>
					</div>
					<div class="col-md-3 text-end">
						<a class="btn btn-md btn-warning" href="index">Exit 3-B.com</a>
					</div>
				</div>
			</div>
		</div>

		{% include './view/footer.php' %}

	</body>
</html>
