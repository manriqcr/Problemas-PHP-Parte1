<?php
class CompleteRange
{

	public function build($string)
	{
        $ultimoValor = $string[count($string)-1];

        for ($i=0; $i < count($string) ; $i++) {
            //$a[] = $string[$i];
            if($string [$i]+1 != $string[$i+1] && count($string) > $i+1 ){
                for($j=$string[$i];$j<$string[$i+1];$j++){
                    $a[] = $j;
                }

            }elseif(count($string) == $i+1 ){
                $a[] = $string[$i];
            }else{
                $a[] = $string[$i];
            }
        }

		return $a;
	}
}

/*
Comprobacion de ejemplos
*/
    $o_changeString = new CompleteRange();
    //$string = trim(fgets(STDIN,1024));
    //[1, 2, 4, 5]
    $entrada = [1, 2, 4, 5];
    print_r($entrada);
    echo "<br>";
    print_r ($o_changeString->build($entrada));
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $entrada = [2, 4, 9];
    print_r($entrada);
    echo "<br>";
    print_r ($o_changeString->build($entrada));
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $entrada = [55, 58, 60];
    print_r($entrada);
    echo "<br>";
    print_r ($o_changeString->build($entrada));
    
?>
