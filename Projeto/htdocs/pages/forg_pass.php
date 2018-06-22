<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Recuperação de password</title>
    </head>
    <body>
        
                <img src="../dist/img/lock-icon.png"/>
                
                    <h1>Recuperação de password</h1>
                
                <p class="login-box-msg">Introduza o seu email para recuperar a password</p>

                <form action="../dist/php/forgotpass.php" method="post">
						
						<p>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </p>
						
						<p>
                        <input type="text" class="form-control" name="pergunta" placeholder="Pergunta para recuperação de password" required>
                        </p>
						
						<p>
                        <input type="password" class="form-control" name="resposta" placeholder="Resposta" required>
						</p>
						  
						<p>
						<button type="submit" class="btn btn-primary btn-block btn-flat">Enviar</button>
                        </p>
						
                </form>
				
				<p>
                <a href="login.html">Ja tem uma conta?</a><br>
                <a href="register.html" class="text-center">Ainda não tem conta?</a>
				</p>
    </body>
</html>
