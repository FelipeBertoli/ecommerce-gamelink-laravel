<!DOCTYPE html>
<html lang="pt">

<!-- #region HEAD-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <link rel="stylesheet" href="{{asset('css/payment.css')}}">

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>

    <title>Gamelink Store</title>
</head>
<!-- #endregion -->

<body style="background: white;">
    <!-- #region HEADER-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="../../img/logo.png" alt=""></a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Loja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Biblioteca</a>
                    </li>
                </ul>

                <ul class="navbar-nav mt-2 mt-lg-0" style="display: flex; align-items: center;">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fi fi-br-shopping-cart"></i></a>
                    </li>

                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="display:flex; justify-content: center; align-items: center;">
                            <img src="../../img/default-user.jfif" alt="">
                            <span class="user-nick">Nickname</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#"><i class="fi fi-br-user"></i>Perfil</a>
                            <a class="dropdown-item" href="#"><i class="fi fi-br-settings-sliders"></i>Configurações</a>
                            <a class="dropdown-item" href="#"><i class="fi fi-br-sign-out-alt"></i>Sair</a>
                        </div>
                    </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- #endregion -->

    <!-- #region MAIN-->
    <main>
        <div class="payment-container">
            <div class="payment-group">
                <div class="swal-icon swal-icon--success">
                    <span class="swal-icon--success__line swal-icon--success__line--long"></span>
                    <span class="swal-icon--success__line swal-icon--success__line--tip"></span>
                    <div class="swal-icon--success__ring"></div>
                    <div class="swal-icon--success__hide-corners"></div>
                </div>
            </div>
            <div class="payment-group">
                <span><b>Compra realizada com sucesso!</b></span>
                <span>Vá aproveitar os seus jogos!</span>
            </div>
            <div class="payment-group">
                <a href="{{route('library')}}" class="cart-ref"><button class="btn-generic">Ir para biblioteca</button></a>
            </div>

        </div>
    </main>

    <!-- #endregion -->

    <!-- #region FOOTER-->
    <footer class="bg-light">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Desenvolvido para a unidade acadêmica de
                    Desenvolvimento Web do segundo ano do curso de Ciência da Computação da Unfil</a></li>
        </ul>
        <p class="text-center text-muted">&copy; 2023 Gamelink Inc. Todos os direitos reservados</p>
        <p></p>
    </footer>
    <!-- #endregion -->
    <!-- #region SCRIPT-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <!-- #endregion -->

</body>

</html>