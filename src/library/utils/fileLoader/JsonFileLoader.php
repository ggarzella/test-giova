<?php

namespace utils\fileLoader;

class JsonFileLoader implements StrategyFileLoader
{
    public function loadContent($filePath)
    {
        try
        {
            // @ serve per non mostrare gli warning nel caso di mancato caricamento del file
            $fileContent = @file_get_contents($filePath);

            if ($fileContent === false)
                throw new FileLoaderException($filePath);

            $content = json_decode($fileContent, true);
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