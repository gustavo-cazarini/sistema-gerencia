<?php
    session_start();

    if(!isset($_SESSION['usuario']))
    {
        header('Location: ../login.php');
    }
    else
    {
        $item = $_GET['item'];

        if($item == 'criar')
        {
            $conteudo = file_get_contents('../views/criar.php');
            echo json_encode(['conteudo' => $conteudo]);
        }
        else if($item == 'listar')
        {
            $conteudo = file_get_contents('../views/listar.php');
            echo json_encode(['conteudo' => $conteudo]);
        }
        else if($item == 'atualizar')
        {
            $conteudo = file_get_contents('../views/atualizar.php');
            echo json_encode(['conteudo' => $conteudo]);
        }
        else if($item == 'excluir')
        {
            $conteudo = file_get_contents('../views/excluir.php');
            echo json_encode(['conteudo' => $conteudo]);
        }
        else
        {
            echo json_encode(['conteudo' => 'essa página não existe']);
        }
    }
?>