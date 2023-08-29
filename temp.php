<!-- FORMULAR "Fragestellung" -->
<div class="row" style="padding: 20px;">
        <div class="col-sm-8">
            <!-- Fragestellung -->
            <h7>Frage <?php echo ($currentQuestionIndex + 1); ?> von <?php echo $quiz["questionNum"]; ?></h7>
            <!--p>&nbsp;</p-->
            <h3><?php echo $question["question_text"]; ?></h3>
            <p>&nbsp;</p>

            <form id="quiz-form" action="<?php echo $actionUrl; ?>" method="post" onsubmit="return navigate('next');">
                <?php 
                    // Generiere Antwort-Radio-Buttons mit Beschriftung
                    <input type="radio" id="language" name="1" value="1">
                    <label for="language">1</label><br>
                    

                    <input type="radio" id="language" name="2" value="2">
                    <label for="language">1</label><br>

                    <input type="radio" id="language" name="3" value="3">
                    <label for="language">1</label><br>

                    // Single Choice: Hole den Namen der richtigen Antwortspalte in $correct, aus $question["correct"]
                    $correct = $question["correct"];

                    for ($a = 1; $a <= 5; $a++) {
                        // Setze f체r $answerColumnName den Namen der Tabellenspalte "answer-N" zusammen
                        $answerColumnName = "answer-" . $a;

                        // Falls es 체berhaupt Antworttext in $question[$answerColumnName] gibt
                        // und der Antwortext nicht gleich '', dann ...
                        if (isset($question[$answerColumnName]) && $question[$answerColumnName] !== '') {
                            // ... hole den Antworttext aus $question.
                            $answerText = $question[$answerColumnName];

                            // Entscheide f체r $value, wieviele Punkte die Anwort ergibt: 
                            // richtig -> 1 Punkt, falsch -> 0 Punkte
                            if ($correct === $answerColumnName) $value = 1;
                            else $value = 0;

                            echo "<div class='form-check'>
                                    <input class='form-check-input' type='radio' name='single-choice' id='$answerColumnName' value='$value'>
                                    <label class='form-check-label' for='$answerColumnName'>$answerText</label>
                                  </div>";
                        }
                    }
                ?>

                <!-- 
                    input type="hidden"
                        questionNum, lastQuestionIndex: mit PHP gesetzt
                        indexStep: mit JavaScript setIntValue(fieldId, value) ver채ndert
                -->
                <input type="hidden" id="questionNum" value="<?php echo $quiz["questionNum"]; ?>">
                <input type="hidden" id="lastQuestionIndex" name="lastQuestionIndex" value="<?php echo $currentQuestionIndex; ?> ">
                <input type="hidden" id="indexStep" name="indexStep" value="1">

                <!-- Validierungswarnung -->
                <p id="validation-warning" class="warning"></p>
                <p>&nbsp;</p>
                <!-- button type="submit" class="btn btn-primary" onclick="navigatePrevious();">Previous</button -->
                <input type="submit" class="btn btn-primary" value="Next">
            </form>
        </div>
    </div>
