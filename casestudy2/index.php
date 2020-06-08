<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>homePage</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>

<body onload="leftDividerAnimation()">

<?php
include_once "header.php";
?>






<div id="navigation"> <!-- nav i will create my menu here-->
    <ul> <!--use to create menu-->
        <li><a href="Dog.html">

            <img src="image/dog.jpg" height="239" width="210"/></a></li>
        <li><a href="Cat.html"><img src="image/cat.jpg" height="228" width="221"/>
        </a></li>
        <li><a href="Fish.html"><img src="image/fish.png" height="165" width="305"/>
        </a></li>
        <li><a href="Reptile.html"><img src="image/reptile.png" height="188" width="268"/>
        </a></li>
        <li><a href="SmallAnimal.html"><img src="image/smallanimals.jpg" height="174" width="290"/>
        </a></li>
        <li><a href="Chicken.html"><img src="image/chicken.png" height="189" width="267"/>
        </a></li>
        <li><a href="#"><img src="image/bird.png" height="204" width="247"/>
        </a></li>
    </ul>


        <?php
        include_once "footer.php";
        ?>

</div>
</body>


</html>