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
    })
});