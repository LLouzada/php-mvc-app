// AUtor: LLouzada

//Add event listener to the form to prevent submission if the 'raca' select is empty
document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('myForm');
    var select = document.getElementById('raca');

    // Listener para mudança no select
    if (select) {
        select.addEventListener('change', function () {
            // Resetar a mensagem de validação quando o usuário escolher uma opção válida
            if (this.value) {
                this.setCustomValidity('');
            }
        });
    }

    if (form) {
        form.addEventListener('submit', function (event) {
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

$(document).ready(function () {
    if ($('body').hasClass('filtered-results')) {
        // Quando o ícone para ir à primeira página é clicado
        $('#first-page').click(function (e) {
            e.preventDefault();
            enviarDados(1);
        });

        // Quando o ícone para ir à página anterior é clicado
        $('#previous-page').click(function (e) {
            e.preventDefault();
            var paginaAtual = parseInt($('#pagina').text().split(' / ')[0]);
            if (paginaAtual > 1) {
                enviarDados(paginaAtual - 1);
            }
        });

        // Quando o ícone para ir à próxima página é clicado
        $('#next-page').click(function (e) {
            e.preventDefault();
            var paginaAtual = parseInt($('#pagina').text().split(' / ')[0]);
            var totalPaginas = parseInt($('#pagina').text().split(' / ')[1]);
            if (paginaAtual < totalPaginas) {
                enviarDados(paginaAtual + 1);
            }
        });

        // Quando o ícone para ir à última página é clicado
        $('#last-page').click(function (e) {
            e.preventDefault();
            var totalPaginas = parseInt($('#pagina').text().split(' / ')[1]);
            enviarDados(totalPaginas);
        });

        function enviarDados(pagina) {
            $.ajax({
                url: '/consulta',
                type: 'POST',
                data: {
                    page: pagina,
                    raca: $('#raca').val(),
                    sexo: $('#sexo').val(),
                },
                success: function (response) {
                    console.log(response);
                },
                error: function (xhr, status, error) {
                    console.error("Erro ao enviar dados: " + error);
                }
            });
        }
    }
});
