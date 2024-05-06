<h1>Novo Cadastro</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome:*</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Cargo:</label>
        <input type="text" name="cargo" class="form-control">
    </div>
    <div class="mb-3">
        <label>Endereço:</label>
        <input type="text" name="endereco" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="tel" name="telefone" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de contratação:*</label>
        <input type="date" name="data_inicio" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data do fim do contrato:</label>
        <input type="date" name="data_fim" class="form-control">
    </div>
    <div class="mb-3">
        <label>Salario:</label>
        <input type="float" name="salario" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</form>