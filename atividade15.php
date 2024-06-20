<!DOCTYPE html>
<html>
    <body>
        <?php
            //Radio Button
            echo "<b>Seu sistema operacional é:" . $_POS["sistema"] . "<b><br>";

            //Checkbox
            if(isset($_POST["numeros"]))
            {
                echo "<br>Os números de preferência são:</br><BR>";

                // Faz loop pelo array dos numeros
                foreach($_POST["numeros"] as $numero)
                {
                    echo "- " . $numero . "<BR><br>";
                }
            }
            else
            {
                echo "<br>Você não escolheu o número preferido!</br><br><br>";
            }

            //
            echo "<br>seu processador é: </br>" . $_POST["processador"] . "<BR>";
        ?>
    </body>
</html>