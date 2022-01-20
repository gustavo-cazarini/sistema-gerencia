<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
    <link type="text/css" rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-3 me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-3">
                        <a class="nav-link" data-item="criar">Criar</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" data-item="listar">Listar</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" data-item="atualizar">Atualizar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-item="excluir">Excluir</a>
                    </li>
                </ul>
                <div class="d-flex me-5">
                    <i class="bi bi-person me-2"></i>
                    <span class="border bg-transparent fw-normal text-white pe-1 ps-1"><?php echo $_SESSION['usuario'] ?></span>
                </div>
                <div class="fs-4 me-3">
                    <a id="logout" class="logout-btn"><i class="bi bi-box-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="w-100 p-2">
        <div id="conteudo" class="bg-white">
            <div class="text-center">
                <p class="fs-2 fw-bolder text-uppercase">Painel de Controle</p>
                <p class="text-muted fs-4">Escolha uma opção na barra de navegação</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>
</body>
</html>