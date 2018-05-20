window.addEventListener("DOMContentLoaded", function()
{
    var buttonBuy = document.getElementsByName("cta");
    buttonBuy.forEach(function(element) {
        element.addEventListener("click", function(element) {
            var button = element.target,
                idStore = button.parentElement.querySelector('input[name="idStore"]').value,
                idItem = button.parentElement.querySelector('input[name="idItem"]').value,
                quantity = button.parentElement.querySelector('input[name="quantity"]').value,
                minQuantity = button.parentElement.querySelector('input[name="minQuantity"]').value;

            quantity = quantity - minQuantity;
            quantity = 10;

            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", "/transfer", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("idStore="+idStore+"&idItem="+idItem+"&quantity="+quantity);
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState == 4 && xhttp.status == "200") {
                    console.log(xhttp.responseText);
                    console.log(xhttp.status);
                    //callback(req.responseText);
                }
            };
        });
    });
});