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
            <a class="navbar-brand mr-auto" href="#"><img src="./img/tinylogo.png" alt=""></a>
        </nav>
    </header>

    <div class="register-container">
        <div class="register-content">
            <h3>PREENCHA SEUS DADOS</h3>
            <form class="needs-validation" action="{{route('register.post')}}" method="POST">
                @csrf
                <div class="register-option form-row mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" value="user" checked>
                        <label class="form-check-label">Usuário</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" value="publisher">
                        <label class="form-check-label">Publisher</label>
                    </div>
                </div>

                <div class="register-grid form-row mb-3">
                    <div class="col-md-7">
                        <label>Nome Completo</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="col-md-5">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                </div>
                <div class="register-grid form-row mb-3">
                    <div class="col-md-7">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>
                    <div class="col-md-5">
                        <label>Senha</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                </div>
                <div class="register-grid form-row mb-3">
                    <div class="col-md-12">
                        <label>Foto de perfil</label>
                        <input type="file" class="form-control" name="profile_pic" accept="image/*">
                    </div>
                </div>
                    @if(session()->has('error'))
                    <div class="alert alert-danger rounded text-uppercase">{{session('error')}}!!!</div>
                    @endif
                <button class="btn-default" type="submit">REGISTRAR-SE</button>
            </form>
            <a href="{{route('login')}}"><button class="btn-default" type="login">RETORNAR</button></a>
        </div>

        <!-- #region SCRIPT-->
        <script src="./js/register.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- #endregion -->
</body>

</html>