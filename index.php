<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Projeto Php8</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Digite qual é o universo do personagem:</label><br>
        <input type="text" name="campo_universo"><br>
        <label>Digite o nome do herói</label><br>
        <input type="text" name="campo_nome"><br>
        <label>Digite a quantidade de vezes que você quer que ele apareça:</label><br>
        <input type="number" name="campo_quantidade"><br><br>
        <input type="submit">
    </form>

    <?php
    if (empty($_POST["campo_universo"]) or empty($_POST["campo_nome"]) or empty($_POST["campo_quantidade"])) {
        ?>
        <h3>Complete todos os campos</h3>
        <?php
    } else {
        $nome = $_POST["campo_nome"];
        $universo = $_POST["campo_universo"];
        $quantidade = $_POST["campo_quantidade"];

        if ($universo == "Marvel") {

            for ($x = 1; $x <= $quantidade; $x++) {

                switch ($nome) {

                    case "Doutor Estranho":
                        print "<img src='img/marvel/doutor.jpg'> <br>";
                        break;
                    case "Homem de Ferro":
                        print "<img src='img/marvel/iron.jpg'> <br>";
                        break;
                    case "Pantera Negra":
                        print "<img src='img/marvel/pantera.jpg'> <br>";
                        break;
                    case "Gavião Arqueiro":
                        print "<img src='img/marvel/gaviao.jpg'> <br>";
                        break;
                    case "Wandavision":
                        print "<img src='img/marvel/wanda.jpg'>  <br>";
                        break;
                    case "Shang Chi":
                        print "<img src='img/marvel/shang_chi.jpg'>  <br>";
                        break;
                    case "Homem Aranha":
                        print "<img src='img/marvel/spider.jpg'>  <br>";
                        break;
                    case "Thor":
                        print "<img src='img/marvel/thor.jpeg'> <br>";
                        break;
                    case "Viuva Negra":
                        print "<img src='img/marvel/viuva.jpg'> <br>";
                        break;
                    case "Gamora":
                        print "<img src='img/marvel/gamora.jpg'> <br>";
                        break;
                }
            }

        }


        if ($universo == "Dc") {
            for ($x = 1; $x <= $quantidade; $x++)
                switch ($nome) {
                    case "Batman":
                        print "<img src='img/dc/batman.jpg'> <br>";
                        break;
                    case "Cyborg":
                        print "<img src='img/dc/Cyborg.jpg'> <br>";
                        break;
                    case "Batgirl":
                        print "<img src='img/dc/batgirl.jpg'> <br>";
                        break;
                    case "Ravena":
                        print "<img src='img/dc/Ravena.jpg'> <br>";
                        break;
                    case "Asa Noturna":
                        print "<img src='img/dc/asa_noturna.jpg'> <br>";
                        break;
                    case "Robin":
                        print "<img src='img/dc/robin.jpg'> <br>";
                        break;
                    case "Mutano":
                        print "<img src='img/dc/mutano.png'> <br>";
                        break;
                    case "Supergirl":
                        print "<img src='img/dc/supergirl.jpg'> <br>";
                        break;
                    case "Estelar":
                        print "<img src='img/dc/estelar.jpg'> <br>";
                        break;
                    case "Mulher Gato":
                        print "<img src='img/dc/catwoman.jpeg'> <br>";
                        break;
                }
        }
    }
    ?>

</body>

</html>