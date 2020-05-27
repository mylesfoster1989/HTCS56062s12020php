
<?php

session_start();
session_destroy(); //remove everything in session

?>
<script>
    setTimeout(function () {
        window.open("loginform.php", "_self"); // go to login form
    }, 3000);

</script>