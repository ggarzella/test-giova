<script type="text/javascript" src="src/js/items.js"></script>

<h1>GestioneMagazzini</h1>
<h2>Gestione ristoccaggio magazzino</h2>

<div id="searchContainer">
    <input type="text" id="itemsSearch" class="form-control" placeholder="Di cosa hai bisogno oggi?" aria-label="Di cosa hai bisogno oggi?" aria-describedby="basic-addon1">
</div>

<h3>Risultati</h3>

<ul id="items">

<?php
    foreach ($items as $item):

?>
        <li>
            <div class="row align-items-center">
                <div class="col-md-8 col-sm-7">
                    <div class="itemContent">
                        <p class="itemName"><?=$item->getName();?></p>
                        <p class="itemDescription"><?=$item->getDescription();?></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5">
                    <div class="buttonContainer">
                        <div>
                            <input name="button" type="button" value="Acquista"/>
                            <input type="hidden" name="itemId" value="<?=$item->getId();?>"/>
                        </div>
                    </div>
                </div>
            </div>
        </li>
<?php

    endforeach;

?>

</ul>