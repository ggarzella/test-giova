<?php

namespace factory;

use utils\fileLoader\FileLoader;
use service\StoreService;

class StoreFactory
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$instance == null)
        {
            $c = __CLASS__;
            self::$instance = new $c;
        }

        return self::$instance;
    }

    public function getStoreService()
    {
        try
        {
            $data = $this->retrieveData();
            $storeService = new StoreService();
            $storeService->setDataSource($data);
            $itemService = ItemFactory::getInstance()->getItemService();
            $storeService->setItemService($itemService);
            return $storeService;
        }
        catch(FileTypeException $e)
        {
            var_dump($e->getMessage());
            //throw new \Exception("Errore nel caricamento dell'utente");
            return false;
        }
        catch(FileLoaderException $e)
        {
            var_dump($e->getMessage());
            //throw new \Exception("Errore nel caricamento dell'utente");
            return false;
        }
        catch(\Exception $e)
        {
            var_dump($e->getMessage());
            //throw new \Exception("Errore nel caricamento dell'utente");
            return false;
        }
    }

    private function retrieveData()
    {
        $file = "data/stores.json";
        return FileLoader::loadContent($file);
    }
}