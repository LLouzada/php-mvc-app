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
    }

    var filteredResultsContainer = document.getElementById('filtered-results');
    if (filteredResultsContainer) {

        console.log('filteredResultsContainer');
        document.getElementById('first-page').addEventListener('click', function (e) {
            e.preventDefault();

            //pego o input de offset
            var offset = document.getElementById('offset');

            // pega currentPage
            var currentPage = document.getElementById('currentPage').value;
            if (parseInt(currentPage) == 1) {
                return;
            }
            //seto o valor do offset para 0
            offset.value = 0;

            //seto a value do currentPage para 1
            document.getElementById('currentPage').value = 1;

            //pego o form
            var form = document.getElementById('paginationForm');

            // submeto o formulário
            form.submit();
        });

        document.getElementById('previous-page').addEventListener('click', function (e) {
            e.preventDefault();
            //pego o input de offset
            var offset = document.getElementById('offset').value
            offset = parseInt(offset);

            if (offset == 0) {
                return;
            }

            // pega currentPage
            var currentPage = document.getElementById('currentPage').value;
            if (parseInt(currentPage) == 1) {
                return;
            }
            // pega o valor do limit
            var limit = document.getElementById('limit').value;
            limit = parseInt(limit);

            //seto o valor do offset para o valor atual - limit
            offset = offset - limit;

            //coloca o valor do offset no input
            document.getElementById('offset').value = offset;

            //seto a value do currentPage para o valor atual - 1
            document.getElementById('currentPage').value = parseInt(currentPage) - 1;

            //pego o form
            var form = document.getElementById('paginationForm');

            // submeto o formulário
            form.submit();
        });

        document.getElementById('next-page').addEventListener('click', function (e) {
            e.preventDefault();
            //pego o input de offset
            var offset = document.getElementById('offset').value
            offset = parseInt(offset);

            // pega currentPage
            var currentPage = document.getElementById('currentPage').value;
            currentPage = parseInt(currentPage);

            // pega o valor do limit
            var limit = document.getElementById('limit').value;
            limit = parseInt(limit);

            // pego o valor do countResults
            var countResults = document.getElementById('countResults').value;
            countResults = parseInt(countResults);

            if (offset + limit >= countResults) {
                return;
            }

            //seto o valor do offset para o valor atual + limit
            offset = offset + limit;

            //coloca o valor do offset no input
            document.getElementById('offset').value = offset;

            console.log('currentPage: ' + currentPage);

            //seto a value do currentPage para o valor atual + 1
            currentPage + 1;
            document.getElementById('currentPage').value = currentPage;

            //pego o form
            var form = document.getElementById('paginationForm');

            // submeto o formulário
            form.submit();

        });

        document.getElementById('last-page').addEventListener('click', function (e) {
            e.preventDefault();

            //pego o input de offset
            var offset = document.getElementById('offset').value
            offset = parseInt(offset);

            // pega o valor do limit
            var limit = document.getElementById('limit').value;
            limit = parseInt(limit);

            // pego o valor do countResults
            var countResults = document.getElementById('countResults').value;
            countResults = parseInt(countResults);

            if (offset + limit >= countResults) {
                return;
            }

            //seto o valor do offset para o valor atual + limit
            offset = countResults - limit;

            //coloca o valor do offset no input
            document.getElementById('offset').value = offset

            //seto a value do currentPage para o valor atual + 1
            document.getElementById('currentPage').value = Math.ceil(countResults / limit);

            //pego o form
            var form = document.getElementById('paginationForm');

            // submeto o formulário
            form.submit();

        });

    }
});

function openAnimalDetails(animalId) {
    console.log('openAnimalDetails');
    console.log('animalId: ' + animalId);

    //pego o form
    var form = document.getElementById('animalDetailsForm');

    //seto o valor do animalId
    document.getElementById('animalId').value = animalId;
    // submeto o formulário
    form.submit();
}

