<?php
    class Parcel
    {
        public $width;
        public $length;
        public $height;
        public $weight;

        // function __construct($width, $length, $height, $weight)
        // {
        //     $this->width = $width;
        //     $this->length = $length;
        //     $this->height = $height;
        //     $this->weight = $weight;
        // }

        function getVolume()
        {
            return $this->width * $this->length * $this->height;
        }
    }

    $my_parcel = new Parcel($width, $length, $height, $weight);
    $my_parcel->width = $_GET["width"];
    $my_parcel->length = $_GET["length"];
    $my_parcel->height = $_GET["height"];
    $my_parcel->weight = $_GET["weight"];
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <title>Shipping Cost</title>
</head>
<body>
    <h1>This will be your shipping cost:</h1>
    <?php
        $newVolume = $my_parcel->getVolume();
        echo "<h3> $newVolume </h3>";
    ?>
</body>
</html>
