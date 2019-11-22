<?php

function conexao() {
    try {
        $servername = "localhost";
        $database = "medcare";
        $username = "root";
        $password = "";
        
        $pdo = new PDO(
            "mysql:host=" . $servername . ";dbname=" . $database, 
            $username, 
            $password
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec("SET NAMES 'utf8'");

        return $pdo;
    } catch (PDOException $e) {
        echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    }
}

function realizar_login()
{
    $sql = "SELECT * FROM usuario" . 
           " WHERE email = '" . trim($_POST['email']) . "'" .
           "   AND senha = '" . trim($_POST['senha']) . "'";
    $result = conexao()->query($sql);
    $row = $result->fetch();

    session_start();
    if ($row != null) {
        $_SESSION['usuario_logado'] = $row;
        header('Location: ../menu.php');
    } else {
        $_SESSION['login_error'] = true;
        header('Location: ../index.php');
    }
    exit;
}

function listar_medico() {
    $sql = "SELECT * FROM medico";
    $result = conexao()->query($sql);
    $rows = $result->fetchAll();
    return $rows;
}

function cadastrar_medico() {
    $pdo = conexao();
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);
    $crm = trim($_POST['crm']);
    $cidade = trim($_POST['cidade']);
    $uf = trim($_POST['uf']);
    $especialidade = trim($_POST['especialidade']);
    $area_atuacao = trim($_POST['area_atuacao']);

    try {
        $sql = "INSERT INTO usuario (email, senha, admin) VALUES (:email, :senha, 'S');";
        $query = $pdo->prepare($sql);
        $query->bindParam(':email', $email);
        $query->bindParam(':senha', $senha);
        $query->execute();
        $id_usuario = $pdo->lastInsertId();

        print_r($id_usuario);
        
        $sql = "INSERT INTO medico (id_usuario, crm, cidade, uf, nome, especialidade, area_atuacao)" . 
               "            VALUES (:id_usuario, :crm, :cidade, :uf, :nome, :especialidade, :area_atuacao);";
        $query = $pdo->prepare($sql);
        $query->bindParam(':id_usuario', $id_usuario);
        $query->bindParam(':nome', $nome);
        $query->bindParam(':crm', $crm);
        $query->bindParam(':cidade', $cidade);
        $query->bindParam(':uf', $uf);
        $query->bindParam(':especialidade', $especialidade);
        $query->bindParam(':area_atuacao', $area_atuacao);
        $query->execute();
        $id_medico = $pdo->lastInsertId();

        $uploaddir = '../image/fotos/medico/' . $id_medico . '.' . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

        if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploaddir)) {
            echo "Arquivo válido e enviado com sucesso.\n";
        } else {
            echo "Possível ataque de upload de arquivo!\n";
        }

        header('Location: ../listar_medico.php');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
    function listar_exame() {
    $sql = "SELECT * FROM exame";
    $result = conexao()->query($sql);
    $rows = $result->fetchAll();
    return $rows;
}
        function cadastrar_exame() {
        $pdo = conexao();
        $descricao = trim($_POST['descricao']);
        $data = trim($_POST['data']);
        $confirmado = trim($_POST['confirmado']);
        
    
        try {
            $sql = "INSERT INTO exame (id, descricao, data, confirmado)" . 
                   "            VALUES (:id, :descricao, :data, :confirmado);";
            $query = $pdo->prepare($sql);
            $query->bindParam(':id', $id);
            $query->bindParam(':descricao', $descricao);
            $query->bindParam(':data', $data);
            $query->bindParam(':confirmado', $confirmado);
            $query->execute();
            $id_medico = $pdo->lastInsertId();
    
           
    
            
    
            header('Location: ../listar_exame.php');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    
    }
    function listar_cliente() {
        $sql = "SELECT * FROM cliente";
        $result = conexao()->query($sql);
        $rows = $result->fetchAll();
        return $rows;
    }
    
    function cadastrar_cliente() {
        $pdo = conexao();
        $cpf = trim($_POST['cpf']);
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);
        $endereco = trim($_POST['endereco']);
        $num_plano = trim($_POST['num_plano']);
        $cidade = trim($_POST['cidade']);
        $uf = trim($_POST['uf']);
    
        
    
        try {

            $sql = "INSERT INTO usuario (email, senha, admin) VALUES (:email, :senha, 'S');";
            $query = $pdo->prepare($sql);
            $query->bindParam(':email', $email);
            $query->bindParam(':senha', $senha);
            $query->execute();
            $id_usuario = $pdo->lastInsertId();

            $sql = "INSERT INTO cliente (id, cpf, nome, endereco, num_plano, cidade, uf)" . 
                   "            VALUES (:id, :cpf, :nome, :endereco, :num_plano, :cidade, :uf);";
            $query = $pdo->prepare($sql);
            $query->bindParam(':id', $id);
            $query->bindParam(':cpf', $cpf);
            $query->bindParam(':nome', $nome);
            $query->bindParam(':endereco', $endereco);
            $query->bindParam(':num_plano', $num_plano);
            $query->bindParam(':cidade', $cidade);
            $query->bindParam(':uf', $uf);
            $query->execute();
            $id_medico = $pdo->lastInsertId();
    
            $uploaddir = '../image/fotos/cliente/' . $id . '.' . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
    
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploaddir)) {
                echo "Arquivo válido e enviado com sucesso.\n";
            } else {
                echo "Possível ataque de upload de arquivo!\n";
            }
    
            //header('Location: ../listar_cliente.php');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
