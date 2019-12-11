<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('sources/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('sources/form-style.css')}}" type="text/css">

    <title>Pilar Juanda - Login</title>

</head>

<body>
    <div class="landing-page text-black d-flex" style="background-image: url('{{ asset('sources/images/landing.jpg')}}">
        <div class="container my-auto clearfix">
            <div class="row">
                <div class="col-lg-12 form-box" style="max-width: 400px; margin: 0 auto;">

                    <div class="center">
                        <img src="{{ asset('sources/images/logo-pilar.png')}}" alt="logo-pillar">
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.postLogin')}}" method="post">

                            <div class="form-group">
                                <label for="usr">Username: </label>
                                <input type="text" class="form-control" id="usr" name="username">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password: </label>
                                <input type="password" class="form-control" id="pwd" name="password">
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary mt-2 " value="login">
                            </div>

                        </form>
                    </div>

                </div>
                <div class="col-lg-12 text-center mt-3 text-black">
                    <p>Copyrights &copy; 2018 by Ayaide.com</p>
                </div>
            </div>


        </div>
    </div>


    <script src="{{ asset('sources/js/bootstrap.js')}}"></script>
</body>

</html>