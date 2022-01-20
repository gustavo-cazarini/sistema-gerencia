$(document).ready(function() {
    $('#login_form').on('submit', function(e) {
        e.preventDefault();

        var usuario = $('#usuario').val();
        var senha = $('#senha').val();

        $.ajax({
            url: "backend/loginform.php",
            type: "POST",
            data: {
                usuario: usuario,
                senha: senha
            },
            cache: false,
            success: function (dataResult) {
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200) {
                    location.href = "index.php";
                }
                else if(dataResult.statusCode==201) {
                    $('#error').removeClass('d-none');
                    $('#error').html('Usuário ou senha inválidos.')
                }
            }
        });
    });

    $('#logout').on('click', function(){
        location.href = "backend/logout.php"
    });

    function getDashboardItem(name) {
        $.ajax({
            type: 'GET',
            url: 'backend/getview.php',
            data: {
                item: name
            }
        }).then(function(res){
            let data = JSON.parse(res);

            $('#conteudo').html(data.conteudo);
        });
    }

    $('a[data-item]').on('click', function(e) {
        e.preventDefault();

        let dataItem = $(this).attr('data-item');
        getDashboardItem(dataItem);
    });

    // CRIAR - ATUALIZAR
    $('.input-img').on('change', function(){
        const file = this.files[0];
        if (file){
            let reader = new FileReader();
            reader.onload = function(event){
            console.log(event.target.result);
            $('.previewImg').attr('src', event.target.result);
            }
            reader.readAsDataURL(file);
        }
    });

    $('.valor').mask('000.000.000,00', {reverse: true});


    // CRIAR
    $('#criar_form').on('submit', function(e) {
        e.preventDefault();

        var data = new FormData();

        var imagem = $('#imgProduto').prop('files')[0];
        var nome = $('#nome').val();
        var estoque = $('#estoque').val();
        var valor = $('#valor').cleanVal();
        valor = valor.substring(0,valor.length-2)+"."+valor.substring(valor.length-2);

        data.append('imagem', imagem);
        data.append('nome', nome);
        data.append('estoque', estoque);
        data.append('valor', valor);

        $.ajax({
            url: "backend/criarform.php",
            type: "POST",
            data: data,
            success: function (dataResult) {
                if(dataResult.replace(/ .*/,'') == "Falha") {
                    $('#mensagem').removeClass('text-success');
                    $('#mensagem').addClass('text-danger');
                    $('#mensagem').html(dataResult);
                }
                else {
                    $('#mensagem').html(dataResult);
                }
                $('#criar_form').trigger("reset");
                $('#nome').focus();
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });


});