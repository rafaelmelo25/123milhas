<!-- Questão 1 Pratico -->

<?php
$a=1;
$b=3;
$c=2;

function formulab($a,$b,$c){
		
		if ($a==0){
			echo "Variável 'a' Não pode ser igual a zero";
		}
		
		$delta=$b*$b -4 * $a *$c;
		if ($delta<0){
			echo "Raízes irreais";
		}
		elseif($delta==0){
			$x = (-$b)/2*$a;
			echo "x = ". $x;
		}
		
		else {
			$x1 = ((-$b)+ sqrt($delta))/2*$a;
			$x2 = ((-$b)- sqrt($delta))/2*$a;
			echo "x1 = ".number_format($x1, 2, ',','');
			echo "<br/>x2 = ".number_format($x2, 2, ',','');
		} 
}

formulab($a,$b,$c);


?>

<!--  Fim Questão 1 Pratico -->
