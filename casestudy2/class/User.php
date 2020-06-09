<?php
/**
 * Class Category
 * author:Myles Foster
 * Date 2020-06-09
 * version: 1
 */

include_once "DB.php";
include_once "Category.php";
include_once "Product.php";

class User
{
    public $id;
    public $username;
    public $password;
    public $name;

    /**
     * User constructor.
     * @param $id
     * @param $username
     * @param $password
     * @param $name
     */
    public function __construct($id, $username, $password, $name)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
    }


    /**
     * @name viewCategories
     * @return category array
     */
    public function viewCategories()
    {
        $conn = (new DB())->connection; //creat connetcuion from db class
        $sql = "select * from category"; // my query
        $categories = array(); //my category is an array
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $category = new Category($row["id"], $row["name"], $row["imageName"]);//each row in table
                array_push($categories, $category); //push category to catergory array
            }
        }
        $conn->close(); //close database connection
        return $categories;
    }


    /**
     * @name showProductByCategory
     * @param $categoryID
     * @return product array
     */
    public function  showProductByCategory($categoryID){
        $conn = (new DB())->connection;
        $sql = "select * from Product where categoryID=".$categoryID; //. MEANS MERGE TWO STRING
        $products = array();
        $result = $conn->query($sql);
        if ($result->num_rows>0){
            while ($row = $result->fetch_assoc()){
                $product = new Product($row["id"], $row["Name"], $row ["imageName"],$row["price"], $row["categoryID"]);
                array_push( $products,$product);
            }
        }

        $conn->close();
        return $products;
}
}

