<?php
    /* Muss ganz am Anfang der Hauptseite sein, 
        enthält start_session(). */
    // require "./includes/data-collector.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <?php
    
        // Lade includes
        // require "questions_array.php";
        // require "./includes/data-collector.php";

        // Hole die Daten für die aktuelle Frage aus der Datenbank (in Variable $questionData ablegen).
        // $questionId = 5;

        // Berechne die Anzahl Fragen (in Variable $questionNum ablegen)
        // $questionNum = 15;

        // $questions

        // Zeige die Daten der Frage mit prettyPrint() an.

    ?> 

    <!-- FORMULAR "Fragestellung" -->
    <div class="row" style="padding: 20px;">
        <div class="col-sm-8">
            <!-- Fragestellung -->
            <h7>Frage 1 von 999</h7>
            <!--p>&nbsp;</p-->

            <h3>Wann war der erste Mann auf dem Mond?</h3>
            <p>&nbsp;</p>

            <form id="quiz-form" action="" method="post">
                <?php 
                    // Generiere Antwort-Radio-Buttons mit Beschriftung

                    // Single Choice: Hole den Namen der richtigen Antwortspalte in $correct, aus $question["correct"]
                    

                    for ($a = 1; $a <= 5; $a++) { // $a ist der Index der Antwort.
                        // Setze für $answerColumnName den Namen der Tabellenspalte "answer-N" zusammen
                        

                        // Falls es überhaupt Antworttext in $question[$answerColumnName] gibt
                        // und der Antwortext nicht gleich '', dann ...
                        if (isset($question[$answerColumnName]) && $question[$answerColumnName] !== '') {
                            // ... hole den Antworttext aus $question.
                            

                            // Entscheide für $value, wieviele Punkte die Anwort ergibt: 
                            // richtig -> 1 Punkt, falsch -> 0 Punkte

                            // Gib per echo den Radio-Button und das Label dazu aus.
                            /*
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='single-choice' id='answer-0' value='0'>
                                <label class='form-check-label' for='answer-0'>1961</label>
                            </div>
                            */
                        }
                    }
                ?>

                <!-- Validierungswarnung -->
                <p id="validation-warning" class="warning"></p>
                <p>&nbsp;</p>
                
                <input type="submit" class="btn btn-primary" value="Next">
            </form>
        </div>
    </div>

</body>
</html>