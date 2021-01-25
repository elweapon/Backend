<?php

class App
{
    public static $endpoint = 'http://localhost/Backend/StoreAPI/api.php';

    public static function main()
    {
        try {
            $array = self::getData();
            self::viewData($array);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function getData()
    {
        $json = @file_get_contents(self::$endpoint);

        if (!$json) {
            throw new Exception("<div class='alert alert-danger m-5' role='alert'>
        Error, unable to get data</div>");
        }

        return json_decode($json, true);
    }

    public static function viewData($array)
    {
        $i = 0;
        foreach ($array as $key => $value) {
            if (!empty($_GET['cat'])) {
                if ($value['cat'] == $_GET['cat']) {
                    echo "<h2> " . $value['title'] . " -  (Price: $" . $value['price'] . ")</h2>" . '<br>';
                    echo "<img src='$value[picture]' class='img-fluid'>" . "<br>";
                    echo "<b>" . $value['descp'] . "</b>" . '<br>';
                    $rng = rand(0, 50);
                    if ($rng == 0) {
                        echo "<h4><p id=outStock>Out of stock</p></h4>";
                    } else {
                        echo "<h4><p id=inStock>In stock: " . $rng . "</p></h4>";
                    }
                } else {
                    $i++;
                        if ($i > 9) {
                            $noProducts = "<h2 style='color:red'>No products found under category: " . $_GET['cat'] . "</h2>";
                        }
                }
            } else {
                echo "<h2> " . $value['title'] . " -  (Price: $" . $value['price'] . ")</h2>" . '<br>';
                echo "<img src='$value[picture]' class='img-fluid'>" . "<br>";
                echo "<b>" . $value['descp'] . "</b>" . '<br>';
                $rng = rand(0, 50);
                if ($rng == 0) {
                    echo "<h4><p id=outStock>Out of stock</p></h4>";
                } else {
                    echo "<h4><p id=inStock>In stock: " . $rng . "</p></h4>";
                }
            }
        }
        if (isset($noProducts)) {
            echo $noProducts;
        }
    }
}
