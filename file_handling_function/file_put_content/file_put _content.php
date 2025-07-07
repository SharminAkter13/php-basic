<?php
//file_put_contents(filename,data,mode,context)
echo file_put_contents("data_store.txt","Hello") ;

echo "<br>";
echo "<br>";
// explode() function
// explode(separator, string,limit) 
$data ="this is a file put content";
echo $data;
echo "<br>";
echo "<br>";

print_r(explode(" ", $data,2));

?>