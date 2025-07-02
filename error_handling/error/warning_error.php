<!-- Warnings are non-fatal errors. PHP will continue executing the script even after a warning occurs. They are typically issued when PHP encounters issues that do not prevent script execution but might lead to unexpected behavior -->

<?php
echo "<h3>warning Error</h3>";
include("nonexistentfile.php");  // File does not exist
?>