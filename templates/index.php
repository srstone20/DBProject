<!-- HTML by Andrew Moots & Miroslav Pavlovski w/ outline from Prithviraj Narahari & Alexander Martens & Bootstrap -->
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="/static/css/custom.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Welcome to Best Book Buy Online Bookstore!</title>
    </head>
    <body class="d-flex flex-column min-vh-100">
        
        {% include './view/header.php' %}

        <div class="container-fluid">
            <div class="login-container bg-white shadow">
                <h5>Main Menu</h5>
                <br/>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="group1" value="SearchCat" onclick="document.location.href='screen2'">
                        <label class="form-check-label">Search Online</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="group1" value="customer_registration" onclick="document.location.href='customer_registration'">
                        <label class="form-check-label">New Customer</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="group1" value="user_login" onclick="document.location.href='user_login'">
                        <label class="form-check-label">Returning Customer</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="group1" value="admin_login" onclick="document.location.href='admin_login'">
                        <label class="form-check-label">Administrator</label>
                    </div>
                    <br/>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-primary" type="submit" name="submit">Enter</button>
                    </div>
                </div>
            </div>
        </div>
        
        {% include './view/footer.php' %}

    </body>
</html>