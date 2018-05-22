<?php

namespace utils\fileLoader;

use exception\FileTypeException;

class FileLoader
{
    public static function loadContent($filePath)
    {
        $file_parts = pathinfo($filePath);

        switch ($file_parts['extension'])
        {
            case "json":
                $loader = new JsonFileLoader();
                break;
            case "ini":
                $loader = new IniFileLoader();
                break;
            default:
                throw new FileTypeException($filePath);
        }

        $contextLoader = new StrategyContextLoader();
        return $contextLoader::loadFileContent($loader, $filePath);
    }
}