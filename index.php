<?php include "header.php"; ?>
<?php include "menu.php"; ?>

<section id="cadastro">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3>Cadastro de Clientes</h3>
            </div>
        </div>
    </div>

    <div class="container-fluid col-md-6">
        <form class="row g-3" method="post" 
        action="_scripts/salvar.php">
            <div class="col-md-12">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" required>
            </div>
             
            <div class="col-md-12">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" maxlength="14" name="cpf" id="cpf" onblur="validarCPF(this)"required>

            </div>

            <div class="col-md-12">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>

     

            <div class="col-md-12">
            <label for="cep" class="form-label">CEP</label>
            <input name="cep" type="text" onblur = "pesquisacep(this.value);" class="form-control" required  id="cep" value="" size="10" maxlength="10">
          </div>

          <div class="col-md-12">
            <label for="rua" class="form-label">Rua</label>
            <input name="rua" type="text" class="form-control" required readonly id="rua" size="60" />
          </div>

          <div class="col-md-12">
            <label for="bairro" class="form-label">Bairro</label>
            <input name="bairro" type="text" class="form-control" required readonly id="bairro" size="60" />
          </div>

          <div class="col-md-12">
            <label for="cidade" class="form-label">Cidade</label>
            <input name="cidade" type="text" class="form-control" required readonly id="cidade" size="60" />
          </div>

          <div class="col-md-12">
            <label for="estado" class="form-label">Estado</label>
            <input name="estado" type="text" class="form-control" required readonly id="uf" size="60" />
          </div>

          <div class="col-md-12">
            <label for="situacao" class="form-label">Situação</label>
            <select class="form-control" name="situacao">
              <option value="">-</option>
              <option value="ATIVO">ATIVO</option>
              <option value="DESATIVADO">DESATIVADO</option>
            </select>
          </div>

          <div class="col-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>





        </form>
    </div>


</section>

<?php include "js.php"; ?>
<?php include "footer.php"; ?>
<script src="_js/CEP.js"></script>    
