<?php

include 'bdcon.php';
$link = bd_open();
$nome = $_POST["nome"];
$gender = $_POST["gender"];
$bday = $_POST["bday"];
$email = $_POST["email"];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $passwordIn = $_POST["password"];
    $passwordIn2 = $_POST["password2"];
    $perg = $_POST["pergunta"];
    $passperg = $_POST["resposta"];
    if ($passwordIn == $passwordIn2) {
        $query = "INSERT INTO Users(nome,gender,bday,email,password,question,questionresp) VALUES('$nome','$gender','$bday','$email','$passwordIn','$perg','$passperg')";
        if (mysqli_query($link, $query) === TRUE) {
            session_start();
            $_SESSION['id'] = hash('sha256', $email);
            header("Location: ../../../pages/triagem.html");
        } else {
            echo "<script type='text/javascript'>alert('Erro de base de dados');</script>";
            //header("Location: ../../triagem.html");
        }
    } else {
        if (mysqli_query($link, $query) == FALSE) {
            echo "<script type='text/javascript'>alert('Erro de base de dados');</script>";
            //header("Location: ../../pages/login.html");
        }
    }
} else {
    echo "<script type='text/javascript'>alert('Email invalido');</script>";
    //header("Location: ../../pages/login.html");
}
mysqli_close($link);
?>