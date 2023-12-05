<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Gamelink</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgba(77, 77, 255, 1);">
            <a class="navbar-brand" href="#"><img src="./img/tinylogo.png" alt=""></a>
        </nav>
    </header>
    <div class="welcome-container pt-5">
        <div class="welcome-content">
            <img class="welcome-logo" src="img/biglogo.png">

            <h1 class="welcome-text">Conectando jogadores e jogos.</h1>
            <button class="login-button" type="login" onclick="openPopup()">Login</button>
            
        </div>
        <div class="login-popup d-none" id="popup">
            <form class="needs-validation" action="{{route('login.post')}}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-12">
                        <button type="button" class="close" onclick="closePopup()"><span aria-hidden="true">&times;</span></button>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <h3 class="dashed-title">Login</h3>
                    </div>
                </div>
                <div class="form-container">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control" placeholder="Senha" name="password" required>
                    </div>
                </div>
                <div class="mt-1">
                    @if(session()->has('error'))
                    <div class="alert alert-danger rounded text-uppercase">{{session('error')}}!!!</div>
                    @endif
                </div>
                <button class="btn-default" type="submit">ENTRAR</button>
            </form>
            <a href="{{route('register')}}"><button class="btn-default">REGISTRAR-SE</button></a>
        </div>

    </div>
    <script src="../../js/login-popup.js"></script>
</body>

</html>