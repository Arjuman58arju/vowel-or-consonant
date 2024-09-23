<?php 
  $character = $_POST['character'];
  $letter = strtolower($character );
	switch($letter) {
		case "a":
		case "e":
		case "i":
		case "o":
		case "u":
            echo "$letter a is vowel";
        break;
		default:
			echo " is a consonant";
    }

?>