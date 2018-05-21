function FilterItem()
{
    this.filter = function(text, elementContainers, elementClass)
    {
        for (i = 0; i < elementContainers.length; i++)
        {
            itemName = elementContainers[i].getElementsByClassName(elementClass)[0];

            if (itemName.innerHTML.toUpperCase().indexOf(text) > -1)
                elementContainers[i].style.display = "";
            else
                elementContainers[i].style.display = "none";
        }
    }
}