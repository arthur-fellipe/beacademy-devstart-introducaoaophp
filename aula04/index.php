<form action="" method="post">

    <input type="number" name="num1" placeholder="Número 1"> <br/>

    <input type="number" name="num2" placeholder="Número 2"> <br/>

    <button>Enviar</button>
</form>

<?php
    if ($_POST) {
        echo $_POST["num1"] + $_POST["num2"];
        echo $_POST["num1"] - $_POST["num2"];
        echo $_POST["num1"] * $_POST["num2"];
        echo $_POST["num1"] / $_POST["num2"];
    }
?>