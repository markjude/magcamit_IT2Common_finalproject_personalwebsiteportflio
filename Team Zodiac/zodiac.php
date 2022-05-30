<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
</head>
<body>
        <div>
            <div>

			<form action="" method="post">
				<input name="name" type="text" >

                    <select class="month" name="month">
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select> 
				<button type="submit" >Submit</button>
			</form>
				
                <?php
				echo "<br><h1 style='font-size:50px' align=center>My Birth Stone & Zodiac Sign</h1>";
				
				$CompleteName = $_POST['name']?? null;
				$YourBirthMonth = $_POST['month']?? null;
				
			
				

				echo "<h1>".$CompleteName."</h1>";
				
				if ($YourBirthMonth == "January" ) {
					echo "<h1 style='margin-left: 2%;'>Birth Month: January</h1><br>";
					echo "<img style='border-radius:10%;' src= stone/1.jpeg class='center'> <br>";
					echo "<img style='border-radius:10%;' src= ZODIAC/capricorn.jpeg class='center'> ";
					
                }
                	
				else if ($YourBirthMonth == "February" ) {
					echo "<h1 style='margin-left: 2%;'>Birth Month: February</h1><br>";
					echo "<img style='border-radius:10%;' src= stone/2.jpeg class='center' > <br>";
					echo "<img style='border-radius:10%;' src= ZODIAC/aquarius.jpeg class='center'id = 'two'> ";
                }
                else if ($YourBirthMonth == "March" ) {
					echo "<h1 style='margin-left: 2%;'>Birth Month: March</h1><br>";
                    echo "<img style='border-radius:10%;' src= stone/3.jpeg class='center'> <br>";
					echo "<img style='border-radius:10%;' src= ZODIAC/pisces.jpeg class='center'> ";
                }
				
					else if ($YourBirthMonth == "April" ) {
					echo "<h1 style='margin-left: 2%;'>Birth Month: APRIL</h1><br>";
                    echo "<img style='border-radius:10%;' src= stone/4.jpeg class='center'> <br>";
					echo "<img style='border-radius:10%;' src= ZODIAC/aries.jpeg class='center'> ";
                }
				
					else if ($YourBirthMonth == "May" ) {
					echo "<h1 style='margin-left: 2%;'>Birth Month: May</h1><br>";
					echo "<img style='border-radius:10%;' src= stone/5.jpeg class='center'> <br>";
					echo "<img style='border-radius:10%;' src= ZODIAC/taurus.jpeg class='center'> ";
                }
				
					else if ($YourBirthMonth == "June" ) {
					echo "<h1 style='margin-left: 2%;'>Birth Month: June</h1><br>";
					echo "<img style='border-radius:10%;' src= stone/6.jpeg class='center'> <br>";
					echo "<img style='border-radius:10%;' src= ZODIAC/genimi.jpeg class='center'> ";
                }
				
					else if ($YourBirthMonth == "July" ) {
					echo "<h1 style='margin-left: 2%;'>Birth Month: July</h1>  <br>";
					echo "<img style='border-radius:10%;' src= stone/7.jpeg class='center'> <br>";
					echo "<img style='border-radius:10%;' src= ZODIAC/cancer.jpeg class='center'> ";
				}
					else if ($YourBirthMonth == "August" ) {
					echo "<h1 style='margin-left: 2%;'>Birth Month: August</h1><br>";
                    echo "<img style='border-radius:10%;' src= stone/8.jpeg class='center'> <br>";
					echo "<img style='border-radius:10%;' src= ZODIAC/leo.jpeg class='center'> ";
				}
					else if ($YourBirthMonth == "September" ) {
					echo "<h1 style='margin-left: 2%;'>Birth Month: September</h1><br>";
                    echo "<img style='border-radius:10%;' src= stone/9.jpeg class='center'> <br>";
					echo "<img style='border-radius:10%;' src= ZODIAC/virgo.jpeg class='center'> ";
				}
					else if ($YourBirthMonth == "October" ) {
					echo "<h1 style='margin-left: 2%;'>Birth Month: October</h1><br>";
                    echo "<img style='border-radius:10%;' src= stone/10.jpeg class='center'> <br>";
					echo "<img style='border-radius:10%;' src= ZODIAC/libra.jpeg class='center'> ";
				}
					else if ($YourBirthMonth == "November" ) {
					echo "<h1 style='margin-left: 2%;'>Birth Month: November</h1><br>";
                    echo "<img style='border-radius:10%;' src= stone/11.jpeg class='center'> <br>";
					echo "<img style='border-radius:10%;' src= ZODIAC/scorpio.jpeg class='center'> ";
				}
					else if ($YourBirthMonth == "December" ) {
					echo "<h1 style='margin-left: 2%;'>Birth Month: December</h1><br>";
                    echo "<img style='border-radius:10%;' src= stone/12.jpeg class='center'> <br>";
					echo "<img style='border-radius:10%;' src= ZODIAC/sagittarius.jpeg class='center'> ";
				}
				else{
					echo "<h1  style='font-size:50px' align=center>ALLIEN</h1>";
				}
                ?>
            </div>
		
        </div>
</body>
</html>