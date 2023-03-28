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
                    <a href="/search">Search Online</a>
                    <a href="/customer_registration">Sign Up</a>
                    <a href="/user_login">Login</a>
                    <a href="/admin_login">Administrator</a>
                </div>
            </div>
        </div>
        
        {% include './view/footer.php' %}

    </body>
</html>