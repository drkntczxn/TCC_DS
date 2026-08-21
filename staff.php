<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Staff</title>
</head>
<body>
    
    <main>
        <div class="login-container">
                <?php
                include "connection.php";
                //include database connection

                $result = mysqli_query($con, "SELECT * FROM TBCLIENTE");

                echo "<h2>Clientes Ótica Fany:</h2><p style='color:gray'>*Apenas pessoal autorizado*</p>";
                

                echo"<p>ID  - Nome  -  Email - CPF<p>";

                while($row = mysqli_fetch_assoc($result)){
                echo"<div class='customersList'>";
                    echo"$row[ID_CLI] -
                        $row[NOMECLI] -
                        $row[EMAIL] -
                        $row[CPFCLI]
                        <a href=delete.php?id=$row[ID_CLI]>Delete</a> |
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




