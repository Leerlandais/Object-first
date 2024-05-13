<?php
$numOne = 1;
$numTwo = 1;
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
        if ($numTwo == 0) {
            $answer = "It's impossible to divide by zero!";
        }else {
            $answer = $numbers->divideNumbers();
        }
    }
    
}


    $title = 'Object Experiment';
    include "../view/public/pubhome.view.php";
    die ();