function enviar() {

    var name = document.getElementById("nameid");

    if (name.value != "") {
        alert('Obrigado pelo contato, ' + name.value);
    }
}