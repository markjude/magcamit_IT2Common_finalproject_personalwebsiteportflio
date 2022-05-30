<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Jude Personal Info</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = "me-myself-container">
    <h1 class = "title">PERSONAL INFO</h1>
    <div class = "container">
    <?php
    $a = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
    $b = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S",'T',"U","V","W","X","Y","Z");
    $c = array("0","1","2","3","4","5","6","7","8","9");


  ?>
  <div>
  <img src="img/jude.jpg" class= "picture" alt="">
  </div> 
  <?php
   echo "<p> Full Name: ". $b[12].$a[0].$a[17].$a[10].$b[9]. $a[20]. $a[3].$a[4]. ". ".$b[12].". ".$b[12].$a[0].$a[6].$a[2]. $a[0]. $a[12]. $a[8].$a[19]."</p>";
   echo "<p> Address: ". $b[1].$a[0].$a[11].$a[8].$a[12].$a[1].$a[8].$a[13].$a[6]. ",".$b[1].$a[14],$a[0].$a[2]. ",". $b[12].$a[0].$a[17].$a[8].$a[13].$a[3].$a[20].$a[16].$a[20].$a[4]."</p>";
   echo "<p> Age: ". $c[2].$c[2]."</p>";
   echo "<p> Birthday: ". $b[9].$a[20].$a[11].$a[24]. " ".$c[2].$c[5]. ", ".$c[1].$c[9],$c[9].$c[9]."</p>";
   echo "<p> Gender: ". $b[12].$a[0].$a[11].$a[4]."</p>";
   echo "<p> Height: ". $c[1].$c[5].$c[0]."cm</p>";
   echo "<p> Weight: ". $c[5].$c[0]." ".$c[0]."kg</p>";
   echo "<p> Self-Entertainment: ". $b[8]." ".$a[11].$a[14].$a[21].$a[4].  " ".$a[15].$a[11].$a[0].$a[24].$a[8].$a[13].$a[6]. " ".$a[12].$a[14].$a[1].$a[8].$a[11].$a[4].$a[11].$a[4].$a[6].$a[4].$a[13].$a[3].$a[18]. " ".$a[6].$a[0].$a[12].$a[4].$a[18]. ". ".$b[8]. " ".$a[15].$a[11].$a[0].$a[24]. " ".$a[8].$a[19]. " ".$a[5].$a[14].$a[17]. " "$a[12].$a[24]." ".$a[15].$a[0].$a[18].$a[19].$a[8].$a[12].$a[4]. "</p>";
 ?>
 <div>
 
 </div>
 <div class = "educ">
 <h1 class title>Educational Background</h1>
 <div>
 <?php

echo "<p> Elementary School: ". $b[1].$a[0].$a[11].$a[8].$a[12].$a[1].$a[8].$a[13].$a[6]. ", ".$b[4].$a[11].$a[4].$a[12].$a[4].$a[13].$a[19].$a[0].$a[17].$a[24]. ", ".$b[18].$a[2].$a[7].$a[14].$a[14].$a[11]."</p>";
echo "<p> High School: ". $b[8].$a[11].$a[0].$a[24].$a[0]. ", "$b[13].$a[0].$a[19].$a[8].$a[14].$a[13].$a[0].$a[11]. ", ".$b[7].$a[8].$a[6].$a[7].", ".$b[18].$a[2].$a[7].$a[14].$a[14].$a[11]. "</p>";
echo "<p> College: ".$b[12].$a[0].$a[17].$a[8].$a[13].$a[3].$a[20].$a[16].$a[20].$a[4]. " ".$b[18].$a[19].$a[0].$a[19].$a[4]. " ".$b[2].$a[14].$a[11].$a[11].$a[4].$a[6].$a[4]. "</p>";
?>

    </div>
    
    <div class = "Movies">
    <h1 class title>BEST MOVIES FOR ME</h1>
    <img src="img/fwb.jpg" class = "pic1" alt=""> <br>;
    <h1> Fabricated City</h1>
    <img src="img/Jun.jpg" class = "pic1" alt=""> <br>;
    <h1> Hitman Agent Jun</h1>
    
   
    </div>
   
</body>
</html>