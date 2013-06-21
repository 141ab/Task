<?php
for ($row = 1; $row <= 7; $row++) { 
	for ($col = 1; $col <= ($row >4  ? 8 - $row : $row); $col++) { 
		echo '*'; } 
	echo "<br />"; }
?>