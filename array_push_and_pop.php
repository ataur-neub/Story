array_push() and array_pop() both are built in method. array_push() method helps to add an element at the end of the array, on the contrary array_pop() method helps to delete an element from end of the array. Let see an example 
<?php
    $example=["php","javascript"];
    
    $newElement=array_push($example,"C");//here C will be inserted after javascript
    print_r($newElement);
    
    echo $newElement ."\n";

?>
