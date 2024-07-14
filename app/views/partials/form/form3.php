<div class="row">
    <div class="col-12">
        <label for="busca-por-anima" class="form-label" style="cursor: pointer;" data-bs-toggle="collapse" data-bs-target="#form3-container"><strong class="me-2">por Grupo</strong><i class="fa-solid fa-caret-down"></i></label>
    </div>
    <div class="collapse" id="form3-container">
        <div class="row">
            <div class="col-2">
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria</label>
                    <select class="form-select form-select-sm filter-input" id="categoria" aria-label="Selecione a Raça" name="categoria">
                        <option value="">Todas</option>
                        <option value="1">CL</option>
                        <option value="2">LA</option>
                        <option value="3">PA</option>
                        <option value="4">PC</option>
                        <option value="5">PO</option>
                        <option value="6">PI</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="variedade" class="form-label">Variedade</label>
                    <select class="form-select form-select-sm filter-input" id="variedade" aria-label="Selecione a Raça" name="variedade">
                        <option value="">Todos</option>
                        <option value="P">Padrão</option>
                        <option value="M">Mocho</option>
                    </select>
                </div>
            </div>
            <div class="col-2">
                <div class="mb-3">
                    <label for="situacao" class="form-label">Situação do Animal</label>
                    <select class="form-select form-select-sm filter-input" id="situacao" aria-label="situacao" name="situacao">
                        <option value="A">Ativos</option>
                        <option value="I">Inativos</option>
                        <option value="" selected="">Todas</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="sexo" class="form-label">Sexo</label>
                    <select class="form-select form-select-sm filter-input" id="sexo" aria-label="sexo" disabled name="sexo">
                        <option value="1" selected>Macho</option>
                    </select>
                </div>
            </div>
            <div class="col"></div>
            <div class="col-6">
                <label for="intervalo-nasc1" class="form-label">Intervalo de Nasc.</label>
                <div class="d-flex align-items-center">
                    <div class="my-3">
                        <label for="intervalo-nasc1" class="form-label">Data Inicial</label>
                        <input type="date" class="form-control form-control-sm filter-input py-0 ps-2 pe-0" id="intervalo-nasc1" placeholder="" name="intervalo-nasc1">
                    </div>
                    <div class="my-3 ms-2">
                        <label for="intervalo-nasc2" class="form-label">Data Final</label>
                        <input type="date" class="form-control form-control-sm filter-input py-0 ps-2 pe-0" id="intervalo-nasc2" placeholder="" name="intervalo-nasc2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>