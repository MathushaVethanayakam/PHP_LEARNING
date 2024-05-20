<form method="get"  action="<?php  echo  $_SERVER['PHP_SELF']; ?>" >
 
<input type="text" name="name" placeholder="Enter your name">
<input type="text" name="gender" placeholder="Enter your gender">
<button type="submit">submit</button>

</form>

<?php
    //print_r($_POST);
    echo $_REQUEST['name'];
    echo $_REQUEST['gender'];

?>