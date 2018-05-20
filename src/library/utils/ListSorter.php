<?php

namespace utils;

class ListSorter
{
    /*
     * @param array $element1
     * @param array $element2
     * @return array
     */
    public function sortByName($element1, $element2)
    {
        return strcasecmp($element1["name"], $element2["name"]);
    }

    /*
     * @param array $element1
     * @param array $element2
     * @return array
     */
    public function sortByDistance($element1, $element2)
    {
        if ($element1["distance"] > $element2["distance"])
            return 1;
        else if ($element1["distance"] == $element2["distance"])
            return 0;
        else
            return -1;
    }
}