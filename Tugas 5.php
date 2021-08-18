<?php
// Buatlah sebuah fungsi “enkripsi”, yang apabila diberikan input DFHKNQ akan memberikan output EDKGSK

// Rumus Enkripsi = +1 -2 +3 ... -n

function encrypt($input){
    $char = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    $input = strtoupper($input); 
    $arr_input = str_split($input);

    $plus = true;
    $result = '';
    $x = 1;
    $tmp = 0;

    for ($i=0; $i < count($arr_input); $i++) { 
        $tmp = array_search($arr_input[$i], $char);

        if ($plus == true) {
            $result .= $char[$tmp+$x];
            $plus = false;

        } 
        else {
            $ne = $tmp-$x;
            if ($ne < 0) {
                $ne = count($char) + ($ne);
            }
            
            $result .= $char[$ne];
            $plus = true;
        }
        $x++;
    }
    
  return $result;
}

echo encrypt('DFHKNQ');

?>