<script type="text/javascript" src="../src/js/stores.js"></script>

<h1>GestioneMagazzini</h1>
<h2>Gestione ristoccaggio magazzino</h2>

<h3>Risultati</h3>

<ul id="stores">

    <?php

    $bool = false;

    foreach ($stores as $store):

        $stocks = $store->getStocks();

        foreach ($stocks as $stock):

            $quantity = $stock->getQuantity();
            $minQuantity = $stock->getMinQuantity();

            if (($stock->getIdItem() !== (int)$idItem) || (($quantity - $minQuantity) > 0))
                continue;

            $bool = true;

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

    if ($bool === false):

    ?>

        <li>
            <div class="storeContent align-items-center">
                <?=utf8_encode("Questo prodotto supera la quantità minima richiesta in tutti i magazzini");?>
            </div>
        </li>


    <?php endif; ?>

</ul>