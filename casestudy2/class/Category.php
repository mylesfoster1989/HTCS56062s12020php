<?php
/**
 * Class Category
 * author:Myles Foster
 * Date 2020-06-09
 * version: 1
 */


class Category
{
    public $id;
    public $name;
    public $imageName;

    /**
     * Category constructor.
     * @param $id
     * @param $name
     * @param $picture
     */
    public function __construct($id, $name, $picture)
    {
        $this->id = $id;
        $this->name = $name;
        $this->picture = $picture;
    }


}