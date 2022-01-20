<?php
    session_start();
?>

<h2 class="text-uppercase ms-3" id="teste">Criar</h2>
<hr/>
<div id="mensagem" class="text-center text-success fw-bold fs-5"></div>
<form id="criar_form" enctype="multipart/form-data">
    <div class="row g-3 align-items-center justify-content-evenly">
        <div class="col-auto mb-3">
            <p class="fw-bold text-center">Imagem do Produto</p>
            <img class="previewImg" id="previewImg" src="#" alt="" width="250" height="250"/>
            <input type="file" class="input-img" name="imgProduto" id="imgProduto" accept="image/*" hidden>
            <label for="imgProduto" class="btn btn-outline-primary d-block mt-3">Selecionar Imagem</label>
        </div>
        <div class="col-auto">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome *</label>
                <input type="text" class="form-control" name="nome" id="nome" maxlength="60" required>
            </div>
            <div class="mb-3">
                <label for="estoque" class="form-label">Estoque *</label>
                <input type="number" class="form-control" name="estoque" id="estoque" maxlength="10" required>
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Valor Unitário *</label>
                <div class="input-group">
                    <span class="input-group-text">R$</span>
                    <input type="text" class="form-control valor" name="valor" id="valor" required>
                </div>
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-outline-success">Salvar</button>
                <button type="reset" class="btn btn-outline-danger">Limpar</button>
            </div>
        </div>
    </div>
</form>

<script>
    if($('.input-img').val()==""){
        $('.previewImg').attr('src', 'img/no_image.jpg');
    }
    $.getScript('js/script.js');
</script>