<?php

namespace utils\fileLoader;

interface StrategyFileLoader
{
    public static function loadContent($filePath);
}