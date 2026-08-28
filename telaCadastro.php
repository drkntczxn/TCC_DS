<!DOCTYPE html>
    <html lang="en">
        <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=0.8">
                <title>Login Cliente</title>
                <link rel="stylesheet" href="css/style.css">
        </head>
<body> 
    <main>
    

        <div class="login-container">
            <h1>Ótica Fany</h1><br><br>     
            <form action="register.php" method="post">
            Nome: <input type="text" name="nomecli" id="nome"><br><br>
            Email: <input type="text" name="email" id="email"><br><br>
            CPF: <input type="text" name="cpfcli" id="cpf"><br>
            <!--Senha: <input type="text" name="senhacli" id="cpf"><br>-->
              

            
            <br><br> <input type="submit" value="Salvar" class="return-button">
            <a class="return-button" href="index.php">Voltar</a>
            </form>
            
           
        </div>
            <div id="report"></div>
            <!--<br><br><a class="return-button" href="index.php">Return</a>-->
    </main>                
        
</body>
<script src="script.js"></script>
    </html>