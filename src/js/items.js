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

}, false);