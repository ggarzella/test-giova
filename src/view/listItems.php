<h1>Lista prodotti</h1>

<?php
    foreach ($items as $item):

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