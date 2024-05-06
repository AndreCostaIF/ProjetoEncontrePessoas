@include('cabecalho')
<div class="row mt-5">
    <h1 class="text-center">Cadastrar pessoa</h1>

</div>
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Salvo com sucesso!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


<div class="mt-3 p-2">
    <form action="{{ route('cadastroPessoaForm') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">Nome</label>
            <input type="name" class="form-control" id="nome" name="nome" aria-describedby="emailHelp"
                required>
            <div id="emailHelp" class="form-text">É importante que o nome seja escrito da forma correta, para facilitar
                a buscas dos parentes.</div>
        </div>

        <div class="row">
            <div class="mb-3 col-8">
                <label for="exampleInputEmail1" class="form-label">Contato</label>
                <input type="text" class="form-control" name="contato" id="contato" placeholder="Rua exemplo"
                    aria-describedby="emailHelp" required>
            </div>

            <div class="row">
                <div class="mb-3 col-8">
                    <label for="exampleInputEmail1" class="form-label">Endereço</label>
                    <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua exemplo"
                        aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">
                        Caso esteja cadastrando terceiros que está com você em sua casa, preencha esse campo de Endereço como 'endereço privado'
                        por medidas de segurança. Disponibilize um telefone
                    </div>
                </div>

                <div class="mb-3 col">
                    <label for="exampleInputEmail1" class="form-label">Número</label>
                    <input type="text" class="form-control" name="numero" id="numero"
                        aria-describedby="emailHelp">
                </div>
            </div>

            <div class="mb-3 col">
                <label for="exampleInputEmail1" class="form-label">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="cidade" aria-describedby="emailHelp"
                    required>
            </div>

            <div class="mb-3 col">
                <label for="exampleInputEmail1" id="estado" class="form-label">Estado</label>
                <select class="form-select form-select-lg mb-3" name="estado" aria-label=".form-select-lg example">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS" selected>Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>
            <span class="mb-2">Foto</span>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="foto" name="foto" required>
                <label class="input-group-text" for="inputGroupFile02">Foto</label>
            </div>

            <div class="mt-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Situação desta pessoa?</label>
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" name="abrigo" id="abrigosim"
                        checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        <b>Abrigo ou ponto de apoio</b>, esta pessoa está em um abrigo!
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="2" type="radio" name="abrigo"
                        id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        <b>Residência privada ou estabelecimento</b>, esta pessoa <b>Não</b> esta em um abrigo.
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" value="0" type="radio" name="abrigo"
                        id="flexRadioDefault2">
                        <label class="form-check-label" value="0" for="flexRadioDefault2">
                            <b>desaparecido(a)</b>
                        </label>
                </div>
                
                                    

                <div class="mt-3">
                    <div class="form-floating">
                        <textarea class="form-control" name="outros" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Outras informações</label>
                    </div>
                </div>
            </div>
            <div class="mt-5">

                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
    </form>
</div>
@include('rodape')
