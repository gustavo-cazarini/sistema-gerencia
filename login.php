<?php
    // This php call is only to GitHub not detects the document as a hack file
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Gustavo Messa Cazarini">
    <title>Login - Sistema Gerência</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="css/stylesheet.css" />
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="login-form w-25 p-2 rounded-3">
            <form id="login_form" method="POST">
                <div class="text-center mb-5"><h1 class="fs-2 text-dark">Login</h1></div>
                <div class="input-group mb-3">
                    <div class="form-floating form-floating-group flex-grow-1">
                        <input 
                            type="text"
                            class="form-control bg-transparent" 
                            placeholder="Usuário"
                            id="usuario"
                            name="usuario"
                            aria-describedby="user-icon"
                            autofocus
                        />
                        <label for="usuario" class="fw-bold">Usuário</label>
                    </div>
                    <span class="input-group-text bg-transparent border-0 icone" id="user-icon"><i class="bi bi-person"></i></span>
                </div>
                <div class="input-group mb-5">
                    <div class="form-floating form-floating-group flex-grow-1">
                        <input 
                            type="password"
                            class="form-control bg-transparent" 
                            placeholder="Senha"
                            id="senha"
                            name="senha"
                            aria-describedby="pass-icon"
                        />
                        <label for="senha" class="fw-bold">Senha</label>
                    </div>
                    <span class="input-group-text bg-transparent border-0 icone" id="pass-icon"><i class="bi bi-key"></i></span>
                </div>
                <button type="submit" class="btn login-submit mb-3">Entrar <i class="bi bi-box-arrow-in-right"></i></button>
                <div id="error" class="alert alert-danger d-none text-center"></div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>