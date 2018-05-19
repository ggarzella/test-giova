window.addEventListener("DOMContentLoaded", function()
{
    function filterItems(element)
    {
        var filter, ul, li, itemName, i;

        filter = element.target.value.toUpperCase();
        ul = document.getElementById("items");
        li = ul.getElementsByTagName('li');

        for (i = 0; i < li.length; i++)
        {
            itemName = li[i].getElementsByClassName("itemName")[0];

            if (itemName.innerHTML.toUpperCase().indexOf(filter) > -1)
                li[i].style.display = "";
            else
                li[i].style.display = "none";
        }
    }

    var search = document.getElementById("itemsSearch");
    search.addEventListener("keyup", filterItems);


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

    var buttonBuy = document.getElementsByName("button");
    buttonBuy.forEach(function(element) {
        element.addEventListener("click", function(element) {
            var button = element.target;
            var idItem = button.parentElement.querySelector('input[name="itemId"]').value;
            location.href = "/store/" + idItem;
        });
    });

    console.log(buttonBuy);

}, false);