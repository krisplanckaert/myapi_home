<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function pageAction() 
    {
        $id = $this->_getParam('id');
        $pageModel = new Application_Model_Page();
        $pages = $pageModel->fetchAll();
        $this->view->pages = $pages;
        $this->view->id = $id;
    }

}

