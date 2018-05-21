<div class="home">
    <h1>Home</h1>
    <p>
        <?=utf8_encode("Ciao, descrivo brevemente come ho svolto il progetto valido per la selezione.
    </p>
    <p>
        Anzitutto premetto che non ho usato un framework php, ma ho deciso di svilupparne uno io (chiaramente con tutti i difetti che può avere un framework artigianale sviluppato in due giorni) per utilizzare il <b>Pattern Model-View-Controller</b>.
        Oltre a questo pattern ne ho utilizzati altri due:
        <ol>
            <li type=\"1\"><b>Pattern Strategy</b> per il caricamento dei file (ho appositamente inserito i controller registrati in un file di ini, anche se chiaramente ormai gli ini sono \"vecchi\" é ormai si mette tutto su file json).</li>
            <li type=\"2\"><b>Pattern Factory</b> per la creazione di instanze di classe e la risoluzione delle dipendenze.</li>
        </ol>
    </p>
    <p>
        Per quanto riguarda la parte Javascript, memore dell'esercizio a casa che mi avevate dato a dicembre dove mi chiedevate di lavorare col Javascript puro, ho deciso di non usare il jQuery (che ho importato solo per il tool della modale che funziona insieme a bootstrap) e continuare sulla linea della volta scorsa, usando il Javascript anche per la chiamata asincrona del terzo step (quella in seguito alla quale compare la modale).
    </p>
    <p>
        NOTE:
    </p>
    <div class='note'>
        La descrizione del progetto in due punti non é chiara:
        <ol>
            <li type=\"1\">C'é un'immagine di troppo, con una home iniziale che non viene mai citata nel testo. Io non l'ho montata in html e ho pensato di cominciare il progetto con questa pagina.</li>
            <li type=\"2\">Non vengono specificati come devono essere gli ordinamenti (crescenti o decrescenti) nel caso dei nomi dei prodotti, delle distanze e delle quantità residue. Ho usato quindi le costanti di ordinamento secondo libero arbitrio.</li>
        </ol>");
?>
    </div>
    <div class="buttonContainer">
        <input type="button" value="Comincia la simulazione" onclick="location.href='/list'"/>
    </div>
</div>
