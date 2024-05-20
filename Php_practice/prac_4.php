<?php

echo "<pre>";

print_r($_FILES);
echo "</pre>";
?>

<form method="post"  action="<?php  echo  $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >
 
<input type="file" name="file" >

<button type="submit">submit</button>

</form>