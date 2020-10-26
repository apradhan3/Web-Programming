<?php 
	include_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
		$card1;
		if(isset($_POST["name"]) || isset($_POST["select"]) || isset($_POST["cardnumber"]) || isset($_POST["cardtype"]))
		{
			
			$name1 = (string)$_POST['name'];
			$select1 = (string)$_POST['select'];
			$cardnumber1 = (string)$_POST['cardnumber'];
			$card1 = (string)$_POST['cardtype'];

		}
		if(empty($name1 && $select1 && $cardnumber1 && $card1))
		{
				echo "<h1> SORRY </h1> <br>";
				echo " You didnot fill out your form!";
		}	
		
		else
		{
			echo " <h1> Thanks, sucker! </h1>";
			echo "<p>Your information has been recorded.</p>";
			echo "<dt><b>Name:</b></dt> $name1 <br>";
			echo " <dt><b>Section:</b></dt>$select1  <br>";
			echo " <dt><b>Credit Card:</b></dt>$cardnumber1 ($card1)<br>";

			echo "<p>These are the history</p>";


			$sql = "INSERT INTO registered (nam,sel,cardno,radio)
					VALUES ('$name1' , '$select1', '$cardnumber1','$card1');";

			mysqli_query($conn,$sql);

			$sql1 = "SELECT * FROM registered;";
			$result = mysqli_query($conn,$sql1);
			$resultCheck = mysqli_num_rows($result);

			if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($result))
				{
					echo $row['nam'] .", ". $row['sel'] .", ". $row['cardno'].", ". $row['radio'] .", "."<br>";
				}
			}

			
			

		}

		
			

	

?>

</body>
</html>