<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Staff</title>
</head>
<body>
    
    <main>
        <div class="login-container">
                <?php
                include "connection.php";
                //include database connection

                $result = mysqli_query($con, "SELECT * FROM tbcliente");

                echo "<h2>Clientes Ótica Fany:</h2><p style='color:gray'>*Apenas pessoal autorizado*</p>";
                

                echo"<h4>ID  - Nome  -  Email </h4><br>";

                while($row = mysqli_fetch_assoc($result)){
                echo"<div class='customersList'>";
                    echo"$row[ID_CLI] -
                        $row[NOMECLI] -
                        $row[CPFCLI] -
                        $row[EMAIL]<br> -
                        <a href='delete.php?ID_CLI=$row[ID_CLI]'>Excluir</a> |
                        <a href=edit.php?id=$row[ID_CLI]> Edit </a>";
                    echo"</div>";
}
                ?>

            <br><br>
            <a class="return-button" href="index.php">Return</a>

        </div>
</main>
</body>
</html>




