
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Mi primera pagina php</title>
	</head>
	<body>

	<?php
		echo "<h1>Mi primer script php!</h1>";
		//esto es mi primer comentario
		$x = 5 /* + 15 */ + 5;
		$y = 10.5;
		$w=$x+$y;
		echo $w;
		$texto="hola mundo";
		echo "<h2>$texto</h2>";
		$booleano=true;
		echo "<h2>".$texto." ".$booleano."</h2>";
		//$z = 5; 
		function mifuncion() {
			static $z=0;
		    echo "<p>Var z dentro de la funcion es: $z</p>";
		    $z++;
		} 
		mifuncion();
		mifuncion();
		mifuncion();
		//echo "<p>Variable z fuera de la funcion es: $z</>";
		//echo $z;
		$asistentes = array('alfredo','rolando','charly','fredy' );
		$materias = array('li08' => 'paginas Web','li09'=>'ingles' );
		echo $materias['li09']."<br>";
		var_dump($materias);
		echo $texto[3];
		echo strlen($texto);
		echo str_word_count($texto);
		echo strrev($texto);
		echo strpos($texto, 'mundo');
		echo str_replace('mundo', 'reprobados', $texto);
		$booleano=false;
		if ($booleano) {
			echo "<h2>entrando en el if</h2>";
		}else{
			echo "<h2>mmm.. NO entrando en el if</h2>";
		}
		$a=10;
		$b=7;
		if ($a<$b) {
			echo "a es menor que b";
		}else if($b<$a){
			echo "b es menor que a";
		}else{
			echo "a y b son iguales";
		}
		// <= >= == resaltar que == no es lo mismo que =
		$a='hola';
		switch ($a) {
			case 'hola':
				echo "<h2>hola desde case hola</h2>";
				break;
			
			default:
				# code...
				break;
		}

		$b=5;
		while ($b<=10) {
			echo "<h3>while</h3>";
			$b++;
		}

		for ($i=0; $i < 5; $i++) { 
			echo "<h3>hola desde for</h3>";
		}

		foreach ($asistentes as $nombre ) {		
			echo "<h1>".$nombre." esta reprobado...</h1>";
		}

		foreach ($materias as $clave => $curso) {
			echo "<h2>la materia $curso tiene clave $clave</h2>";
		}

		function PonerH1($value='hola')
		{
			echo "<h1>$value</h1>";
		}

		PonerH1($texto);
		PonerH1();

		function suma($a,$b)
		{
			return $a+$b;
		}

		PonerH1(suma(2,4));

	?>
	</body>
</html>