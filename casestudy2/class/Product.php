<?php
/**
 * Class Category
 * author:Myles Foster
 * Date 2020-06-09
 * version: 1
 */


class Product
{
    Public $id;
    public $name;
    public $imageName;
    public $picture;
    public $price;
    public $categoryID;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $imageName
     * @param $picture
     * @param $price
     * @param $categoryID
     */
    public function __construct($id, $name, $imageName, $picture, $price, $categoryID)
    {
        $this->id = $id;
        $this->name = $name;
        $this->imageName = $imageName;
        $this->picture = $picture;
        $this->price = $price;
        $this->categoryID = $categoryID;
    }


}