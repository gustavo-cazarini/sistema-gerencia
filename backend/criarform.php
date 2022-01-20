<?php
    include 'myconnect.php';

    if(empty($_FILES['imagem']['tmp_name']) || !is_uploaded_file($_FILES['imagem']['tmp_name'])) {
        $imagem = "";
    }
    else {
        $tmpName = $_FILES['imagem']['tmp_name'];
        $imgSize = $_FILES['imagem']['size'];
        $imagem = "";
        if($tmpName != "none") {
            $fp = fopen($tmpName, "rb");
            $conteudo = fread($fp, $imgSize);
            $imagem = base64_encode($conteudo);
            fclose($fp);
        }
    }

    $nome = $_POST['nome'];
    $estoque = $_POST['estoque'];
    $valor = $_POST['valor'];

    $query = mysqli_query($conn, "call Sp_insProduto('$imagem', '$nome', '$estoque', '$valor')");
    if(mysqli_affected_rows($conn) > 0){
        echo "Sucesso ao cadastrar produto";
    }
    else{
        echo "Falha ao inserir no banco de dados";
    }
    mysqli_close($conn);
?>