<?php
require_once "tools.php";

// Verbinde mit mySQL, mit Hilfe eines PHP PDO Object
$dbHost = getenv('DB_HOST');
$dbName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPassword = getenv('DB_PASSWORD');

$dbConnection = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPassword);

// Setze den Fehlermodus für Web Devs
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo "<p>db.php: \$dbConnection erzeugt</p>";

// QUERY FUNCTIONS ------------------------------

function fetchQuestionById($id, $dbConnection) {
    //echo "<p>fetchQuestionById()</p>"; zum testen

    $sqlStatement = $dbConnection->query("SELECT * FROM `questions` WHERE `id` = $id");
    $questionData = $sqlStatement->fetch(PDO::FETCH_ASSOC);

    return $questionData;

}

// Get array of question ids from the database related to the topic
function fetchQuestionBYSequence($topic, $questionNum, $dbConnection){
$query = ("SELECT id FROM questions WHERE topic = '$topic' ORDER BY RAND() LIMIT$questionNum");
$sqlStatement = $dbConnection->query($query);
$rows = $sqlStatement->fetch(PDO::FETCH_ASSOC);


  return $rows;
}

?>