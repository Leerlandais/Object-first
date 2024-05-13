
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ("../view/cdn/cssBS.php"); ?>
    <link rel="stylesheet" href="css/colours.css">
    <link rel="stylesheet" href="css/style.css">
    <title><?=$title?></title>
</head>
<body>
    <div class="containter d-flex flex-column text-center mt-5 pt-5">
    <?php
        if (isset($myMessage)) {
            ?>
            <p class="h2"><?=$myMessage?></p>
            <?php
        }
        ?>
        <p class="h1">Object Test</p>
        <p class="h2 mb-5">Can I Make A Simple Calculator?</p>


        <form method="POST" action="" class="d-flex flex-column align-items-center">
        <div class="form-group d-flex flex-column align-items-center">
                   <label for="numOne">Num One :</label>
                   <input type="number" class="form-control text-center w-auto mb-4" name="numOne" placeholder="1" value="1">
                </div>
                   <div class="form-group d-flex flex-column align-items-center">
                       <label for="numTwo">Num Two</label>
                   <input type="number" class="form-control text-center w-auto" name="numTwo" placeholder="1" value="1">
                 </div>
                 <div class="d-flex flex-row justify-content-between w-25">
                 <div class="form-group text-center">
                     <button type="submit" class="btn btn-dark rounded-pill mt-3" name="callAdd">Add</button> 
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-dark rounded-pill mt-3" name="callSub">Subtract</button> 
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-dark rounded-pill mt-3" name="callMul">Multiply</button> 
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-dark rounded-pill mt-3" name="callDiv">Divide</button> 
                    </div>
                    </div>
        </form>


        <?php
            if (isset($answer)) {
              if (!is_string($answer)) {
                ?>
                  	<p class="h5">The answer is : <?=$answer?></p>
                <?php
              }else if (is_string($answer)) {
                    ?>
                <p class="h5 text-danger"><?=$answer?></p>
                    <?php
              }
              }else {
            ?>
              <p class="h5">Input numbers and click a button</p>
            <?php	
            }
        
            ?>
            
<?php include ("../view/cdn/jsBS.php") ?>
<!-- <script src="js/script.js"></script> -->
</div>
</body>
</html>

<?php /* LITTLE TEST - WORKS FINE
            $calc = new PerformCalculationByInput;
            $calc->firstNum = 10;
            $calc->secondNum = 3;

            $add = $calc->addNumbers();
            $sub = $calc->subtractNumbers();
            $mul = $calc->multiplyNumbers();
            $div = $calc->divideNumbers();

            var_dump($add, $sub, $mul, $div);
            */
        ?>

