<?php
    require_once('php/encabezado.php');
?>
<?php
    $naipe1 = mt_rand(1, 12);
    $naipe2 = mt_rand(1, 12);
    $nombreCarta1 = $naipe1;
    $nombreCarta2 = $naipe2;
    switch ($naipe1){
        case 10:
            $nombreCarta1 = 'Sota';
            $naipe1=0.5;
        break;
        case 11:
            $nombreCarta1 = 'Caballo';
            $naipe1=0.5;
        break;
        case 12:
            $nombreCarta1 = 'Rey';
            $naipe1=0.5;
        break;
    }
    switch ($naipe2){
        case 10:
            $nombreCarta2 = 'Sota';
            $naipe2=0.5;
        break;
        case 11:
            $nombreCarta2 = 'Caballo';
            $naipe2=0.5;
        break;
        case 12:
            $nombreCarta2 = 'Rey';
            $naipe2=0.5;
        break;
    }
    $suma = $naipe1 + $naipe2;
?>
<main>
    <section>
        <p>Naipe 1: <?php echo $nombreCarta1 ?></p>
        <p>Naipe 2: <?php echo $nombreCarta2 ?></p>
        <p><?php 
                if ($suma == 9.5){
                    echo 'GANADOR';
                }
                else{
                    echo 'PUNTOS OBTENIDOS:', $suma; 
                }
            ?></p>
    </section>
</main>
<?php
    require_once('php/pie.php');
?>
