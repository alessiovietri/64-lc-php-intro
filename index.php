<?php

    /*
    
        Questi
        sono
        i
        dati
        di
        Gino

    */

    // Questo è il nome
    $nome = 'Gino';
    // Questo è il cognome
    $cognome = 'Ginoso';
    // Questa è l'età
    $eta = 47;

    // explode() / implode(): splitta/joina una stringa su/con un particolare carattere
    $studentsString = 'Leonid,Salvatore,Federico';
    $students = explode(',', $studentsString);  // Questo sarà un array contenente 3 stringhe: Leonid, Salvatore e Federico
    $studentsStringTwo = implode(' - ', $students);

    // trim(): rimuovi gli spazi bianchi all'inizio e alla fine di una stringa
    $stringWithSpaces = '             CIAO         ';
    $trimmedStringWithSpaces = trim($stringWithSpaces);

    // str_replace(): sostituisci qualcosa all'interno di una stringa
    $stringaDaModificare = 'Brandon non si lava';
    $stringaModificata = str_replace('non si lava', 'studia tantissimo!!!', $stringaDaModificare);

    // strpos(): cerca una stringa all'interno di un'altra
    $fullString = 'Tra i colori dell arcobaleno, quello che mi piace di più è il rosso';
    $rosso = 'rosso';
    $indiceDiRosso = strpos($fullString, $rosso);

    // ucfirst() / ucwords(): rendi maiuscolo il primo carattere della stringa / di ogni parola
    $stringaInLower = 'oggi è una bella giornata';
    $stringaConUCFirst = ucfirst($stringaInLower);
    $stringaConUCWords = ucwords($stringaInLower);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hello World! in PHP</title>
    </head>
    <body>
        
        <h1>
            Hello World! in HTML
        </h1>

        <p>
            Ciao <?php echo $nome; echo $cognome; ?>, che piacere vederti!
        </p>

        <p>
            Hai cercato lo studente: <?php echo $_GET['student']; ?>
        </p>

        <p>
            Il nome del secondo studente è: <?php echo $students[1]; ?>
            <br>
            Il nome del terzo studente è: <?php echo $students[2]; ?>
            <br>
            Il mio array di studenti è <?php echo $students; ?>
            <br>
            Il mio array di studenti è <?php echo $studentsStringTwo; ?> come stringa
        </p>

        <div>
            <?php 
                echo '<pre>';
                var_dump($students);
                echo '</pre>';
            ?>
        </div>

        <p>
            Lunghezza della mia stringa con gli spazi: <?php echo strlen($stringWithSpaces); ?>
            <br>
            Lunghezza della mia stringa con gli spazi DOPO trim(): <?php echo strlen($trimmedStringWithSpaces); ?>
        </p>

        <p>
            Stringa pre-modifica <?php echo $stringaDaModificare; ?>
            <br>
            Stringa post-modifica: <?php echo $stringaModificata; ?>
        </p>

        <p>
            Stringa fullString: <?php echo $fullString; ?>
            <br>
            Indice della parola "<?php echo $rosso; ?>": <?php echo $indiceDiRosso; ?>
        </p>

        <p>
            Stringa in lower: <?php echo $stringaInLower; ?>
            <br>
            Stringa ucfirst: <?php echo $stringaConUCFirst; ?>
            <br>
            Stringa ucwords: <?php echo $stringaConUCWords; ?>
        </p>

        <?php

            echo "Sono le ";
            echo 11;

        ?>

        <?php

            echo "<h2>";
            echo 'Altra stringa creata con PHP';
            echo "</h2>";

        ?>

        <form action="" method="GET">

            <input type="text" name="student" placeholder="Inserisci il nome di uno studente...">
            <button>
                Cerca
            </button>

        </form>

    </body>
</html>