
<?php 
 
 
 function calculadora($numero1, $numero2 ){
	 $suma = $numero1 + $numero2;
	 $resta = $numero1 - $numero2;
	 $multi = $numero1 * $numero2;
	 $div = $numero1 / $numero2;
	
	echo " La suma de $numero1 y $numero2 es: $suma<br>";
	echo " La resta de $numero1 menos $numero2 es: $resta<br>";
	echo " La multiplicacion de $numero1 por $numero2 es: $multi<br>";
	echo " La division de $numero1 entre $numero2 es: $div<br>";
 }


function paresEimpares(){
	
	for($i = 1; $i<=50; $i++){
		if($i % 2 == 0){
			echo "$i es PAR<br>";
			
		}else{
			echo "$i es IMPAR<br>";
		}
	}
	
	
}


function salarios($edad, $salario ){
    if($edad < 18){
        $salariofinal = $salario * 0.21;
    } else if($edad == 18){
        $salariofinal = $salario * 0.13;
    } else {
        $salariofinal = $salario * 2;
    }
    return $salariofinal;
};


function filtrar($datos){
	
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	
	return $datos;
	
}



	
 ?>

