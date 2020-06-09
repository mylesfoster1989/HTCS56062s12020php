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
    public $Name;
    public $imageName;
    public $price;
    public $categoryID;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $imageName
     * @param $price
     * @param $categoryID
     */
    public function __construct($id, $Name, $imageName, $price, $categoryID)
    {
        $this->id = $id;
        $this->Name = $Name;
        $this->imageName = $imageName;
        $this->price = $price;
        $this->categoryID = $categoryID;
    }


}
