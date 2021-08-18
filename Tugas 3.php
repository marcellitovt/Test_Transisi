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
    
 


    return $unigram;
}

echo unbGenerator("Jakarta adalah ibukota negara Republik Indonesia");
?>