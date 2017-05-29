<?php
class ClearPar
{

	public function build($string) // ()())()
	{

        $apertura = "(";
        $cierre = ")";

        $cantidadCadena = strlen($string); // 7
		//echo $cantidadCadena;
		$cont = 0; // contador
        for ($i=0; $i < $cantidadCadena-1; $i++) { //i = 6 
            if (substr($string,$i,1)==$apertura && substr($string,$i+1,1)==$cierre) { // ( == ( && ) == )
				$cont++; // 3
            }
        }
		for ($j=1; $j <= $cont; $j++) { // j= 4
			$valor .= "()"; // ()()()
		}
		return $valor;
	}
}
/*
Comprobacion de ejemplos
*/
$entrada= "()())()";
echo $entrada."==>";
$o_clearPar = new ClearPar();
echo $o_clearPar->build($entrada);
echo "<br>";
$entrada= "'()(()'";
echo $entrada."==>";

echo $o_clearPar->build($entrada);
echo "<br>";
$entrada= ")(";
echo $entrada."==>";

echo $o_clearPar->build(')(');
echo "<br>";
$entrada= "((()";
echo $entrada."==>";

echo $o_clearPar->build('((()');
?>
