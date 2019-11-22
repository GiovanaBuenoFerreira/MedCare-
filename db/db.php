<?php
require 'funcoes.php';


if (isset($_POST['realizar_login'])) {
    realizar_login();
}

if (isset($_POST['logout'])) {
    session_start();
    unset($_SESSION['usuario_logado']);
    header('Location: ../index.php');
}

if (isset($_POST['cadastrar_medico'])) {
    cadastrar_medico();
}
if (isset($_POST['cadastrar_exame'])) {
    cadastrar_exame();
}
if (isset($_POST['cadastrar_cliente'])) {
    cadastrar_cliente();
}