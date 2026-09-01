<!DOCTYPE html>
<html>

    <head>
        <title>Introdução ao PHP</title>
    </head>

    <body>
        <h1> Estruturas Condicionais (switch)</h1>

        <?php
            $dia = 3;
            $mensagem = "";

            switch ($dia) {
                case 1:
                    $mensagem = "Domingo";
                    break;
                case 2:
                    $mensagem = "Segunda-feira";
                    break;
                case 3:
                    $mensagem = "Terça-feira";
                    break;
                case 4:
                    $mensagem = "Quarta-feira";
                    break;
                case 5:
                    $mensagem = "Quinta-feira";
                    break;
                case 6:
                    $mensagem = "Sexta-feira";
                    break;      
                case 7:
                    $mensagem = "Sábado";
                    break; 
                default:
                    $mensagem = "Dia inválido";
                    break;         
            }

            echo "<p>". $mensagem."</p>"; // Saída: Terça-feira
        ?>
    </body>

</html>