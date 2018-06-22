<?php

include_once 'bdcon.php';
$link = bd_open();
$email = $_POST["email"];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $perg = $_POST["pergunta"];
    $passperg = $_POST["resposta"];
    $query = "SELECT * FROM Users WHERE email='$email' AND question='$perg' AND questionresp='$passperg'";
    $resultado = mysqli_query($link, $query);
    if (!$resultado || mysqli_num_rows($resultado) == 0) {
        if (mysqli_query($link, $query) == FALSE) {
            echo "<script type='text/javascript'>alert('Erro da base de dados');</script>";
            //header("Location: ../../pages/login.html");
        }
    } else {
        while ($row = mysqli_fetch_array($resultado)) {
            echo "<script type='text/javascript'>alert('Foi enviado para o seu email a password!!! " . $row['password'] . "');</script>";
        }
        //header("Location: ../../pages/login.html");
    }
} else {
    echo "<script type='text/javascript'>alert('Email Invalido!!');</script>";
    //header("Location: ../../pages/login.html");
}
mysqli_close($link);
?>