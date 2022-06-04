    <?php include_once 'includes/header.php';?>
        
        <section class="m-5 container">
            <form action="processa-form.php" method="post" enctype="multipart/form-data" class="row">
                <div class="form-item col-md-4 col-xl-4 col-xxl-3">
                    <label class="form-label">Nome:</label>
                    <input type="text" name="nome" id="form-nome" class="form-control mb-2" required>
                </div>
                <div class="form-item col-md-3 col-xl-3 col-xxl-3">
                    <label class="form-label">CEP:</label>
                    <input type="text" name="cep" id="form-cep" class="form-control mb-2" required>
                </div>
                <div class="form-item col-md-5 col-xl-3 col-xxl-2">
                    <label class="form-label">Estado:</label>
                    <select class="form-select mb-2" name="estado" id="form-estado" required>
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
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                    </select> 
                </div>
                <div class="form-item col-md-3 col-xl-3 col-xxl-3">
                    <label class="form-label">Cidade:</label>
                    <input type="text" name="cidade" id="form-cidade" class="form-control mb-2" required>
                </div>
                <div class="form-item col-md-4 col-xl-3 col-xxl-2">
                    <label class="form-label">Bairro:</label>
                    <input type="text" name="bairro" id="form-bairro" class="form-control mb-2" required>
                </div>
                <div class="form-item col-md-5 col-xl-4 col-xxl-3">
                    <label class="form-label">Logradouro:</label>
                    <input type="text" name="logradouro" id="form-logradouro" class="form-control mb-2" required>
                </div>
                <div class="form-item col-md-2 col-xl-2 col-xxl-1 me-xl-1">
                    <label class="form-label">Número:</label>
                    <input type="text" name="numero" id="form-numero" class="form-control mb-2" required>
                </div>
                <div class="form-item col-md-5 col-xl-4 col-xxl-2">
                    <label class="form-label">Complemento:</label>
                    <input type="text" name="complemento" id="form-complemento" class="form-control mb-2" required>
                </div>
                <div class="form-item col-md-5 col-xl-4 col-xxl-3">
                    <label class="form-label">Foto:</label>
                    <input type="file" name="foto" id="form-foto" class="form-control mb-2" required>
                </div>
                <button type="submit" class="btn btn-dark col-5 col-md-2 m-3">Enviar</button>
            </form>
        </section>

    <?php include_once 'includes/footer.php';?>