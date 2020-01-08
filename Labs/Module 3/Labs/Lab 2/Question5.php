
<!-- 5. Write a function charFreq() that takes a string and builds a frequency listing of the
	consonant contained in it. Represent the frequency listing in an echo. -->



	<?php

	echo "<br> ========================= LAB 2 QUESTION #5 ============================= " . "<br><br>";
	echo " <br>Word/s without vowels: " . " ";
	charFreq("The dog crossed the dirt road in Arizona");

	function charFreq($string){
		for ($i = 0; $i < strlen($string); $i++) { 
	    	if($string{$i} != 'a' && $string{$i} != 'e' && $string{$i} != 'i' && $string{$i} != 'o'
	    		&& $string{$i} != 'u'){
				echo $string{$i};
	    	}   
	    }
	}

	echo "<br>";


	charFreqAss("The dog crossed the dirt road in Arizona");


	// THIS IS TOTALLY MY ORIGINAL UNINSPIRED HARD WORKED ON CODE. LIKE I TOTALLY DID IT MYSELF. I ABSOLUTETLY DID NOT COPY/PASTE THE TEACHERS CODE FROM LECTURE 3.
	function charFreqAss($str){
		$freq = array(/*"a"=>0,*/"b"=>0,"c"=>0,"d"=>0,/*"e"=>0,*/"f"=>0,"g"=>0,"h"=>0,/*"i"=>0,*/"j"=>0,"k"=>0,"l"=>0,"m"=>0,"n"=>0,/*"o"=>0,*/"p"=>0,"q"=>0,"r"=>0,"s"=>0,"t"=>0,/*"u"=>0,*/"v"=>0,"w"=>0,"x"=>0,"y"=>0,"z"=>0);

		foreach (str_split(strtolower($str)) as $s){
			if($s == "e" || $s == "i" || $s == "o" || $s == "u" || $s == "a" || $s == "E" || $s == "I" || $s == "O" || $s == "U" || $s == "A" || $s == " "){
				continue;
			}else{
				$freq[$s]++;
			}
			
		}

		echo "Entry: " . $str . "<br> Char Freq: ";

		foreach ($freq as $key => $v)
			echo $v != 0 ? ($key . " : " . $v . "&nbsp;|&nbsp;"):"";

	}
	

	?>