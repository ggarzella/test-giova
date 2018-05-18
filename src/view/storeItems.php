<h1>Risultati</h1>

<?php
    foreach ($store as $store):

?>

    <div>
        <span><?=$item->getName();?></span>
        <br/>
        <span><?=$item->getDescription();?></span>
    </div>
    <br/><br/>
<?php

    endforeach;

?>