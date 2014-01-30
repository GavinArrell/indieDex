<?php
require 'core.inc.php';

if(loggedin()) {returnTrue(); return true;}
else {returnFalse(); return false;}

function returnTrue()  {echo 'true';}
function returnFalse() {echo 'falses';}

?>