<h1>Lista Magazzini</h1>

<?php
foreach ($stores as $store):

    //var_dump($store->getId());

    ?>

    <div>
        <span><?=$store->getName();?></span>
        <br/>
        <span><?=$store->getDistance();?></span>
    </div>
    <br/><br/>
    <?php

endforeach;

?>