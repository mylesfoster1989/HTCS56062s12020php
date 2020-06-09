
//logo animation moving right speed and length of time
function leftDividerAnimation() {
    targetPic = document.getElementById("leftDivPic");
    x = 0;
    setInterval(function () {
        targetPic.style.right = x + "px";
        x = x - 2;
        if (x >= 800){
            x = 0;
        }
    }, 1000);
}
//Logo animation end


//link the individual animal product and price whe clicking add to cart button
function addToCart(e) {
    cart = $("#cartDiv");
    name1 = $(e).attr("name");
    price = $(e).attr("price");
    qty = $(e).prev().val();

    cart.append("<p>Name: "+name1+"  Price: "+Number(price)*Number(qty) +"</p>");
    $
    total = total + Number(price)*Number(qty);


}
function invoice() {

    modal = document.getElementById("myModal");
    modal.style.display = "block";

    // Get the <span> element that closes the modal
    cross = document.getElementsByClassName("close")[0];
    console.log(cross);


    cross.onclick = function() {
        modal.style.display = "none";
    }


// When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }


    //Take everything from shopping cart
    $("#invoicePlace").empty();
    $("#invoicePlace").append($("#rightDiv").children());
    $("#invoicePlace").append("<p>Total: "+total+"</p>");


}

