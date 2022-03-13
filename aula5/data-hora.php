<?php
define("NOW",date('d/m/Y H:i:s'));
$agora = new DateTime('yesterday');
echo $agora->format('d/m/Y');
echo '<hr>';
$entrada = new DateTime('9:00');
$saida = new DateTime('18:00');
$intervalo = $saida->diff($entrada);
echo $intervalo->h;
echo '<hr>';
echo 'Fuso Horario';
$timezone = new DateTimeZone('Asia/Tokyo');
$agora = new DateTime('now', $timezone);
// echo '<pre>';
// print_r($agora);
// print_r(DateTimeZone::listIdentifiers());
echo "<hr>";
$timestamp = time();
echo date('m/d/Y' ,$timestamp);
echo '<hr>';
$data = '2001-09-11 8:30';
$times = strtotime($data);
echo date("d/m/Y",$times);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="data-hora">
        <?php //echo NOW; ?> 
    </div>
    <!-- <script>
        setInterval(() => {
            document.querySelector('.data-hora').innerHTML = 
        },1000);
    </script> -->
</body>
</html>