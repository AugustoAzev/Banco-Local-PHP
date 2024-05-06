<?php
    include ('config.php');//ADICIONEI MAIS ISSO AQUI PARA RECONHECER A CONEXÃO "conn"

    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $cargo = $_POST["cargo"];
            $endereco = $_POST["endereco"];
            $telefone = $_POST["telefone"];
            $data_inicio = $_POST["data_inicio"];
            $data_fim = $_POST["data_fim"];
            $salario = $_POST["salario"];

            $sql = "INSERT INTO funcionarios (nome, cargo, endereco, telefone, data_inicio, data_fim, salario) 
            VALUES ('{$nome}', '{$cargo}', '{$endereco}', '{$telefone}', '{$data_inicio}', '{$data_fim}', '{$salario}')";
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Registrado com sucesso! :)');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel cadastrar! :(');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        case 'editar':
            $nome = $_POST["nome"];
            $cargo = $_POST["cargo"];
            $endereco = $_POST["endereco"];
            $telefone = $_POST["telefone"];
            $data_inicio = $_POST["data_inicio"];
            $data_fim = $_POST["data_fim"];
            $salario = $_POST["salario"];

            $sql = "UPDATE funcionarios SET
                            nome='{$nome}',
                            cargo='{$cargo}',
                            endereco='{$endereco}',
                            telefone='{$telefone}',
                            data_inicio='{$data_inicio}',
                            data_fim='{$data_fim}',
                            salario='{$salario}'
                            WHERE
                                id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Edição efetuada com sucesso! :)');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('A edição não pode ser concluída! :(');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM funcionarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Registro deletado com sucesso! :)');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Registro não deletado! :(');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
    }