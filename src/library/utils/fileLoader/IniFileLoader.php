<?php

namespace utils\fileLoader;

use exception\FileLoaderException;

class IniFileLoader implements StrategyFileLoader
{
    public static function loadContent($filePath)
    {
        try
        {
            // @ serve per non mostrare gli warning nel caso di mancato caricamento del file
            $content = @parse_ini_file($filePath, true);

            if ($content === false)
                throw new FileLoaderException($filePath);

            return $content;
        }
        catch(FileLoaderException $e)
        {
            throw $e;
        }
        catch(\Exception $e)
        {
            throw $e;
        }
    }
}