<!DOCTYPE html>
<html lang="pl">
<html>
<head>
<title>Kartkowka</title>
<meta charset="UTF-8">
</head>
<body>
	<form name="formularz" method="POST" action="">
		<label>Podaj ilos liczb</label>
		<br>
		<input type="number" name="ilosc">
		<br>
		<input type="submit" name="zatwierdz" value="potwierdz">
		<input type="reset" name="reset" value="resetuj">
	</form>
</body>
</html>
<?php
	$ilosc=$_POST["ilosc"];
	$tablica=array();
	$parzyste=0;
	for($i=0;$i<$ilosc;$i++){
			$tablica[$i]=rand(0,10);
			if($tablica[$i]%2==0){
				echo $tablica[$i]." ";
				$parzyste++;
			}
	}
	echo "<br>";
	echo "Ilos liczb parzystych: ".$parzyste;
?>

