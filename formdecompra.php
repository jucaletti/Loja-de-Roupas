<?php
require_once "banco.php";
require_once "tabelas.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="free_logo_design-removebg-preview.png">

    <style>
        body {
            background-color: rgb(250, 235, 236);
            margin-top: 50px;
        }

        h2 {
            font-family: 'Times News Roman';
            color: rgb(201, 114, 128);
            text-align: center;
            font-size: 30px;
        }

        /* p {font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
        font-size:15px;} */

        .container {
            margin-right: 30%;
            margin-left: 30%;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: grey;
        }

        text {
            border-radius: 10px;
        }

        .button {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: grey;
        
       
        }
    </style>

    <title>Dados da sua compra!</title>
</head>

<body>
    <h2>PREENCHA OS DADOS <br> DA SUA COMPRA</h2>
    <div class="container">
        <form action="bd.php" method="POST">
            <fieldset>
                <br>
                <label for="roupa">Selecione a roupa desejada:</label><br>
                    <select class=button name="roupa" id="roupa">
                        <?php
                        $roupas = select_roupas();
                        foreach ($roupas as $roupa) {
                            echo "<option value='{$roupa['id_roupas']}'>{$roupa['nome_roupas']}</option>";
                        }
                        ?>
                    </select> <br> <br>

                <fieldset>
                    <legend>Seus dados:</legend>
                    <label for="nome"> Nome:</label><br>
                    <input class=button type="text" id="nome" name="nome" required><br>

                    <label for="snome"> Sobrenome:</label><br>
                    <input class=button type="text" id="snome" name="snome" required><br>

                    <label for="datanasc"> Data de nascimento:</label><br>
                    <input class=button type="date" id="datanasc" name="datanasc" class=button required><br>

                    <label for="cpf"> CPF: (somente números)</label><br>
                    <input class=button type="text" id="cpf" name="cpf" size="11" required><br>

                    <label for="tel"> Telefone: </label><br>
                    <input class=button type="tel" id="tel" name="tel" required><br>

                </fieldset>
                <br>
                <br>
                <input class=button type="submit" value="Concluir">
        </form>
    </div>
</body>

</html>