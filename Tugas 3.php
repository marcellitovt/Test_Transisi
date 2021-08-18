<?php
// Buatlah sebuah fungsi dalam PHP untuk membentuk unigram, bigram, trigram dari sebuah string.
// Contoh : bila fungsi diberikan input “Jakarta adalah ibukota negara Republik Indonesia”, maka akan menghasilkan output :
// ● Unigram : jakarta, adalah, ibukota, negara, republik, indonesia
// ● Bigram : jakarta adalah, ibukota negara, republik indonesia
// ● Trigram : jakarta adalah ibukota, negara republik indonesia

function unbGenerator($string){
    $input = explode(' ', $string); //Space separated word

    // Unigram
    $unigram = '';
		foreach ($input as $word) {
			$unigram .= $word.', ';
		}
	$unigram = substr($unigram, 0, -2);
    
    //Bigram
    $n = 0;
    $bigram = '';
        foreach($input as $word){
            if ($n == 0){
               $bigram .= $word.' ';
               $n++;
           }
            else {
               $bigram .= $word.', ';
               $n = 0;
           }
        }
    $bigram = substr($bigram, 0, -2);
 
        

    //Trigram
    $n = 0;
    $trigram = '';
        foreach($input as $word){
            if ($n < 2){
                $trigram .= $word.' ';
                $n++;
            }
            else {
                $trigram .= $word.', ';
                $n = 0;
            }
        }
    $trigram = substr($trigram, 0, -2);
    
    $result = "● Unigram : ".$unigram . "\n● Bigram : ".$bigram . "\n● Trigram : " . $trigram;
    return $result;
}

echo unbGenerator("Jakarta adalah ibukota negara Republik Indonesia");
?>