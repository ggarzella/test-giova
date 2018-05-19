<script type="text/javascript" src="src/js/items.js"></script>

<h1>Lista prodotti</h1>

<div>
    <input type="text" id="itemsSearch"/>
</div>
<br/>

<ul id="items">

<?php
    foreach ($items as $item):

?>
        <li name="item">
            <span name="itemName"><?=$item->getName();?></span>
            <br/>
            <span><?=$item->getDescription();?></span>
        </li>
        <br/></br>
<?php

    endforeach;

?>

</ul>
