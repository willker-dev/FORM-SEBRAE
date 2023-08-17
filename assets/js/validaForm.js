// validar formulario
function validaForm() {
    var d = document.querySelector('form');

    if (d.patrocinadora.value === "") {
        alert("Por favor informe o nome da empresa patrocinadora.");
        d.patrocinadora.focus();
        return false;
    }

    if (d.nome.value === "") {
        alert("Por favor informe o nome do(a) Participante.");
        d.nome.focus();
        return false;
    }

    if (d.data_nasc.value === "" || d.data_nasc.value.length !== 10 || !check_date(d.data_nasc.value)) {
        alert("Por favor informe a data de nascimento corretamente (dd/mm/aaaa).");
        d.data_nasc.focus();
        return false;
    }

    if (d.cpf.value === "" || d.cpf.value.length !== 14 || !check_cpf(d.cpf.value)) {
        alert("Por favor informe o CPF corretamente (14 dígitos).");
        d.cpf.focus();
        return false;
    }

    if (d.email.value === "") {
        alert("Por favor informe o e-mail.");
        d.email.focus();
        return false;
    }

    if (d.email.value !== "" && (d.email.value.indexOf('@') === -1 || d.email.value.indexOf('.') === -1)) {
        alert("O campo de e-mail deve conter um endereço eletrônico válido. Ex: nome@dominio.com");
        d.email.focus();
        return false;
    }

    if (d.txtCep.value === "") {
        alert("Por favor informe o CEP.");
        d.txtCep.focus();
        return false;
    }

    if (d.residencial.value === "" || d.residencial.value.length < 8) {
        alert("Por favor informe o telefone residencial corretamente.");
        d.residencial.focus();
        return false;
    }

    if (d.celular.value === "" || d.celular.value.length < 8) {
        alert("Por favor informe o telefone celular corretamente.");
        d.celular.focus();
        return false;
    }

    if (!d.solicito[0].checked && !d.solicito[1].checked) {
        alert("Escolha uma das opções.");
        d.solicito[0].focus();
        return false;
    }

    if (d.solicito[1].checked) {
        if (d.banco.value === "") {
            alert("Por favor informe se o seu banco é o Banco do Brasil ou o Itaú.");
            d.banco.focus();
            return false;
        }
        if (d.agencia.value === "" || d.codigo_agencia.value === "" || d.conta_corrente.value === "" || d.codigo_conta.value === "") {
            alert("Por favor informe todos os campos bancários.");
            return false;
        }
    }

    return true;
}

function check_date(date) {
    // Implementação da validação da data
    return true; // Retorne true se a data for válida
}

function check_cpf(numcpf) {
    // Implementação da validação do CPF
    return true; // Retorne true se o CPF for válido
}
