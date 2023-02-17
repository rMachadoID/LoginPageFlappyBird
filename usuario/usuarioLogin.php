<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Dados</title>
</head>
<body>
    <div class="card card-dados container" style="width: 40rem;">
    <div class="card-body">
        <h5 class="card-title">Dados</h5>
        <?php
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $cripto = $_POST['senha']; 

            
            function exibirDados($email, $senha, $cripto){
                echo "<br>Email: " .$email;
                echo "<br>Senha: " .$senha;
                echo "<br>Senha Criptografada: ".md5($cripto) ."<br>";

                return true;
            }
            exibirDados($email,$senha, $cripto,)
        ?>
        <div>
            <br>
            <a href="../login.php"><button  class="botao-voltar btn btn-outline-dark">Voltar</button></a>
        </div>
    </div>
    </div>
    
       
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>

