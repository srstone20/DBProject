<!-- HTML by Andrew Moots & Miroslav Pavlovski w/ outline from Prithviraj Narahari & Alexander Martens & Bootstrap -->
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="/static/css/custom.css">

        <script src="static/js/session.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Welcome to Best Book Buy Online Bookstore!</title>
    </head>
    <body class="d-flex flex-column min-vh-100">
        <script>clearSession();</script>
        {% include './view/header.php' %}

        <div class="container-fluid">
            <div class="login-container bg-white shadow">
                <h5>Main Menu</h5>
                <br/>
                <div>
                    <div class="d-grid gap-2 col-8 mx-auto">
                        <a class="btn btn-md btn-primary" href="/search" style="background-color:green;border-color:green;">Search Online</a>
                    </div>
                    <br>
                    <div class="d-grid gap-2 col-8 mx-auto">
                        <a class="btn btn-md btn-primary" href="/customer_registration">Sign Up</a>
                    </div> 
                    <br>
                    <div class="d-grid gap-2 col-8 mx-auto">
                        <a class="btn btn-md btn-primary" href="/user_login">Login</a>
                    </div>
                    <br>
                    <div class="d-grid gap-2 col-8 mx-auto">
                        <a class="btn btn-md btn-primary" href="/admin_login" style="background-color:grey;border-color:grey;">Administrator</a>
                    </div>
                </div>
            </div>
        </div>
        
        {% include './view/footer.php' %}

    </body>
</html>