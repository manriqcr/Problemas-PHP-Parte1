<?php
class changeString
{
	public $cadenaAbedario = "abcdefghijklmnñopqrstuvwxyz";

	public function build($string) // string = fgT 
	{
		$newCadena = '';
        $this->cadenaAbedario  = utf8_decode($this->cadenaAbedario);
        utf8_encode($string);
		mb_internal_encoding('UTF-8');

		$longitudString = mb_strlen($string); // longitudString = 3
		for($i=0;$i<$longitudString;$i++)
		{
			$caracter = mb_substr($string,$i,1); // $caracter = t para i = 2
			
			$caracterMayuscula = mb_strtoupper($caracter); // T
			$Fmayuscula = 0;
			//echo  $caracter." ---> ". $caracterMayuscula ."\n";
			if($caracter == $caracterMayuscula) // T == T
			{
				$caracter = mb_strtolower($caracter);
				//echo $caracter ."\n";
				$Fmayuscula = 1;
			}        

			$posicion = mb_strpos($this->cadenaAbedario,$caracter); // t dentro del abecedario => possicion 21
			//echo  $posicion."<br>";
			if($posicion === false)
			{
				$newCadena .= $caracter;
			}
			else
			{
				if($posicion == mb_strlen($this->cadenaAbedario)-1)
				{
					$posicion = -1;
				}
				$siguienteCaracter = mb_substr($this->cadenaAbedario,$posicion+1,1); // 22 del abecerdario u
				if($Fmayuscula == 1)
				{
					$siguienteCaracter = mb_strtoupper($siguienteCaracter); // U
				}
				$newCadena .= $siguienteCaracter; //ghU
			}
		}
		return $newCadena;
	}
}


/*
Comprobacion de ejemplos
*/
   
    $o_changeString = new changeString();
    //$string = trim(fgets(STDIN,1024));
    $string = "123 abcd*3";
    echo $string ." --> ";
    echo $o_changeString->build($string);
    echo "<br>";
     $string = "**Casa 52";
    echo $string ." --> ";
    echo $o_changeString->build($string);
    echo "<br>";
     $string = "**Casa 52Z";
    echo $string ." --> ";
    echo $o_changeString->build($string);
    echo "<br>";
    $string = "fgT";
    echo $string ." --> ";
    echo $o_changeString->build($string);
?>
