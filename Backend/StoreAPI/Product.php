<?php

class OurProducts
{

    private $title, $price, $descp, $picture, $cat;

    public function __construct($title, $price, $description, $picture, $cat)
{
        $this->title = $title;
        $this->price = $price;
        $this->desciption = $description;
        $this->picture = $picture;
        $this->cat = $cat;
    }

    public function toArray()
    {
        $array = array(
            "title" => $this->title,
            "price" => $this->price,
            "descp" => $this->descp,
            "picture" => $this->picture,
            "cat" => $this->cat,
        );

        return $array;
    }
}
