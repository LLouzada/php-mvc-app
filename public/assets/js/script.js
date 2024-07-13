// AUtor: LLouzada

//Add event listener to the form to prevent submission if the 'raca' select is empty
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM carregado!');
    var form = document.getElementById('myForm');
    var select = document.getElementById('raca');

    // Listener para mudança no select
    if (select) {
        select.addEventListener('change', function() {
            // Resetar a mensagem de validação quando o usuário escolher uma opção válida
            if (this.value) {
                this.setCustomValidity('');
            }
        });
    }

    if (form) {
        form.addEventListener('submit', function(event) {
            console.log('submit');

            // Verificar se o select tem um valor ao submeter
            if (select.value === "") {
                select.setCustomValidity('Por favor, selecione uma raça válida.');
            } else {
                select.setCustomValidity('');
            }

            if (!this.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
                // Reportar a validade para mostrar a mensagem de erro se for inválido
                select.reportValidity();
            } else {
                // Código para processamento adicional se necessário
            }
        }, false);
    } else {
        console.log('Formulário não encontrado!');
    }
});
