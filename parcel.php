<?php
  class Parcel
  {
      private $width;
      private $height;
      private $length;
      private $weight;

    function getVolume() {
        return $this->width * $this->height * $this->length;
    }

    // function __construct($width, $height, $length, $weight)
    // {
    //     $this->width = $width;
    //     $this->height = $height;
    //     $this->length = $length;
    //     $this->weight = $weight;
    // }

    function setWidth($newWidth)
    {
        $this->width = $newWidth;
    }
    function getWidth()
    {
        return $this->width;
    }

    function setHeight($newHeight)
    {
        $this->height = $newHeight;
    }
    function getHeight()
    {
        return $this->height;
    }

    function setLength($newLength)
    {
        $this->length = $newLength;
    }
    function getLength()
    {
        return $this->length;
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

    $my_parcel = new Parcel();
    $my_parcel->setWidth() = $_GET["width"];
    $my_parcel->setHeight() = $_GET["height"];
    $my_parcel->setLength() = $_GET["length"];
    $my_parcel->setWeight() = $_GET["weight"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shipping Cost</title>
</head>
<body>
    <h1>Your shipping cost:</h1>
    <?php
        $newWidth = $parcel->getWidth();
        $newHeight = $parcel->getHeight();
        $newLength = $parcel->getLength();
        $newWeight = $parcel->getWeight();
    ?>
</body>
</html>
