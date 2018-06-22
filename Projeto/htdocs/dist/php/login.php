<?php
include_once 'bdcon.php';
$link = bd_open();
$nomeUtilizadorIn = $_POST["utilizador"];
$passwordIn = $_POST["password"];
if (filter_var($nomeUtilizadorIn, FILTER_VALIDATE_EMAIL)) {
$query = "SELECT * FROM users WHERE email='$nomeUtilizadorIn' AND password='$passwordIn'";
$resultado = mysqli_query($link, $query);
if (!$resultado || mysqli_num_rows($resultado) == 0) {
    if (mysqli_query($link, $query) == FALSE) {
        echo "<script type='text/javascript'>alert('Erro da base de dados');</script>";
		header("Location: ../../pages/login.html");	
    }
} else {
    // gera identificador de sessão "aleatório" e envia cookie
    session_start();
    $_SESSION['id'] = hash('sha256', $nomeUtilizadorIn);
    echo "<script type='text/javascript'>alert('".$_SESSION['id']."');</script>";
    header("Location: ../../index.php");
}
} else {
    echo "<script type='text/javascript'>alert('Email invalido');</script>";
    header("Location: ../../pages/login.html");
}
mysqli_close($link);
?>