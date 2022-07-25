<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Mahasiswa</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);


        body {
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }

        .navbar-laravel {
            box-shadow: 0 2px 4px rgba(0, 0, 0, .04);
        }

        .navbar-brand,
        .nav-link,
        .my-form,
        .login-form {
            font-family: Raleway, sans-serif;
        }

        .my-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .my-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        .login-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .login-form .row {
            margin-left: 0;
            margin-right: 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="#">SIJALA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <button class="nav-link" href="{{ url('login') }}">Login</button>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <main class="my-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Registrasi Mahasiswa</div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="{{ url('store-register') }}"
                                method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">NIM</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="NIM" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Nama
                                        Lengkap</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="nama" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address"
                                        class="col-md-4 col-form-label text-md-right">Username</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="username" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">
                                        Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="user_name" class="form-control"
                                            name="confirmasi_password" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Nomor
                                        Hp</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control" name="no_hp" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">Alamat
                                        Email</label>
                                    <div class="col-md-6">
                                        <input type="email" id="present_address" class="form-control" name="email" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address"
                                        class="col-md-4 col-form-label text-md-right">Semester</label>
                                    <div class="col-md-6">
                                        <input type="text" id="permanent_address" class="form-control"
                                            name="semester" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="permanent_address"
                                        class="col-md-4 col-form-label text-md-right">Jurusan</label>
                                    <div class="col-md-6">
                                        <input type="text" id="permanent_address" class="form-control"
                                            name="jurusan" value="Teknik Informatika" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>
    <script>
        < script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" >
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </script>
</body>

</html>
