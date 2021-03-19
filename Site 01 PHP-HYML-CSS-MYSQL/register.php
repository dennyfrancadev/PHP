<?php
    $error = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <?php include("header.php"); ?>
    <center>
        <h1>Registre-se</h1>
        <div class="panel">
            <?php echo $error; ?>
            <form method="POST">
                <table width="50%">
                    <tr>
                        <td style="float: right;">Nome</td>
                        <td><input type="name" name="nome"></td>
                    </tr>
                    <tr>
                        <td style="float: right;">Email</td>
                        <td><input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td style="float: right;">Apelido</td>
                        <td><input type="name" name="apelido"></td>
                    </tr>
                    <tr>
                        <td style="float: right;">Senha</td>
                        <td><input type="password" name="pass"></td>
                    </tr>
                    <tr>
                        <td style="float: right;">Confirme a Senha</td>
                        <td><input type="password" name="cpass"></td>
                    </tr>
                    <tr>
                        <td style="float: right;">Receber novidades no Email</td>
                        <td><input type="checkbox" name="notify"></td>
                    </tr>
                </table>
                    <input type="submit" name="registrar" value="Registrar" Style="width: 50%">
            </form>
        </div>

    </center>
</body>
</html>