<?php

namespace utils\fileLoader;

interface StrategyFileLoader
{
    public function loadContent($filePath);
}