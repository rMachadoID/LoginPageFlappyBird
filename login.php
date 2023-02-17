<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
   
    <title>Pagina de Login</title>
</head>
<body>
    <p> <img src="assets/img/Flappy_Logo.png" align="center"></p>
    <div class="login container">
        <div class="row container">
            <div class="card card-login container img-background-left" style="width: 20rem;">
                <div class="card-body col-4">
                    <h3>Entrar</h3>
                    <form method="post" action="usuario/usuarioLogin.php">
                        <div>
                            <label for="email">
                                <input type="email" placeholder="Email" id="email" name="email">
                                <div><p class="erro-email vermelho display-none">Email é obrigatório</p></div>
                            </label>
                        </div>
                        <div>
                            <label for="senha">
                                <input placeholder="Senha" type="password" id="senha" name="senha">
                                <div><p class="erro-email vermelho display-none">Email é obrigatório</p></div>
                            </label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input " type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Lembre-me</label>
                        </div>
                        <div class="d-grid gap-2">
                            <button id="btn-submit" class="btn btn-dark">Login</button>
                        </div>
                        <p>Ainda não tem conta? <a href="cadastrar.php">Registrar</a></p>
                    </form>
                </div>
            </div>
                <div class="card card-imagem col-8 container img-background-right" style="width: 18rem;">
                <a class="jogar" href="flappybird.php">
                <button id="btn-jogar" class="btn btn-dark" onclick="exibir_dados()">Jogar</button>
                </a>
                </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>