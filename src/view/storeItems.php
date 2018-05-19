<h1>GestioneMagazzini</h1>
<h2>Gestione ristoccaggio magazzino</h2>

<h3>Risultati</h3>

<ul id="stores">

    <?php

    foreach ($stores as $store):

        ?>
        <li>
            <div class="storeContent">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <p class="storeName"><?=$store->getName();?></p>
                    </div>
                    <div class="col-md-4">
                        <p class="storeDistance">Distanza: <?=$store->getDistance();?> km</p>
                    </div>
                    <div class="col-md-4">
                        <input type="button" value="Acquista"/>
                    </div>
                </div>
            </div>
        </li>
        <?php

    endforeach;

    ?>

</ul>