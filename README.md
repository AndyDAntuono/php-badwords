/*CONSEGNA*/

Esercizio di oggi: PHP Badwords
nome repo: php-badwords
Descrizione: Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi. 
    - Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
    - Il secondo file riceverà la richiesta ed eseguirà queste operazioni: ****- stampare a schermo il paragrafo e la sua lunghezza
    stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare
Ricordatevi di fare sempre il file README.md.
Numero di push obbligatori: 7/8.

/*SOLUZIONE*/

    - creo il file index.php che conterà sia il paragrafo da censurare e sia div input in cui l'utente potrà scegliere quale parola censurare. Il file censor.php avrà invece di processare la        funzione   di censura:
    - in index.php, creo, in una col sulla sinistra, un paragrafo con un testo fittizio che verrà poi censurato. A destra, in un altra col, inserisco una form con un campo input in cui l'utente potrà specificare quale parola censurare;
    - modico la sezione del paragrafo perché non avevo letto attentamente la consegna;