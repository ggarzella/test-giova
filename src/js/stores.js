window.addEventListener("DOMContentLoaded", function()
{
    var buttonBuy = document.getElementsByName("cta");
    buttonBuy.forEach(function(element) {
        element.addEventListener("click", function(element) {
            var button = element.target,
                idStore = button.parentElement.querySelector('input[name="idStore"]').value,
                idItem = button.parentElement.querySelector('input[name="idItem"]').value,
                quantity = button.parentElement.querySelector('input[name="quantity"]').value,
                params = "idStore="+idStore+"&idItem="+idItem+"&quantity="+quantity;

            var httpCall = new HttpCall();
            httpCall.load("POST", "/transfer", true, "application/x-www-form-urlencoded", params, onLoad);
        });
    });

    function onLoad(xmlhttp)
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == "200") {
            var result = JSON.parse(xmlhttp.responseText);
            document.getElementById("itemName").innerHTML = result['item'];
            document.getElementById("storeName").innerHTML = result['store'];
            document.getElementById("quantity").innerHTML = result['quantity'];
            $('#myModal').modal('show');
        }
    }
});