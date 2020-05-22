<?php
  $data=[1,2,4,22,33,33,1,2,22];// here there are some duplicate value
  print_r(array_unique($data));//array_unique() function helps to remove duplicated value

 
?>
//output
/*
Array(
[0]=>1
[1]=>2
[2]=>4
[3]=>22
[4]=>33

)
*/
