<?php
//  preg_match( $pattern, $input, $matches, $flags, $offset )
//  preg_match( $pattern, $input, $matches )


$str = "Return a new string where matched pattern have been replace with another string ";
$pattern ="/string/i";

echo preg_match($pattern,$str);

?>

<?php
$string = "The quick brown fox jumps over the lazy dog.";
if (preg_match('/quick.*fox/', $string)) {
  echo "Match found!";
}
?>
