<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Set method</title>
</head>
<body>
    <?php
    class First{
        public $a;
        public $b;
        function set_fst($a){
            $this->a=$a;
        }
        function get_fst(){
            return $this->a;
        }
    }

    $obj1 = new First();
    $obj1->set_fst('Los Angel');
    echo $obj1->get_fst();
    ?>
</body>
</html>