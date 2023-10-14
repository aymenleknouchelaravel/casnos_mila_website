<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="auth/fonts/icomoon/style.css">
    <link rel="stylesheet" href="auth/css/owl.carousel.min.css">
    <link rel="stylesheet" href="auth/css/bootstrap.min.css">
    <link rel="stylesheet" href="auth/css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-2 container mb-5">
                    <img src="/landing/images/logo/logo.png" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-12 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            @include('shared.errors')
                            <form action="/login" method="post">
                                @csrf
                                <div class="form-group first">
                                    <label for="email">Email</label>
                                    <input name="email" type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input name="password" type="password" class="form-control" id="password">
                                </div>
                                <input type="submit" value="Log In" style="background-color: rgb(21, 21, 92)"
                                    class="btn text-white btn-block">
                                <div class="mt-3">
                                    <p class="mb-4">Don't have an account? <a class="link"
                                            href="/register">Register</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="auth/js/jquery-3.3.1.min.js"></script>
    <script src="auth/js/popper.min.js"></script>
    <script src="auth/js/bootstrap.min.js"></script>
    <script src="auth/js/main.js"></script>
</body>

</html>
