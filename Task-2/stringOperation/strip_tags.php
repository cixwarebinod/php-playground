<?php
//removes the html xml and others tags and only allow the selected one
echo strip_tags("Hi! I am a <b>cixware</b> student");
echo strip_tags("Hi! I am a <b>cixware</b> <i>student</i>","<b>");//here the bold tag is allowed not Italic tag
?>