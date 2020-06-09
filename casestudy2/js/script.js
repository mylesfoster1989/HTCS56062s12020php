
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



    function addToInvoice() {

}
//show invoice page

function invoice() {

    voicePage = document.getElementById("voicePage");
    //Get the button that opens the modal
    var btn = document.getElementById("showInvoiceBut");

    //Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    //When the user clicks on the button, open the modal
    btn.onclick = function() {
        cart = document.getElementsByClassName("cartInput");
        voiceContent = document.getElementById("voice-content");
        Total = 0;
        var elems = document.getElementsByClassName("items");
        i = 0
        while (i<elems.length){
            elems[i].parentNode.removeChild(elems[i]);
        }


        //link food and price with individual product
        i = 0;
        while (i < cart.length) {
            console.log(cart[i].id);
            qty = cart[i].value;
            switch (cart[i].id) {
                case "cartCat":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Cat: Qty:'+ qty +' Price:$' + (Number(qty) * 3.3)+ '</p>');
                    Total += (Number(qty) * 3.3);
                    break;
                case "cartBird":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Bird: Qty:'+ qty +' Price:$' + (Number(qty) * 2.3)+ '</p>');
                    Total += (Number(qty) * 2.3);
                    break;
                case "cartFish":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Fish: Qty:'+ qty +' Price:$' + (Number(qty) * 1.3)+ '</p>');
                    Total += (Number(qty) * 1.3);
                    break;
                case "cartDog":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Dog: Qty:'+ qty +' Price:$' + (Number(qty) * 4.5)+ '</p>');
                    Total += (Number(qty) * 4.5);
                    break;
                case "cartDog2":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Dog2: Qty:'+ qty +' Price:$' + (Number(qty) * 4.3)+ '</p>');
                    Total += (Number(qty) * 4.3);
                    break;

                case "cartDog3":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Dog3: Qty:'+ qty +' Price:$' + (Number(qty) * 8.3)+ '</p>');
                    Total += (Number(qty) * 8.3);
                    break;

                case "cartDog4":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Dog4: Qty:'+ qty +' Price:$' + (Number(qty) * 7.55)+ '</p>');
                    Total += (Number(qty) * 7.55);
                    break;

                case "cartDog5":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Dog5: Qty:'+ qty +' Price:$' + (Number(qty) * 3.55)+ '</p>');
                    Total += (Number(qty) * 3.55);
                    break;

                case "cartDog6":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Dog6: Qty:'+ qty +' Price:$' + (Number(qty) * 3.30)+ '</p>');
                    Total += (Number(qty) * 3.3);
                    break;

                case "cartRep":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Rep: Qty:'+ qty +' Price:$' + (Number(qty) * 3.33)+ '</p>');
                    Total += (Number(qty) * 3.33);
                    break;

                case "cartChicken":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Chicken: Qty:'+ qty +' Price:$' + (Number(qty) * 3.20)+ '</p>');
                    Total += (Number(qty) * 3.2);
                    break;

                case "cartSmallAnimal":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">SmallAnimal: Qty:'+ qty +' Price:$' + (Number(qty) * 3.55)+ '</p>');
                    Total += (Number(qty) * 3.55);
                    break;

                case "cartBird2":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Bird2: Qty:'+ qty +' Price:$' + (Number(qty) * 1.3)+ '</p>');
                    Total += (Number(qty) * 1.3);
                    break;

                case "cartBird3":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Bird3: Qty:'+ qty +' Price:$' + (Number(qty) * 3.3)+ '</p>');
                    Total += (Number(qty) * 3.3);
                    break;

                    case "cartCat1":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Cat1: Qty:'+ qty +' Price:$' + (Number(qty) * 5.3)+ '</p>');
                    Total += (Number(qty) * 5.3);
                    break;

                case "cartCat2":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Cat2: Qty:'+ qty +' Price:$' + (Number(qty) * 11.3)+ '</p>');
                    Total += (Number(qty) * 11.3);
                    break;

                case "cartChicken2":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Chicken2: Qty:'+ qty +' Price:$' + (Number(qty) * 3.20)+ '</p>');
                    Total += (Number(qty) * 3.2);
                    break;

                case "cartChicken3":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Chicken3: Qty:'+ qty +' Price:$' + (Number(qty) * 12.20)+ '</p>');
                    Total += (Number(qty) * 12.2);
                    break;

                case "cartFish2":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Fish2: Qty:'+ qty +' Price:$' + (Number(qty) * 12.3)+ '</p>');
                    Total += (Number(qty) * 12.3);
                    break;

                case "cartFish3":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Fish3: Qty:'+ qty +' Price:$' + (Number(qty) * 3.3)+ '</p>');
                    Total += (Number(qty) * 3.3);
                    break;

                case "cartRep2":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Rep2: Qty:'+ qty +' Price:$' + (Number(qty) * 1.30)+ '</p>');
                    Total += (Number(qty) * 1.30);
                    break;

                case "cartRep3":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Rep3: Qty:'+ qty +' Price:$' + (Number(qty) * 2.30)+ '</p>');
                    Total += (Number(qty) * 2.30);
                    break;

                case "cartSmallAnimal2":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">SmallAnimal2: Qty:'+ qty +' Price:$' + (Number(qty) * 2.55)+ '</p>');
                    Total += (Number(qty) * 2.55);
                    break;



                case "cartSmallAnimal3":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">SmallAnimal3: Qty:'+ qty +' Price:$' + (Number(qty) * 23.55)+ '</p>');
                    Total += (Number(qty) * 23.55);
                    break;
                default:

                // code block
            }

            i++;

        }
        voiceContent.insertAdjacentHTML(
            'beforeend',
            '<p class = "items">Total: $'+ Total+'</p>');

        voicePage.style.display = "block";
    }

    //When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        voicePage.style.display = "none";
    }

    //When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == voicePage) {
            voicePage.style.display = "none";
        }
    }
}
