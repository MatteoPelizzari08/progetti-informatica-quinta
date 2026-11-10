<?php
/**
var $titolo
var $persona
**/
?>

<?php $this->layout('layout', [
'titolo' => $titolo
]); ?>
<main>
    <h1>Pagina personale di <?= $persona['nome'] . '' .$persona['cognome']?> </h1>
    <div>
        <image src="img/<?=$persona['immagine']?>" alt="<? $persona['descrizione-immagine'] ?>"
    </div>
</main>