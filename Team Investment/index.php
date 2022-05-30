<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Investment</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    

    <div class = "container">
    <h1> Future Investment</h1>
    <br>
    <div class = "form">
    <form action="index.php" method = "post">
    <p>Investment Amount:</p>
    <input class = "amount1" type = "text" name = "amount"><br>
    <br>
    <p>Investment Years:</p>
    <input class ="year1" type="text" name = "years">
    <div>
    <br>
    <button class = "button" type = "submit" name ="button">Show</button>
    </div>
    <br>
    <br>
    </form>
    </div>
    <div class =" year">
    <?php
    echo "<h2>Years</h2><br>";
    if(isset($_POST["button"])){
        $InvestmentAmount = $_POST["amount"];
        $NumOfYears = $_POST["years"];
        for($x=1; $x<=$NumOfYears; $x++)
        {
            echo (2020 + $x);
            echo "<br>";
        }
    }
    ?>
    </div>
    <div class = "amount">
    <?php
    echo '<div><h2>Amount(Pesos)</h2></div><br>';
    if(isset($_POST["button"])){
        for($y=1; $y<=$NumOfYears; $y++)
        {
            if(($y%2) == 0){
                $InvestmentAmount = (1 + .14) * $InvestmentAmount;
            }
            if(($y%2) !=0){
                $InvestmentAmount = (1 + .12) * $InvestmentAmount;
            }
            echo (round($InvestmentAmount, 2));
            echo "<br>";
        }
    }
    ?>
    </div>
    </div>
</body>
</html>