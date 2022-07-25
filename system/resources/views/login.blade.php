<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Sistem</title>
</head>

<body>

    <div class="wrapper fadeInDown">
        <link rel="stylesheet" type="text/css" href="{{ url('public/login') }}/loginpage.css">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 style="color: black; font-family: Arial, Helvetica, sans-serif;"> Selamat Datang </h2>

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="{{ url('public/app') }}/images/sijala_hitam.png" id="icon" alt="User Icon" />
            </div>
            <br>
            <!-- Login Form -->
            <form action="{{ url('login') }}" method="post">
                @csrf
                <input type="text" class="fadeIn second" name="username" placeholder="login"><br required>
                <input type="password" class="fadeIn third" name="password" placeholder="password" required>
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

            <!-- Remind Passowrd -->
            <p>Jika Belum Memiliki Akun Silahkan <a href="{{ url('register') }}"> Rigistrasi Mahasiswa</a></p>
            <p>Jika Belum Memiliki Akun Silahkan <a href="{{ url('register_dosen') }}"> Rigistrasi Dosen</a></p>


        </div>
    </div>
</body>

</html>
