<?php

if (isset($_POST["numOne"], $_POST["numTwo"])) {
    $numOne = floatClean($_POST["numOne"]);
    $numTwo = floatClean($_POST["numTwo"]);
    $numbers = new PerformCalculationByInput;

    $numbers->firstNum  = $numOne;
    $numbers->secondNum = $numTwo;

    if (isset($_POST["callAdd"])) {
        $answer = $numbers->addNumbers();
    }else if (isset($_POST["callSub"])) {
        $answer = $numbers->subtractNumbers();
    }else if (isset($_POST["callMul"])) {
        $answer = $numbers->multiplyNumbers();
    }else if (isset($_POST["callDiv"])) {
        $answer = $numbers->divideNumbers();
    }
  //  return $answer;

}

    // Appel du page d'accueil public
    $title = 'Object Experiment';
    include "../view/public/pubhome.view.php";
    die ();