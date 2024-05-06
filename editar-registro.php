<h1>Editar Registro</h1>

<?php
    include("config.php");
    //CONEXÃO PARA EDITAR
    $sql = "SELECT * FROM funcionarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id;?>">

    <div class="mb-3">
        <label>Nome:*</label>
        <input type="text" name="nome" value=" <?php print $row->nome; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Cargo:</label>
        <input type="text" name="cargo" value=" <?php print $row->cargo; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Endereço:</label>
        <input type="text" name="endereco" value=" <?php print $row->endereco; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="tel" name="telefone" value=" <?php print $row->telefone; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de contratação:*</label>
        <input type="date" name="data_inicio" value=" <?php print $row->data_inicio; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data do fim do contrato:</label>
        <input type="date" name="data_fim" value=" <?php print $row->data_fim; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Salario:</label>
        <input type="float" name="salario" value=" <?php print $row->salario; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Concluir Alterações</button>
    </div>
</form>