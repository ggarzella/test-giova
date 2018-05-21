window.addEventListener("DOMContentLoaded", function()
{
    var search = document.getElementById("items-search");
    search.addEventListener("keyup", function(element)
    {
        var filterItem = new FilterItem(),
            text = element.target.value.toUpperCase(),
            elementContainers = document.getElementById("items").getElementsByTagName('li')
            elementClass = "itemName";

        filterItem.filter(text, elementContainers, elementClass);
    });


    var len = 150,
        itemDescription = document.getElementsByClassName('itemDescription');
    for (var i = 0; i < itemDescription.length; i++) {
        var text = itemDescription[i].innerHTML;
        if (text.length > len) {
            text = text.substring(0, len);
            text = text.replace(/\w+$/, '');

            text += '<a href="#" ' +
                'onclick="this.parentNode.innerHTML=' +
                'unescape(\''+escape(itemDescription[i].innerHTML)+'\');' +
                'return false;">' +
                '...<\/a>';
            itemDescription[i].innerHTML = text;
        }
    }


    var buttonBuy = document.getElementsByName("cta");
    buttonBuy.forEach(function(element) {
        element.addEventListener("click", function(element) {
            var button = element.target;
            var idItem = button.parentElement.querySelector('input[name="itemId"]').value;
            location.href = "/store/" + idItem;
        });
    });

}, false);