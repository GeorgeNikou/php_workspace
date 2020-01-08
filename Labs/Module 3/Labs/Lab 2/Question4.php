
<!--  Write a function Word1() that takes 3 words and echo the length of the longest one, all
	the vowels in each of the words, each word in revers uppercase and each word split with a
	dash (-) lowercasing every other letter starting with the first one of each word, lowercase
	letter should be blue and upper case letter should be red. A, E, I, O, and U
. -->


	<?php 

	echo "<br> ========================= LAB 2 QUESTION #4 ============================= " . "<br><br>";

	Word1("helloo","hoho","buy");

	function Word1($word1, $word2, $word3) {
		$length = strlen($word1);

		if (strlen($word2) > $length) {
		    $length = strlen($word2);
		} else if(strlen($word3) > $length) {
		    $length = strlen($word3);
		}

	    echo $length;

	    echo "<br>" . $word1 . " vowels: ";
	    for ($i = 0; $i < strlen($word1); $i++) { 
	    	if(strtolower($word1{$i}) == 'a' || strtolower($word1{$i}) == 'e' 
	    		|| strtolower($word1{$i}) == 'i' || strtolower($word1{$i}) == 'o'
	    		|| strtolower($word1{$i}) == 'u'){
				echo $word1{$i};
	    	}   
	    }

	    echo "<br>" . $word2 . " vowels: " ;
	    for ($i = 0; $i < strlen($word2); $i++) { 
	    	if(strtolower($word2{$i}) == 'a' || strtolower($word2{$i}) == 'e' 
	    		|| strtolower($word2{$i}) == 'i' || strtolower($word2{$i}) == 'o'
	    		|| strtolower($word2{$i}) == 'u'){
				echo $word2{$i};
	    	}   
	    }

	    echo "<br>" . $word3 . " vowels: " ;
	    for ($i = 0; $i < strlen($word3); $i++) { 
	    	if(strtolower($word3{$i}) == 'a' || strtolower($word3{$i}) == 'e' 
	    		|| strtolower($word3{$i}) == 'i' || strtolower($word3{$i}) == 'o'
	    		|| strtolower($word3{$i}) == 'u'){
				echo $word3{$i};
	    	}   
	    }

	    $allWords = strtoupper(strrev($word1)) . "-" . strtoupper(strrev($word2)) . "-" . strtoupper(strrev($word3)); //=====================================

	    echo "<br>" . $allWords;
		$allWordsEdited = "";
		$lower = true;
		for ($i = 0; $i < strlen($allWords); $i++) { 

			
			if($allWords{$i} != '-' && $lower){
				$allWordsEdited = $allWordsEdited . "<span style='color:#FF0036;'>" . strtolower($allWords{$i}) . "</span>";
	    	}else if($allWords{$i} != '-' && !$lower){
				$allWordsEdited = $allWordsEdited . "<span style='color:#1714EA;'>" . strtoupper($allWords{$i}) . "</span>";
	    	}else if($allWords{$i} == '-'){
	    		$allWordsEdited = $allWordsEdited . "-";
	    	}
			

			if($lower == true){
				$lower = false;
			}else{
				$lower = true;
			}

			if($allWords{$i} == '-'){
				$lower = true;
			}

	    	 
	    }
	    echo "<br>" . $allWordsEdited;

		/*hELLOO-hOhO-bUY
						
						OOLLEH-OHOH-YUB*/


	    //echo "<br>" . $word1 . " uppercase reverse: " . strtoupper(strrev($word1));
	    //echo "<br>" . $word2 . " uppercase reverse: " . strtoupper(strrev($word2));
	    //echo "<br>" . $word3 . " uppercase reverse: " . strtoupper(strrev($word3));

		
		//Word1("HELLOO","HOHO","BUY");

		
		
		


	}

	


	?>