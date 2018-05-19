window.addEventListener("DOMContentLoaded", function()
{

    function filterItems(element)
    {
        var filter, ul, li, a, i;

        filter = element.target.value.toUpperCase();
        ul = document.getElementById("items");
        li = ul.getElementsByTagName('li');

        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("span")[0];
            console.log(a.innerHTML);
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }

    var search = document.getElementById("itemsSearch");
    search.addEventListener("keyup", filterItems);

}, false);