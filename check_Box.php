<?php
    if(isset($_POST["submit"])){
	$language=$_POST["language "];
        echo $language[0];
        echo $language[1];
}
    <form action="" method="post"  >
       Php: <input  type="checkbox" name="language[]" value="php"><br>
       Javasctip<input type="checkbox" name="language[]" value="Javascript"><br>
	<input type="submit" name="submit" value="Submit">   


    </form>



?>
