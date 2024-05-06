<h1>Listar Registros</h1>
<?php
    include('config.php');

    $sql = "SELECT * FROM funcionarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Cargo</th>";
            print "<th>Endereço</th>";
            print "<th>Telefone</th>";
            print "<th>Data de Inicio</th>";
            print "<th>Data de Despejo</th>";
            print "<th>Salario</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->cargo."</td>";
            print "<td>".$row->endereco."</td>";
            print "<td>".$row->telefone."</td>";
            print "<td>".$row->data_inicio."</td>";
            print "<td>".$row->data_fim."</td>";
            print "<td>".$row->salario."</td>";

            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Deletar</button>
                    </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Sem registros para mostrar! :(</p>";
    }

?>