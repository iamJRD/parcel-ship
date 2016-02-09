<?php
    class Parcel
    {
        private $width;
        private $length;
        private $height;
        private $weight;

        function __construct($width, $length, $height, $weight)
        {
            $this->width = $width;
            $this->length = $length;
            $this->height = $height;
            $this->weight = $weight;
        }

        function getVolume()
        {
            return $this->width * $this->length * $this->height;
        }

        function costToShip()
        {
          $parcelVolume = $this->getVolume();
          $shipPrice = ($parcelVolume * 0.25) + ($this->weight * .50);
          return $formatted_price = number_format($shipPrice, 2);
        }

        function setWidth($newWidth)
        {
          $this->width = $newWidth;
        }

        function getWidth()
        {
          return $this->width;
        }

        function setLength($newLength)
        {
          $this->length = $newLength;
        }

        function getLength()
        {
          return $this->length;
        }

        function setHeight($newHeight)
        {
          $this->height = $newHeight;
        }

        function getHeight()
        {
          return $this->height;
        }

        function setWeight($newWeight)
        {
          $this->weight = $newWeight;
        }

        function getWeight()
        {
          return $this->weight;
        }
    }

    $my_parcel = new Parcel($_GET["width"], $_GET["length"], $_GET["height"], $_GET["weight"]);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <title>Shipping Cost</title>
</head>
<body>
    <div class="container">
    <?php
        $shippingCost = $my_parcel->costToShip();
        $parcelWidth = $my_parcel->getWidth();
        $parcelLength = $my_parcel->getLength();
        $parcelHeight = $my_parcel->getHeight();
        $parcelWeight = $my_parcel->getWeight();

        if ($parcelWidth == "" || $parcelLength == "" || $parcelHeight == "" || $parcelWeight == "") {
            echo "<h1>Please fill out all fields!</h1>";
        }
        //nicely organized!
        else {
            echo "<h1>This will be your shipping cost:</h1>";
            echo "<h3>$$shippingCost</h3>";
            echo "<h4>Your package:</h4>";
            echo "<p>Width: $parcelWidth</p>";
            echo "<p>Length: $parcelLength</p>";
            echo "<p>Height: $parcelHeight</p>";
            echo "<p>Weight: $parcelWeight</p>";
        }
    ?>
    </div>
</body>
</html>
