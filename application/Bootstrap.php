<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    public function _initRestRoute() 
    {
        //Alle controllers binnen de api module worden hierdoor rest API controllers
        //Nodig Get / Post / Put / Delete action om dit te laten werken.
        $this->bootstrap('frontcontroller');
        $frontController = Zend_Controller_Front::getInstance();
        $restRoute = new Zend_Rest_Route($frontController, array(), array('api'));
        $frontController->getRouter()->addRoute('rest', $restRoute);
    }

}

