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
    <title>Register</title>
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
                            <form action="/register" method="post">
                                @csrf
                                <div class="form-group first">
                                    <label>Name</label>
                                    <input required name="name" type="text" class="form-control">
                                </div>
                                <div class="form-group first">
                                    <label>Surname</label>
                                    <input required name="surname" type="text" class="form-control">
                                </div>

                                <div class="form-group first">
                                    <label>Phone Number</label>
                                    <input required name="phone" type="number" class="form-control">
                                </div>
                                <div class="form-group first">
                                    <label>Adresse Register Commerce</label>
                                    <input required name="adresse_reg" type="text" class="form-control">
                                </div>
                                <div class="form-group first">
                                    <label>Numero Register Commerce</label>
                                    <input required name="num_reg" type="text" class="form-control">
                                </div>
                               
                                {{-- options --}}
                                <div class="form-group first">
                                    <label>State</label>
                                    <input required name="text" type="text" class="form-control">
                                </div>

                                {{-- options --}}
                                <div class="form-group first">
                                    <label>Sex</label>
                                    <input required name="text" type="text" class="form-control">
                                </div>

                                <div class="form-group first">
                                    <label>Email</label>
                                    <input required name="email" type="email" class="form-control">
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input required name="password" type="password" class="form-control" id="password">
                                </div>
                                <label class="text-muted">Birthday Date</label>
                                <div class="form-group first">
                                    <input required name="date_nais" type="date" class="form-control">
                                </div>
                                <label class="text-muted">Start Activity Date</label>
                                <div class="form-group first">
                                    <input required name="start_date" type="date" class="form-control">
                                </div>

                                <input type="submit" value="Register" style="background-color: rgb(21, 21, 92)"
                                    class="btn text-white btn-block">
                                <div class="mt-3">
                                    <p class="mb-4">Already have an account? <a class="link"
                                            href="/login">Login</a></p>
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
