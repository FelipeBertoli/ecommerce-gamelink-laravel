const buttonAdd = document.getElementById("btn-add");
const buttonEdit = document.querySelectorAll("#btn-edit");
const buttonTrash = document.querySelectorAll("#btn-trash");
const buttonClose = document.getElementById("btn-close");
const resultadoDiv = document.getElementById('result');
result.innerHTML = "";

buttonAdd.addEventListener("click", function () {
    callDisabled();
    result.innerHTML = 
        `<div class="game-popup" id="popup">
            <form class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col-md-12">
                        <button type="button" class="close" onclick="closePopup()"><span aria-hidden="true">&times;</span></button>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <h3 class="dashed-title">Publicar jogo</h3>
                    </div>
                </div>
                <div class="form-container">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01">Título do jogo</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                            <label for="validationCustomUsername">Gêneros</label>
                            <div class="input-group">
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Escolha...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Escolha...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="invalid-tooltip">
                                    Insira os gêneros do jogo.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Valor</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">R$</span>
                                </div>
                                <input type="text" class="form-control" placeholder="00,00"
                                    oninput="formatValue(this)" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label>Descrição do jogo</label>
                            <textarea class="form-control"rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label>Link do jogo</label>
                        <input type="text" class="form-control"  required>
                    </div>
                </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label>Capa do jogo</label>
                            <input type="file" class="form-control" accept="image/*">
                        </div>
                    </div>
                </div>
                <button class="btn-generic btn-white" type="submit">Publicar</button>
            </form>
        </div>`
});

function openEdit() {
    callDisabled();
    result.innerHTML = 
    `<div class="game-popup" id="popup">
            <form class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col-md-12">
                        <button type="button" class="close" onclick="closePopup()"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <h3 class="dashed-title">Editar jogo</h3>
                    </div>
                </div>
                <div class="form-container">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01">Título do jogo</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Título do jogo"
                                required>
                            <div class="invalid-feedback">
                                Insira um título válido.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                            <label for="validationCustomUsername">Gêneros</label>
                            <div class="input-group">
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Escolha...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Escolha...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="invalid-tooltip">
                                    Insira os gêneros do jogo.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Valor</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">R$</span>
                                </div>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="00,00"
                                    oninput="formatValue(this)" required>
                                <div class="invalid-feedback">
                                    Insira um valor válido.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="exampleFormControlTextarea1">Descrição do jogo</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label>Capa do jogo</label>
                            <input type="file" class="form-control" accept="image/*">
                            <div class="invalid-tooltip">
                                Por favor, insira uma imagem válida.
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn-generic btn-white" type="submit">Editar</button>
            </form>
        </div>`
}

function closePopup() {
    buttonAdd.disabled = false;
    buttonAdd.classList.remove("disabled");
    buttonEdit.forEach(function(button) {
        button.disabled = false;
        button.classList.remove("disabled");
    });
    buttonTrash.forEach(function(button) {
        button.disabled = false;
        button.classList.remove("disabled");
    });
    buttonAdd.disabled = false;
    buttonAdd.classList.remove("disabled");
    result.innerHTML = '';
}

function callDisabled() {
    buttonAdd.disabled = true;
    buttonAdd.classList.add("disabled");
    buttonEdit.forEach(function(button) {
        button.disabled = true;
        button.classList.add("disabled");
    });
    buttonTrash.forEach(function(button) {
        button.disabled = true;
        button.classList.add("disabled");
    });
}

function formatValue(input) {
    let valor = input.value.replace(/\D/g, '');

    valor = (parseInt(valor) / 100).toLocaleString('pt-BR', {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2
    });

    input.value = valor;
}