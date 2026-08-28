<?php
include "connection.php";

$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM tbcliente
WHERE ID_CLI=$id");
$row = mysqli_fetch_assoc($result);
?>
<link rel="stylesheet" href="css/style.css">
    <main>
        <div class="login-container">
            <h1>Ótica Fany</h1><br><br>  
            <form action="update.php" method="post">
                <input type="hidden" nome="id"
                value="<?php echo $row['ID_CLI']; ?>"><br>
                Nome: <input type="text" nome="nome"
                value="<?php echo $row['NOMECLI']; ?>"><br>
                Email: <input type="text" nome="email"
                value="<?php echo $row['EMAIL']; ?>"><br>
                CPF: <input type="text" nome="cpf"
                value="<?php echo $row['CPFCLI']; ?>"><br><br>


            <input type="submit" value="Atualizar" class="return-button">

    </main>
            </form>

