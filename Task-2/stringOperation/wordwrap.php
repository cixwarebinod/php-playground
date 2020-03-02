<?php
//breaks the line when the integer value meet
$str = "This line will break into new line until the 20 characters";
echo wordwrap($str,20,"<br>\n");
?>