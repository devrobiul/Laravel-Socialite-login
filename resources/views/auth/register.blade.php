<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">



                <div class="card mb-3">

                    <div class="card-body">

                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                            <p class="text-center small">Enter your username & password to login</p>
                        </div>

                        <form class="row g-3 " action="{{ route('register.store') }}" method="post">
                            @csrf
                            <div class="col-12">
                                <label for="email" class="form-label">User name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">User email</label>
                                <input type="text" name="email" class="form-control" id="email"
                                    placeholder="Email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="col-12">
                                <label for="yourPassword" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="yourPassword"
                                    placeholder="Password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <a href="">Fotget password ?</a>

                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Login</button>
                            </div>
                            <a class="btn btn-block btn-outline-primary" href=""><i class="bi bi-facebook"
                                    aria-hidden="true"></i> Facebook</a>
                            <a class="btn btn-block btn-outline-dark" href=""><i class="bi bi-github"
                                    aria-hidden="true"></i> Github</a>
                            <a class="btn btn-block btn-outline-danger" href=""><i class="bi bi-google"
                                    aria-hidden="true"></i> Google</a>
                            <a class="btn btn-block btn-outline-info" href=""><i class="bi bi-linkedin"
                                    aria-hidden="true"></> Linkedin</a>

                        </form>

                    </div>
                </div>


            </div>
        </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
