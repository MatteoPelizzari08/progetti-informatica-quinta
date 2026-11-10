<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NOLEGGIO</title>
</head>
<body>
<h1><strong>RICHIESTA DI NOLEGGIO</strong></h1>
<label for="tipologia">Tipologia selezionata:</label>
<input type = "text" name = tipologia>
<br>

<label for="nomeCliente">Nome del cliente: </label>
<input type ="text" name="nomeCliente">
<br>

<label for="numeroGiorni">Numero di giorni:</label>
<select id="numeroGiorni" name="numeroGiorni">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
</select>
<br>

<label for="consegnaDomicilio">Consegna a domicilio (supplemento di 5€)</label>
<input type ="checkbox" name="consegnaDomicilio">
<br>

<button type="submit" name="calcoloCosto">Calcolo costo</button>


<?php
$costoTotale = 0;
$costoMountainBike = 12;
$biciclettaelettrica = 20;
$spedizione = 5;

if(isset($_POST['calcoloCosto'])) {
    if (isset($_POST['nomeCliente'])) {
        $nomeCliente = $_POST['nomeCliente'];
    } else {
        $nomeCliente = '';
    }

    if (isset($_POST['numeroGiorni'])) {
        $numeroGiorni = $_POST['numeroGiorni'];
    } else {
        $numeroGiorni = 1;
    }
    if (isset($_POST['consegnaDomicilio']) && $tipologia='MountainBike') {
        $consegnaDomicilio = $_POST['consegnaDomicilio'];
        $costoTotale = $costoMountainBike * $numeroGiorni + $spedizione;

    } else {
        $costoTotale = $biciclettaelettrica * $numeroGiorni +$spedizione;
    }
}


?>
<h2><strong>RIEPILOGO PRENOTAZIONE</strong></h2>

<table>
    <tbody>
    <th>NOME DEL CLIENTE</th><td><?php $nomeCliente?></td>
    <th>TIPOLOGIA</th><td><?php $nomeCliente?></td>
    <th>NUMERO DI GIORNI</th><td><?php $numeroGiorni?></td>
    <th>COSTO GIORNALIERO</th><td><?php $costoMountainBike?></td>
    <th>SUPPLEMENTO CONSEGNA</th><td><?php $spedizione?></td>
    <th>COSTO TOTALE</th><td><?php $costoTotale?></td>
    </tbody>

</table>

<p><a href ="biciclette.php" >torna alla home </a></p>



</body>
</html>