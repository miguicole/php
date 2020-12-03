<?php
	echo "<h1>Ejercicio1</h1>";
	echo "<hr/>";
	$pais = "España";
	$continente = "Europa";
	echo "Mi pais es $pais y se encuentra en el continente $continente";

	echo "<h1>Ejercicio2</h1>";
	echo "<hr/>";
	$num = 2;
	while ($num <= 100) {
		echo "$num <br>";
		$num += 2;
	}

	echo "<h1>Ejercicio3</h1>";
	echo "<hr/>";
	$num = 1;
	while ($num <= 40) {
		$cuadrado = $num*$num;
		echo "$cuadrado <br>";
		$num ++;
	}

	echo "<h1>Ejercicio4</h1>";
	echo "<hr/>";
	if(isset($_GET['n1']) && isset($_GET['n2'])){
		$n1 = $_GET['n1'];
		$n2 = $_GET['n2'];
		echo "<p>$n1 + $n2 = " . ($n1+$n2) . "</p>";
		echo "<p>$n1 - $n2 = " . ($n1-$n2) . "</p>";
		echo "<p>$n1 x $n2 = " . ($n1*$n2) . "</p>";
		echo "<p>$n1 / $n2 = " . ($n1/$n2) . "</p>";
	}else{
		echo "Introduce los numeros correctamente por la URL...";
	}

	echo "<h1>Ejercicio5</h1>";
	echo "<hr/>";
	if(isset($_GET['n1']) && isset($_GET['n2'])){
		$n1 = $_GET['n1'];
		$n2 = $_GET['n2'];
		for ($i=$n1; $i <= $n2 ; $i++) { 
			echo "$i <br>";
		}
	}else{
		echo "Introduce los numeros correctamente por la URL...";
	}

	echo "<h1>Ejercicio6</h1>";
	echo "<hr/>";
	echo "<table border='1'>";
	echo "<tr>";
	for($h = 1; $h <= 10; $h++){
		echo "<th>Tabla del $h</th>";
	}
	echo "</tr>";

	echo "<tr>";
	for($i = 1; $i <= 10; $i++){
		echo "<td>";
		for($x = 1; $x <= 10; $x++){
			echo "$i x $x = " . ($i*$x) . "<br>";
		}
		echo "</td>";
	}
	echo "</tr";
	echo "</table";


	echo "<h1>Ejercicio7</h1>";
	echo "<hr/>";
	if(isset($_GET['n1']) && isset($_GET['n2'])){
		$n1 = $_GET['n1'];
		$n2 = $_GET['n2'];
		for ($i=$n1; $i <= $n2 ; $i++) { 
			if ($i % 2 == 1) {
				echo "$i <br>";
			}
		}
	}else{
		echo "Introduce los numeros correctamente por la URL...";
	}

?>