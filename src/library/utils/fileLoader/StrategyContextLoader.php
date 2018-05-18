<?php

namespace utils\fileLoader;

class StrategyContextLoader
{
    /*
     * @var string
     */
    private $file;

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param string $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /*
     * @param StrategyFileLoader $fileLoader
     * @return array
     */
    public function loadFileContent(StrategyFileLoader $fileLoader)
    {
        return $fileLoader->loadContent($this->getFile());
    }
}