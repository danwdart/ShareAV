<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initAutoload()
    {
        $loader = Zend_Loader_Autoloader::getInstance();
        $loader->registerNamespace('ShareAV_');
    }

}

