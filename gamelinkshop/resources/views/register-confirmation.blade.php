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

    <div class="register-container mt-5 pt-5">
        <div class="d-flex justify-content-center text-align-center flex-column align-items-center mb-3">
            <div class="swal-icon swal-icon--success">
                <span class="swal-icon--success__line swal-icon--success__line--long"></span>
                <span class="swal-icon--success__line swal-icon--success__line--tip"></span>
                <div class="swal-icon--success__ring"></div>
                <div class="swal-icon--success__hide-corners"></div>
            </div>
        </div>
        <div class="d-flex justify-content-center text-align-center flex-column align-items-center mb-4">
            <span class="mb-2"><b>Cadastro realizado com sucesso!</b></span>
            <span>Entre agora no nosso e-commerce!</span>
        </div>
        <div class="d-flex justify-content-center text-align-center flex-column align-items-center">
            <a href="{{route('login')}}" class="cart-ref"><button class="btn-generic">Logar</button></a>
        </div>
    </div>

    <!-- #region SCRIPT-->
    <script src="./js/register.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- #endregion -->
</body>

</html>