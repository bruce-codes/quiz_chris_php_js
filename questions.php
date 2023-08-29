<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   
</head>
<body>
    
    <?php
        // Lade includes
        require "./includes/questions_array.php";
        require "./includes/tools.php";

        // Berechne die Anzahl Fragen (in Variable $questionNum ablegen)
        $questionNum = count($questions);

        // Zeige die Daten aller Fragen mit prettyPrint() an.
        prettyPrint($questions);

        // Hole die Daten für die aktuelle Frage aus der Datenbank (in Variable $questionData ablegen).
        $questionId = 5;
        $questionData = $questions[$questionId];

        // Zeige die daten der Frage mit prettyPrint()
        prettyPrint($questionData);
    ?> 



</body>
</html>