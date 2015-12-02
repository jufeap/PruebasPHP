<?php
function calc($n1,$n2,$n3){
	if($n1>$n2){
		if($n1>$n3){
			$resultado=$n1;
		}else{
			$resultado=$n3;
		}
	}else{
		($num2>$num3){
			$resultado=$num2;
		}else{
			$resultado=$n3;
		}
	}
	return $resultado;
}
$res=mayor(3,7,2);
echo "El numero mayor es $res <br>";
$res=mayor(6,15,7);
echo "El numero mayor es $res <br>";
$res=mayor(8,6,9);
echo "El mayor es $res";
?>