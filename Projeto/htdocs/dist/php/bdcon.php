<?php
function bd_open() {
	echo("Location: ../../pages/login.html");
    $link = mysqli_connect('localhost', 'paw', 'paw2018', 'sslbase');
    if (!$link) {
            $_SESSION['Error'] = "Erro da Base de dados";
            header("Location: ../../pages/login.html");
    }
    return $link;
}
?>
