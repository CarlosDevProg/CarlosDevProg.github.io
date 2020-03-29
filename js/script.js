function enviar() {

    var name = document.getElementById("nameid");

    if (name.value != "") {
        alert('Obrigado pelo contato, ' + name.value +'. A sua mensagem foi enviada com sucesso!');
    }
}