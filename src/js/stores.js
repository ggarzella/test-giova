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

            quantity = minQuantity - quantity ;

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "/transfer", true);
            xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            var params = "idStore="+idStore+"&idItem="+idItem+"&quantity="+quantity;
            //var str_json = "json_string=" + ({idStore: idStore, idItem: idItem, quantity: quantity });
            xmlhttp.send(params);
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == "200") {
                    console.log(xmlhttp.responseText);
                    console.log(xmlhttp.status);
                    //callback(req.responseText);
                }
            };
        });
    });
});