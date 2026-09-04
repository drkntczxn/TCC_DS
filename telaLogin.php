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
            Email: <input type="text" name="emailcli" id="email"><br><br>
            <!--Phone: <input type="text" name="phone_cust" id="phone"><br><br> "to be developed" --> 
            Senha: <input type="password" name="senhacli" id="senha"><br>
            
               <!-- <p>Select washing type:</p>
                <p>Simple wash $60.00
                <input type="radio" name="wash_type" value="Simple"></p>    
                <p>Full wash $100.00
                <input type="radio" name="wash_type" value="Full"></p>
                <p>Detailed wash $200.00
                <input type="radio" name="wash_type" value="Detailed"> </p><br>    

                <p>Wax:</p>
                Yes: <input type="radio" name="wax" id="yes" value="Yes" > 
                No: <input type="radio" name="wax" id="no" value="No" ><br><br><br>-->
                

                    <!--<select name="time" id="time">
                        <option>Wash Time</option>
                        <option value="9am">09:00AM</option>
                        <option value="11am">11:00AM</option>
                        <option value="1pm">1:00PM</option>
                        <option value="3pm">3:00PM</option>
                        <option value="5pm">5:00PM</option>
                    </select><br>-->
                    <p>Não tem cadastro na Ótica Fany ainda? Clique <a href="telaCadastro.php">Aqui</a></p>


                    <!--botão entrar será aqui-->
                     
            </form>
            
           
        </div>
            <div id="report"></div>
            <!--<br><br><a class="return-button" href="index.php">Return</a>-->
    </main>                
        
</body>
<script src="script.js"></script>
    </html>