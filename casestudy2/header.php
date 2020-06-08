<div id="header">
    <img id="leftDivPic" src="image/animallogo.PNG"/>
</div>
<h1>

    <div id="navigation1"> <!-- nav i will create my menu here-->
        <ul> <!--use to create menu-->
            <li><a href="index.php">Home</a></li>
  <!--          <li><a href="Product.html">Products</a></li>-->
 <!--           <li><a href="Career.html">Career</a></li>-->

 <!--           <li><a href="aboutus.php">About Us</a></li>-->
            <?php
            include_once "class/User.php";
            $user = new User(null, "","","");
            $categories = $user->viewCategories();
            print_r($categories);
            ?>
        </ul>
    </div>
</h1>

<hr>