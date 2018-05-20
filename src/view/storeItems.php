<script type="text/javascript" src="../src/js/stores.js"></script>

<h1>GestioneMagazzini</h1>
<h2>Gestione ristoccaggio magazzino</h2>

<h3>Risultati</h3>

<ul id="stores">

    <?php

    $found = false;

    foreach ($stores as $store):

        $stocks = $store->getStocks();

        foreach ($stocks as $stock):

            $quantity = $stock->getQuantity();
            $minQuantity = $stock->getMinQuantity();

            if (($quantity - $minQuantity) > 0)
                continue;

            $found = true;

            ?>
            <li>
                <div class="storeContent">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <p class="storeName"><?= $store->getName(); ?></p>
                        </div>
                        <div class="col-md-4">
                            <p class="storeDistance">Distanza: <?= $store->getDistance(); ?> km</p>
                        </div>
                        <div class="col-md-4">
                            <input type="button" name="cta" value="CTA"/>
                            <input type="hidden" name="idStore" value="<?= $store->getId(); ?>"/>
                            <input type="hidden" name="idItem" value="<?= $idItem; ?>"/>
                            <input type="hidden" name="quantity" value="<?= $quantity; ?>"/>
                            <input type="hidden" name="minQuantity" value="<?= $minQuantity; ?>"/>
                        </div>
                    </div>
                </div>
            </li>
            <?php

        endforeach;

    endforeach;

    if ($found === false):

    ?>

        <li>
            <div class="storeContent align-items-center">
                <?=utf8_encode("Questo prodotto supera la quantità minima richiesta in tutti i magazzini");?>
            </div>
        </li>


    <?php endif; ?>

</ul>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-body">
                    <h1>Azione confermata</h1>
                    <p><label>Prodotto:</label>&nbsp;<span id="itemName"></span></p>
                    <p><label>Magazzino:</label>&nbsp;<span id="storeName"></span></p>
                    <p><label>Articoli inviati:</label>&nbsp;<span id="quantity"></span></p>
                    <div class="text-center">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>