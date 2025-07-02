<!-- Notice errors are the least severe type of PHP errors. These are typically used to notify developers of minor issues in the code, such as accessing an undefined variable. Notice errors do not interrupt script execution and often go unnoticed unless explicitly logged. -->

<?php
if(isset($n)){
    return $x=$n+9;
}else{
    trigger_error('$n is notice error');
}
?>
<?php
echo $undefinedVariable;  // Accessing an undefined variable
?>