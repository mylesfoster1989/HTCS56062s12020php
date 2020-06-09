<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product</title>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/style.css">

</head>
<body onload="leftDividerAnimation(), invoice()">

<?php
include_once "header.php";
?>


<div align="right">
    <td id="rightside">
        <p>Cart:</p>
        <div id="cartDiv"></div>
        <button id="showInvoiceBut">Invoice</button>
    </td>
</div>
<?php
$categoryID = $_GET["categoryID"];
$products = $user->showProductByCategory($categoryID);
$i = 0;
while ($i < sizeof($products)){
$product = $products[$i];
?>

<div class="product">
    <img src="<?php echo $product->imageName;?>" height="257" width="196"/>
    <p>price: <?php echo $product->price;?></p>
    <p>qty:<input class="qty" id="catQty" type="number">
        <button class="<?php echo $product->name;?>" id="addCat" onclick="addToCart(this)">Add to Cart</button>
    </p>
</div>

<?php

    $i = $i + 1;
}
?>


    <div id="navigation"> <!-- nav i will create my menu here-->
        <ul> <!--use to create menu-->
            <li><a href="Dog.html">
                    <img src="image/dog.jpg"/>
                </a></li>
            <li><a href="Cat.html"><img src="image/cat.jpg"/>
                </a></li>
            <li><a href="Fish.html"><img src="image/fish.png"/>
                </a></li>
            <li><a href="Reptile.html"><img src="image/reptile.png"/>
                </a></li>
            <li><a href="SmallAnimal.html"><img src="image/smallanimals.jpg"/>
                </a></li>
            <li><a href="Chicken.html"><img src="image/chicken.png"/>
                </a></li>
            <li><a href="Bird.html"><img src="image/bird.png"/>
                </a></li>
        </ul>

    </div>


    <!-- The Voice Page -->
    <div id="voicePage" class="voice">

        <!-- Modal content -->
        <div id="voice-content">
            <span class="close">&times;</span>
            <p>Please check your invoice</p>
        </div>

    </div>


    <?php
    include_once "footer.php";
    ?>

</body>


</html>
