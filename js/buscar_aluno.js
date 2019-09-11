$("#nome_aluno").on("keydown", function () {
    var aluno = $(this).val();

    $.post("cadastro/busca.php", {
        aluno: aluno
    }, function (msg) {
        $("#result").val(msg);
    });
});