<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wildfire Tracker</title>
    <link rel="stylesheet" href="{{ asset('login/style.css') }}">
</head>
<body>
    <main>
        <div class="row">
            <div class="colm-logo">
                {{-- <h2>Silahkan Login!</h2> --}}
            </div>
            <div class="colm-form">

                <div class="form-container">
                    <form action="{{ route('actionLogin') }}" method="post">
                        @csrf
                        <input type="text" name="email" placeholder="Email address">
                        <input type="password" name="password" placeholder="Password">
                        <button class="btn-login">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
