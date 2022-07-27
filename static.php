<html>

<body>

<h1>Static method and properties</h1>

<?php


class pi {
    public static $value = 3.14159;
    public function Value() {
        return self::$value;
    }
}

// Get static property

$pi = new pi();
echo $pi->Value();

?>


</body>

</html>
