<?php

namespace utils\fileLoader;

class StrategyContextLoader
{
    /*
     * @param StrategyFileLoader $fileLoader
     * @return array
     */
    public static function loadFileContent(StrategyFileLoader $fileLoader, $file)
    {
        return $fileLoader->loadContent($file);
    }
}