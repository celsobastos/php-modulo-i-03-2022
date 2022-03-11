<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios</title>
    <style>
        .container {
            display: flex;
            margin: auto;
            border: 1px solid black;
            align-items: center;
            justify-content: space-evenly;
            flex-wrap: nowrap;
        }
        .test { 
            font-size: 30px; 
            width: 30%;
            height: 150px;
            border: 1px solid black;
            padding: 20px 0 0 35px;
        }
        a{
            display: block;
        }
    </style>
</head>
<body>
    <!--  -->
    <h1>Sorteio</h1>
    <a href="sorteio.php?update=true">Clique para sortear um numero.</a>
    <div class='container'>
        <div class="test">
            <?php echo $_GET['numero'] ?>
        </div>
        <div class="test">
            <?php if($_GET['numero'] == 5) { ?>
                <img src="bird.png" width="100%">
            <?php } ?>
        </div>
    <div>
</body>
</html>