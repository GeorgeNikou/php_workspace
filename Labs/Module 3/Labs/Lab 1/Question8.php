

<!-- Write a program which will count the vowels characters in the text "w3consultation -->



<?php 

echo "<br> ========================= LAB 1 QUESTION #8 ============================= " . "<br><br>";


$varOne = "w3consultation"; // String to check

// Display number of vowels in the string
echo "There are <strong>".preg_match_all('/[aeiou]/i',$varOne,$matches)."</strong> vowels in the word <em>".$varOne."</em>";

?>