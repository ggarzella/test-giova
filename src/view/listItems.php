<script type="text/javascript" src="src/js/items.js"></script>

<h1>GestioneMagazzini</h1>
<h2>Gestione ristoccaggio magazzino</h2>

<div>
    <input type="text" name="itemsSearch" placeholder="Di cosa hai bisogno oggi?"/>
</div>

<h1>Risultati</h1>

<ul id="items">

<?php
    foreach ($items as $item):

?>
        <li name="item">
            <span name="itemName"><?=$item->getName();?></span>
            <br/>
            <span><?=$item->getDescription();?></span>
            <br/>
            <input type="button" value="Invia"/>
        </li>
<?php

    endforeach;

?>

</ul>
