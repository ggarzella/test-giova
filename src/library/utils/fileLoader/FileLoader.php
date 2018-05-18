<?php

namespace utils\fileLoader;

use exception\FileTypeException;

class FileLoader
{
    public function loadContent($filePath)
    {
        $file_parts = pathinfo($filePath);

        switch ($file_parts['extension'])
        {
            case "json":
                $loader = new JsonFileLoader();
                break;
            default:
                throw new FileTypeException($filePath);
        }

        $contextLoader = new StrategyContextLoader();
        $contextLoader->setFile($filePath);
        return $contextLoader->loadFileContent($loader);
    }
}